#include <stdio.h>

int main() {
    int n, i, j;
    double xp, yp = 0.0;

    printf("Enter the number of data points: ");
    scanf("%d", &n);

    double X[n], Y[n], p;

    printf("Enter the data points Xi and Yi:\n");
    for (i = 0; i < n; i++) {
        scanf("%lf %lf", &X[i], &Y[i]);
    }

    printf("Enter the value of independent variable xp: ");
    scanf("%lf", &xp);

    for (i = 0; i < n; i++) {
        p = 1.0;
        for (j = 0; j < n; j++) {
            if (i != j) {
                p *= (xp - X[j]) / (X[i] - X[j]);
            }
        }
        yp += p * Y[i];
    }

    printf("Interpolated value at xp = %.2lf is %.2lf\n", xp, yp);

    return 0;
}
