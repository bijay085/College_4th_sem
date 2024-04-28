#include <stdio.h>
#include <pthread.h>
#include <semaphore.h>

sem_t mutex, writeBlock;
int readerCount = 0;

void *reader(void *param) {
    sem_wait(&mutex);
    readerCount++;
    if (readerCount == 1) {
        sem_wait(&writeBlock);
    }
    sem_post(&mutex);

    // Reading
    printf("Reader entered. Total readers: %d\n", readerCount);

    sem_wait(&mutex);
    readerCount--;
    if (readerCount == 0) {
        sem_post(&writeBlock);
    }
    sem_post(&mutex);

    printf("Reader left. Total readers: %d\n", readerCount);
}

void *writer(void *param) {
    sem_wait(&writeBlock);

    // Writing
    printf("Writer entered\n");

    sem_post(&writeBlock);

    printf("Writer left\n");
}

int main() {
    int numReaders, i;
    printf("Enter the number of readers: ");
    scanf("%d", &numReaders);

    sem_init(&mutex, 0, 1);
    sem_init(&writeBlock, 0, 1);

    pthread_t writerThreads[numReaders], readerThreads[numReaders];

    for (i = 0; i < numReaders; i++) {
        pthread_create(&writerThreads[i], NULL, writer, NULL);
        pthread_create(&readerThreads[i], NULL, reader, NULL);
    }

    for (i = 0; i < numReaders; i++) {
        pthread_join(writerThreads[i], NULL);
        pthread_join(readerThreads[i], NULL);
    }

    return 0;
}
