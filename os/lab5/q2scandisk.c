#include<stdio.h>
#include<stdlib.h>

int main() {
    int queue[20], n, head, i, j, seek_time = 0, temp, max;
    float avg_seek_time;

    printf("Enter the number of requests: ");
    scanf("%d", &n);

    printf("Enter the requests sequence: ");
    for(i = 0; i < n; i++)
        scanf("%d", &queue[i]);

    printf("Enter the initial head position: ");
    scanf("%d", &head);

    queue[n] = head;
    n++;

    // Sorting the request queue
    for(i = 0; i < n; i++) {
        for(j = i + 1; j < n; j++) {
            if(queue[i] > queue[j]) {
                temp = queue[i];
                queue[i] = queue[j];
                queue[j] = temp;
            }
        }
    }

    max = queue[n-1];

    printf("\nSCAN Schedule:\n");
    for(i = 0; i < n; i++) {
        if(head == queue[i]) {
            j = i;
            break;
        }
    }

    // Moving towards larger requests
    for(i = j; i < n; i++) {
        printf("%d -> ", queue[i]);
        seek_time += abs(head - queue[i]);
        head = queue[i];
    }

    printf("%d -> ", max);

    // Moving towards smaller requests
    seek_time += abs(head - max);
    head = max;

    for(i = j - 1; i >= 0; i--) {
        printf("%d -> ", queue[i]);
        seek_time += abs(head - queue[i]);
        head = queue[i];
    }

    printf("End\n");

    avg_seek_time = (float)seek_time / (float)n;
    printf("\nAverage Seek Time: %.2f\n", avg_seek_time);

    return 0;
}
