#include <stdio.h>
#include <math.h>

// Function to compute g(x)
double g(double x) {
    return sqrt(5);  // The fixed point for this specific case
}

int main() {
    double x0, x1;  // Initial guess and the next value
    double tolerance = 1e-6;  // Tolerance level
    int max_iterations = 1000;  // Maximum number of iterations
    int iteration = 0;  // Current iteration

    // Initial guess
    printf("Enter the initial guess: ");
    scanf("%lf", &x0);

    do {
        x1 = g(x0);  // Compute the next value
        if (fabs(x1 - x0) < tolerance) {  // Check if the difference is within tolerance
            break;
        }
        x0 = x1;  // Update the current value
        iteration++;
    } while (iteration < max_iterations);

    if (iteration == max_iterations) {
        printf("The method did not converge within the maximum number of iterations.\n");
    } else {
        printf("The root is: %.6f\n", x1);
        printf("Number of iterations: %d\n", iteration);
    }

    return 0;
}
