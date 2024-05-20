#include <stdio.h>
#include <stdlib.h>
#include <math.h>

// Define the model function y = a * x^2 + b * x + c
double model(double x, double *params) {
    return params[0] * x * x + params[1] * x + params[2];
}

// Function to compute the Jacobian matrix
void computeJacobian(double *x, double *params, double **J, int n) {
    for (int i = 0; i < n; i++) {
        J[i][0] = x[i] * x[i]; // Partial derivative with respect to a
        J[i][1] = x[i];        // Partial derivative with respect to b
        J[i][2] = 1;           // Partial derivative with respect to c
    }
}

// Function to perform Gauss-Newton update
void gaussNewtonUpdate(double *x, double *y, double *params, int n) {
    double **J = (double **)malloc(n * sizeof(double *));
    for (int i = 0; i < n; i++) {
        J[i] = (double *)malloc(3 * sizeof(double));
    }
    
    computeJacobian(x, params, J, n);

    double JTJ[3][3] = {0}; // Initialize the Jacobian transpose * Jacobian matrix
    double JTr[3] = {0};    // Initialize the Jacobian transpose * residuals vector

    for (int i = 0; i < n; i++) {
        double residual = y[i] - model(x[i], params);
        for (int j = 0; j < 3; j++) {
            JTr[j] += J[i][j] * residual;
            for (int k = 0; k < 3; k++) {
                JTJ[j][k] += J[i][j] * J[i][k];
            }
        }
    }

    // Solve for the update step (simplified version, no matrix inversion for simplicity)
    for (int i = 0; i < 3; i++) {
        params[i] += JTr[i] / JTJ[i][i];
    }

    // Free allocated memory
    for (int i = 0; i < n; i++) {
        free(J[i]);
    }
    free(J);
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

    // Initial guess for the parameters [a, b, c]
    double params[3] = {1, 1, 1};

    // Perform Gauss-Newton iterations
    int max_iter = 100;
    for (int iter = 0; iter < max_iter; iter++) {
        gaussNewtonUpdate(x, y, params, n);
    }

    printf("Fitted parameters: a = %.5f, b = %.5f, c = %.5f\n", params[0], params[1], params[2]);

    // Free allocated memory
    free(x);
    free(y);

    return 0;
}
