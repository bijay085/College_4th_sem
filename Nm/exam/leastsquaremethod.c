#include <stdio.h>
#include <stdlib.h>

// Define the linear model function y = mx + c
double model(double x, double m, double c) {
    return m * x + c;
}

// Function to perform least squares method
void leastSquares(double *x, double *y, int n, double *m, double *c) {
    double sum_x = 0.0, sum_y = 0.0, sum_xy = 0.0, sum_x2 = 0.0;
    
    // Calculate sums
    for (int i = 0; i < n; i++) {
        sum_x += x[i];
        sum_y += y[i];
        sum_xy += x[i] * y[i];
        sum_x2 += x[i] * x[i];
    }

    // Calculate coefficients
    *m = (n * sum_xy - sum_x * sum_y) / (n * sum_x2 - sum_x * sum_x);
    *c = (sum_y - *m * sum_x) / n;
}

int main() {
    int n;
    printf("Enter the number of data points: ");
    if (scanf("%d", &n) != 1 || n <= 0) {
        printf("Invalid input! Number of data points should be greater than 0.\n");
        return 1;
    }

    double *x = (double *)malloc(n * sizeof(double));
    double *y = (double *)malloc(n * sizeof(double));

    printf("Enter the data points (x y) pairs:\n");
    for (int i = 0; i < n; i++) {
        if (scanf("%lf %lf", &x[i], &y[i]) != 2) {
            printf("Invalid input! Please enter valid numbers.\n");
            free(x);
            free(y);
            return 1;
        }
    }

    // Calculate coefficients using least squares method
    double m, c;
    leastSquares(x, y, n, &m, &c);

    printf("Fitted line equation: y = %.5fx + %.5f\n", m, c);

    // Free allocated memory
    free(x);
    free(y);

    return 0;
}
