#include <stdio.h>
#include <pthread.h>
#include <unistd.h>

#define NUM_PHILOSOPHERS 5

pthread_mutex_t chopsticks[NUM_PHILOSOPHERS];

void *philosopher(void *arg) {
    int philosopher_id = *((int *)arg);
    int left_chopstick = philosopher_id;
    int right_chopstick = (philosopher_id + 1) % NUM_PHILOSOPHERS;

    while (1) {
        // Thinking
        printf("Philosopher %d is thinking.\n", philosopher_id);
        sleep(1);

        // Pick up chopsticks
        pthread_mutex_lock(&chopsticks[left_chopstick]);
        printf("Philosopher %d picked up left chopstick.\n", philosopher_id);
        pthread_mutex_lock(&chopsticks[right_chopstick]);
        printf("Philosopher %d picked up right chopstick.\n", philosopher_id);

        // Eating
        printf("Philosopher %d is eating.\n", philosopher_id);
        sleep(2);

        // Put down chopsticks
        pthread_mutex_unlock(&chopsticks[right_chopstick]);
        printf("Philosopher %d put down right chopstick.\n", philosopher_id);
        pthread_mutex_unlock(&chopsticks[left_chopstick]);
        printf("Philosopher %d put down left chopstick.\n", philosopher_id);
    }
}

int main() {
    pthread_t philosophers[NUM_PHILOSOPHERS];
    int philosopher_ids[NUM_PHILOSOPHERS];

    // Initialize mutex locks for each chopstick
    for (int i = 0; i < NUM_PHILOSOPHERS; i++) {
        pthread_mutex_init(&chopsticks[i], NULL);
    }

    // Create philosopher threads
    for (int i = 0; i < NUM_PHILOSOPHERS; i++) {
        philosopher_ids[i] = i;
        pthread_create(&philosophers[i], NULL, philosopher, &philosopher_ids[i]);
    }

    // Join philosopher threads
    for (int i = 0; i < NUM_PHILOSOPHERS; i++) {
        pthread_join(philosophers[i], NULL);
    }

    // Destroy mutex locks
    for (int i = 0; i < NUM_PHILOSOPHERS; i++) {
        pthread_mutex_destroy(&chopsticks[i]);
    }

    return 0;
}


//output
/*
Philosopher 0 is thinking.
Philosopher 1 is thinking.
Philosopher 2 is thinking.
Philosopher 3 is thinking.
Philosopher 4 is thinking.
Philosopher 0 picked up left chopstick.
Philosopher 1 picked up left chopstick.
Philosopher 2 picked up left chopstick.
Philosopher 3 picked up left chopstick.
Philosopher 4 picked up left chopstick.
Philosopher 0 picked up right chopstick.
Philosopher 1 picked up right chopstick.
Philosopher 2 picked up right chopstick.
Philosopher 3 picked up right chopstick.
Philosopher 4 picked up right chopstick.
Philosopher 0 is eating.
Philosopher 1 is eating.
Philosopher 2 is eating.
Philosopher 3 is eating.
Philosopher 4 is eating.
Philosopher 0 put down right chopstick.
Philosopher 0 put down left chopstick.
Philosopher 1 put down right chopstick.
Philosopher 1 put down left chopstick.
Philosopher 2 put down right chopstick.
Philosopher 2 put down left chopstick.
Philosopher 3 put down right chopstick.
Philosopher 3 put down left chopstick.
Philosopher 4 put down right chopstick.
Philosopher 4 put down left chopstick.
*/