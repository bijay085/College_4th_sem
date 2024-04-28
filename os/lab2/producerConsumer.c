#include <stdio.h>
#include <pthread.h>
#include <unistd.h>

// producer consumer with race condtion
#define N 5
int count = 0;
pthread_mutex_t mutex;

void *producer(void *arg) {
    while (1) {
        pthread_mutex_lock(&mutex);
        if (count == N)
            sleep(1);
        else {
            count++;
            printf("Produced item. Count: %d\n", count);
        }
        pthread_mutex_unlock(&mutex);
    }
}

void *consumer(void *arg) {
    while (1) {
        pthread_mutex_lock(&mutex);
        if (count == 0)
            sleep(1);
        else {
            count--;
            printf("Consumed item. Count: %d\n", count);
        }
        pthread_mutex_unlock(&mutex);
    }
}

int main() {
    pthread_t producer_thread, consumer_thread;
    pthread_mutex_init(&mutex, NULL);

    pthread_create(&producer_thread, NULL, producer, NULL);
    pthread_create(&consumer_thread, NULL, consumer, NULL);

    pthread_join(producer_thread, NULL);
    pthread_join(consumer_thread, NULL);

    pthread_mutex_destroy(&mutex);
    return 0;
}
