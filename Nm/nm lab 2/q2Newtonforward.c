#include <stdio.h>

// Function to calculate factorial
int factorial(int n) {
    if (n == 0)
        return 1;
    return n * factorial(n - 1);
}

int main() {
    int n, i, j;
    double xp, yp = 0.0;

    printf("Enter the number of data points: ");
    scanf("%d", &n);

    double X[n], Y[n], diff[n][n];

    printf("Enter the data points Xi and Yi:\n");
    for (i = 0; i < n; i++) {
        scanf("%lf %lf", &X[i], &Y[i]);
        diff[i][0] = Y[i];
    }

    // Calculate divided differences
    for (j = 1; j < n; j++) {
        for (i = 0; i < n - j; i++) {
            diff[i][j] = diff[i + 1][j - 1] - diff[i][j - 1];
        }
    }

    printf("Enter the value of independent variable xp: ");
    scanf("%lf", &xp);

    double term = 1.0;
    double fact;

    yp += diff[0][0];

    for (i = 1; i < n; i++) {
        term *= (xp - X[i - 1]) / (X[i] - X[i - 1]);
        fact = factorial(i);
        yp += (term * diff[0][i]) / fact;
    }

    printf("Interpolated value at xp = %.2lf is %.2lf\n", xp, yp);

    return 0;
}
