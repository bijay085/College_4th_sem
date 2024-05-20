#include <stdio.h>
#include <math.h>

// Define the function for which we are finding the root
double f(double x) {
    return x * x * x - x * x + 2; // Example function: x^3 - x^2 + 2
}

// Function to perform the Secant Method
double secant(double x0, double x1, double tol, int max_iter) {
    double x2;
    int iter = 0;

    while (iter < max_iter) {
        if (fabs(f(x1) - f(x0)) < tol) {
            printf("Division by zero or close to zero detected.\n");
            return -1; // Error code
        }

        x2 = x1 - (f(x1) * (x1 - x0)) / (f(x1) - f(x0));

        if (fabs(x2 - x1) < tol)
            return x2;

        x0 = x1;
        x1 = x2;
        iter++;
    }

    printf("Maximum number of iterations reached.\n");
    return x2;
}

int main() {
    double x0, x1, tol;
    int max_iter;

    printf("Enter the initial guesses x0 and x1:\n");
    if (scanf("%lf %lf", &x0, &x1) != 2) {
        printf("Invalid input! Please enter valid numbers for x0 and x1.\n");
        return 1;
    }

    printf("Enter the tolerance: ");
    if (scanf("%lf", &tol) != 1) {
        printf("Invalid input! Please enter a valid number for tolerance.\n");
        return 1;
    }

    printf("Enter the maximum number of iterations: ");
    if (scanf("%d", &max_iter) != 1 || max_iter <= 0) {
        printf("Invalid input! Please enter a valid number for maximum iterations.\n");
        return 1;
    }

    double root = secant(x0, x1, tol, max_iter);
    if (root != -1)
        printf("The root of the function is: %.5f\n", root);

    return 0;
}
