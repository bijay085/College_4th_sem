#include <stdio.h>
#include <stdlib.h>
#include <string.h>

struct File {
    char filename[20];
    int start;
    int length;
};

int main() {
    struct File files[50];
    int n, i, total_blocks = 0, start_block = 0;

    printf("Enter the number of files: ");
    scanf("%d", &n);

    // Input file details
    for (i = 0; i < n; i++) {
        printf("Enter filename for file %d: ", i + 1);
        scanf("%s", files[i].filename);

        printf("Enter starting block for file %s: ", files[i].filename);
        scanf("%d", &files[i].start);

        printf("Enter length of file %s: ", files[i].filename);
        scanf("%d", &files[i].length);

        total_blocks += files[i].length;
    }

    printf("\nFile Allocation Table (Sequential):\n");
    printf("Filename\tStart Block\tLength\n");
    for (i = 0; i < n; i++) {
        printf("%s\t\t%d\t\t%d\n", files[i].filename, files[i].start, files[i].length);
    }

    printf("\nTotal number of blocks occupied: %d\n", total_blocks);

    // Calculate end block and display disk usage
    int end_block = start_block + total_blocks - 1;
    printf("Disk Usage: Block %d to Block %d\n", start_block, end_block);

    return 0;
}
