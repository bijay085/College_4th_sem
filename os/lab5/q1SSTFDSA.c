#include <stdio.h>
#include <stdlib.h>

// Function to find the shortest seek time
int findClosest(int queue[], int n, int head) {
    int closest = -1;
    int min_distance = 1000; // Assuming a large initial distance

    for (int i = 0; i < n; i++) {
        if (!queue[i]) continue; // Skip visited tracks
        int distance = abs(queue[i] - head);
        if (distance < min_distance) {
            min_distance = distance;
            closest = i;
        }
    }

    return closest;
}

int main() {
    int queue[20], n, head, i, seek_time = 0;
    float avg_seek_time;

    printf("Enter the number of requests: ");
    scanf("%d", &n);

    printf("Enter the requests sequence: ");
    for (i = 0; i < n; i++)
        scanf("%d", &queue[i]);

    printf("Enter the initial head position: ");
    scanf("%d", &head);

    printf("\nSSTF Schedule:\n");
    for (i = 0; i < n; i++) {
        int closest = findClosest(queue, n, head);
        printf("%d -> ", queue[closest]);
        seek_time += abs(head - queue[closest]);
        head = queue[closest];
        queue[closest] = 0; // Mark the track as visited
    }

    printf("End\n");

    avg_seek_time = (float)seek_time / (float)n;
    printf("\nAverage Seek Time: %.2f\n", avg_seek_time);

    return 0;
}
