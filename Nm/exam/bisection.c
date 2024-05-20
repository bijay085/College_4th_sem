#include <stdio.h>
#include <math.h>

// Define the function for which we are finding the root
double f(double x) {
    return x * x * x - x * x + 2; // Example function: x^3 - x^2 + 2
}

// Function to perform the Bisection Method
double bisection(double a, double b, double tol) {
    if (f(a) * f(b) >= 0) {
        printf("Invalid interval: f(a) and f(b) must have opposite signs.\n");
        return -1; // Error code
    }

    double c;
    while ((b - a) >= tol) {
        c = (a + b) / 2;

        if (f(c) == 0.0)
            break;

        if (f(c) * f(a) < 0)
            b = c;
        else
            a = c;
    }
    return c;
}

int main() {
    double a, b, tol;

    printf("Enter the interval [a, b]:\n");
    if (scanf("%lf %lf", &a, &b) != 2) {
        printf("Invalid input! Please enter valid numbers for a and b.\n");
        return 1;
    }

    printf("Enter the tolerance: ");
    if (scanf("%lf", &tol) != 1) {
        printf("Invalid input! Please enter a valid number for tolerance.\n");
        return 1;
    }

    double root = bisection(a, b, tol);
    if (root != -1)
        printf("The root of the function is: %.5f\n", root);

    return 0;
}
