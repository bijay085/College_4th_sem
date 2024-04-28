#include <stdio.h>
#include <stdlib.h>
#include <string.h>

struct File {
    char filename[20];
    int start;
    int length;
    struct File* next;
};

// Function to create a new file node
struct File* createFile(char filename[], int start, int length) {
    struct File* new_file = (struct File*)malloc(sizeof(struct File));
    strcpy(new_file->filename, filename);
    new_file->start = start;
    new_file->length = length;
    new_file->next = NULL;
    return new_file;
}

// Function to insert a file node into the linked list
void insertFile(struct File** head, struct File* new_file) {
    struct File* temp = *head;
    if (*head == NULL) {
        *head = new_file;
    } else {
        while (temp->next != NULL) {
            temp = temp->next;
        }
        temp->next = new_file;
    }
}

int main() {
    struct File* head = NULL;
    int n, i;

    printf("Enter the number of files: ");
    scanf("%d", &n);

    // Input file details and create linked list
    for (i = 0; i < n; i++) {
        char filename[20];
        int start, length;
        printf("Enter filename for file %d: ", i + 1);
        scanf("%s", filename);
        printf("Enter starting block for file %s: ", filename);
        scanf("%d", &start);
        printf("Enter length of file %s: ", filename);
        scanf("%d", &length);
        struct File* new_file = createFile(filename, start, length);
        insertFile(&head, new_file);
    }

    // Display the Linked File Allocation Table
    printf("\nLinked File Allocation Table:\n");
    printf("Filename\tStart Block\tLength\n");
    struct File* temp = head;
    while (temp != NULL) {
        printf("%s\t\t%d\t\t%d\n", temp->filename, temp->start, temp->length);
        temp = temp->next;
    }

    // Free allocated memory
    temp = head;
    while (temp != NULL) {
        struct File* next_file = temp->next;
        free(temp);
        temp = next_file;
    }

    return 0;
}
