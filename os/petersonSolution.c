/* This code snippet is implementing a simple mutual exclusion algorithm known as the Peterson's
Algorithm. It is used to synchronize multiple processes or threads to ensure that only one process
can enter a critical section at a time. */
#include <stdio.h>
#define FALSE 0
#define TRUE 1
#define N 2

int turn;
int interested[N];

void enter_region(int process)
{
    int other;
    other = 1 - process;
    interested[process] = TRUE;
    turn = process;
    while (turn == process && interested[other]);
}

void leave_region(int process)
{
    interested[process] = FALSE;
}

int main()
{
    int process;
    // Initialize the interested array
    interested[0] = FALSE;
    interested[1] = FALSE;

    // Let's simulate two processes trying to enter the critical section
    process = 0;
    enter_region(process);
    printf("Process %d entered the critical section.\n", process);
    // Simulating some work in the critical section
    printf("Process %d is working in the critical section.\n", process);
    leave_region(process);
    printf("Process %d left the critical section.\n", process);

    process = 1;
    enter_region(process);
    printf("Process %d entered the critical section.\n", process);
    // Simulating some work in the critical section
    printf("Process %d is working in the critical section.\n", process);
    leave_region(process);
    printf("Process %d left the critical section.\n", process);

    return 0;
}
