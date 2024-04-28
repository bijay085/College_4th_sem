#include <stdio.h>
#include <pthread.h>
#include <semaphore.h>
#include <unistd.h>

#define BUFFER_SIZE 5
#define PRODUCER_SLEEP_TIME 1
#define CONSUMER_SLEEP_TIME 1

int buffer[BUFFER_SIZE];
int in = 0, out = 0;
sem_t mutex, full, empty;

void *producer(void *arg) {
    int item = 1;
    while (1) {
        sleep(PRODUCER_SLEEP_TIME); // Simulating production time

        sem_wait(&empty);
        sem_wait(&mutex);

        buffer[in] = item;
        printf("Produced item %d. In: %d\n", item, in);
        in = (in + 1) % BUFFER_SIZE;

        sem_post(&mutex);
        sem_post(&full);

        item++;
    }
}

void *consumer(void *arg) {
    while (1) {
        sleep(CONSUMER_SLEEP_TIME); // Simulating consumption time

        sem_wait(&full);
        sem_wait(&mutex);

        int item = buffer[out];
        printf("Consumed item %d. Out: %d\n", item, out);
        out = (out + 1) % BUFFER_SIZE;

        sem_post(&mutex);
        sem_post(&empty);
    }
}

int main() {
    pthread_t producer_thread, consumer_thread;

    sem_init(&mutex, 0, 1);
    sem_init(&full, 0, 0);
    sem_init(&empty, 0, BUFFER_SIZE);

    pthread_create(&producer_thread, NULL, producer, NULL);
    pthread_create(&consumer_thread, NULL, consumer, NULL);

    pthread_join(producer_thread, NULL);
    pthread_join(consumer_thread, NULL);

    sem_destroy(&mutex);
    sem_destroy(&full);
    sem_destroy(&empty);

    return 0;
}
