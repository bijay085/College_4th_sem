#include <stdio.h>
#include <pthread.h>
#include <semaphore.h>
#include <unistd.h>

#define NUM_CHAIRS 5

sem_t customers, barber, mutex;
int waiting = 0;

void *customer(void *param) {
    int id = *((int *)param);

    sem_wait(&mutex);
    if (waiting < NUM_CHAIRS) {
        waiting++;
        printf("Customer %d takes a seat. Waiting: %d\n", id, waiting);
        sem_post(&customers);
        sem_post(&mutex);
        sem_wait(&barber); // Wait for the barber to signal
        printf("Customer %d gets a haircut\n", id);
    } else {
        sem_post(&mutex); // No seats available, leave the shop
        printf("Customer %d leaves as no seats available\n", id);
    }
}

void *barber_thread(void *param) {
    while (1) {
        sem_wait(&customers); // Wait for customers to arrive
        sem_wait(&mutex);
        waiting--;
        printf("Barber starts cutting hair. Waiting: %d\n", waiting);
        sem_post(&barber); // Signal customer to get haircut
        sem_post(&mutex);
        sleep(2); // Simulate haircut time
    }
}

int main() {
    pthread_t barberThread;
    pthread_t customerThreads[10]; // Number of customers

    sem_init(&customers, 0, 0);
    sem_init(&barber, 0, 0);
    sem_init(&mutex, 0, 1);

    pthread_create(&barberThread, NULL, barber_thread, NULL);

    int customerIDs[10];
    for (int i = 0; i < 10; i++) {
        customerIDs[i] = i + 1;
        pthread_create(&customerThreads[i], NULL, customer, &customerIDs[i]);
        sleep(1); // Simulate customers arriving at intervals
    }

    pthread_join(barberThread, NULL);
    for (int i = 0; i < 10; i++) {
        pthread_join(customerThreads[i], NULL);
    }

    return 0;
}
