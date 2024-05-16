#include <stdio.h>
#include <math.h>

// Function to compute f(x)
double f(double x) {
    return x * x - 5;
}

int main() {
    double a, b, c;  // Interval [a, b] and midpoint c
    double tolerance = 1e-6;  // Tolerance level
    int max_iterations = 1000;  // Maximum number of iterations
    int iteration = 0;  // Current iteration

    // Initial interval
    printf("Enter the interval [a, b]:\n");
    scanf("%lf %lf", &a, &b);

    if (f(a) * f(b) >= 0) {
        printf("The function must have opposite signs at a and b.\n");
        return 1;
    }

    do {
        // Compute the false position
        c = b - (f(b) * (b - a)) / (f(b) - f(a));
        
        // Check if c is the root
        if (fabs(f(c)) < tolerance) {
            break;
        }

        // Update the interval
        if (f(a) * f(c) < 0) {
            b = c;
        } else {
            a = c;
        }

        iteration++;
    } while (iteration < max_iterations);

    if (iteration == max_iterations) {
        printf("The method did not converge within the maximum number of iterations.\n");
    } else {
        printf("The root is: %.6f\n", c);
        printf("Number of iterations: %d\n", iteration);
    }

    return 0;
}
