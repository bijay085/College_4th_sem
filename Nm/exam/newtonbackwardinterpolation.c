#include <stdio.h>

// Function to calculate u in the backward formula
double uCalc(double u, int n) {
    double temp = u;
    for (int i = 1; i < n; i++)
        temp *= (u + i);
    return temp;
}

// Function to calculate factorial
int factorial(int n) {
    int fact = 1;
    for (int i = 1; i <= n; i++)
        fact *= i;
    return fact;
}

// Function to perform Newton Backward Interpolation
double newtonBackwardInterpolation(double x[], double y[], int n, double value) {
    double result = y[n-1]; // Initial result is yn

    double h = x[1] - x[0]; // Assuming equidistant x values
    double u = (value - x[n-1]) / h; // Calculating u

    // Calculating backward differences
    for (int i = 1; i < n; i++) {
        for (int j = n-1; j >= i; j--) {
            y[j] = y[j] - y[j-1];
        }
        result += (uCalc(u, i) * y[n-1]) / factorial(i);
    }

    return result;
}

int main() {
    int n;
    printf("Enter the number of data points: ");
    if (scanf("%d", &n) != 1 || n <= 1) {
        printf("Invalid input! Number of data points should be greater than 1.\n");
        return 1;
    }

    double x[n], y[n];
    printf("Enter the data points (x y) pairs:\n");
    for (int i = 0; i < n; i++) {
        if (scanf("%lf %lf", &x[i], &y[i]) != 2) {
            printf("Invalid input! Please enter valid numbers.\n");
            return 1;
        }
    }

    double value;
    printf("Enter the value to interpolate: ");
    if (scanf("%lf", &value) != 1) {
        printf("Invalid input! Please enter a valid number.\n");
        return 1;
    }

    printf("Interpolated value at %.2f is %.2f\n", value, newtonBackwardInterpolation(x, y, n, value));
    return 0;
}
