#include <stdio.h>
#include <math.h>

// Function to calculate the function value for a given input x
float bisectionCalculator(float x) {
    return x * x * x + 3 * x * x - 1; // Equation: x^3 + 3x^2 - 1
}

int main() {
    float x1, x2, x0, fx1, fx2, fx0, Ea, E;
    int maxIterations; // Maximum number of iterations

    printf("Enter lower limit, upper limit, error, and maximum iterations: ");
    scanf("%f%f%f%d", &x1, &x2, &Ea, &maxIterations); // Input for all variables

    int iterations = 0;
    do {
        iterations++; // Increment iteration count
        x0 = (x1 + x2) / 2; // Calculate midpoint
        fx1 = bisectionCalculator(x1); // Calculate f(x1)
        fx2 = bisectionCalculator(x2); // Calculate f(x2)
        fx0 = bisectionCalculator(x0); // Calculate f(x0)

        // Check if the root is between x1 and x0
        if (fx0 * fx1 < 0) {
            x2 = x0;
        } else { // Otherwise, the root is between x0 and x2
            x1 = x0;
        }

        // Calculate the relative approximate error
        E = fabs((x2 - x1) / x2);
        // Print iteration details including f(x1), f(x2), and f(x0)
        printf("Iteration %d: x0 = %.6f, f(x1) = %.6f, f(x2) = %.6f, f(x0) = %.6f, Ea = %.6f\n",
               iterations, x0, fx1, fx2, fx0, E);
    } while (E > Ea && iterations < maxIterations); // Repeat until error is within limit or max iterations reached

    // Check if the root is within the tolerable error or the maximum iterations are reached
    if (iterations >= maxIterations) {
        printf("\nMaximum iterations reached. No root found within the specified error.\n");
    } else {
        // Print the final root and error
        printf("\nThe root is %.6f\n", x0);
        printf("The error is %.6f\n", Ea);
    }

    return 0;
}
