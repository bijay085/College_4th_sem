#include <stdio.h>

// Define the ODE: y' = f(x, y)
double f(double x, double y) {
    return x + y; // Example ODE, replace with your own
}

// Euler's Method for solving ODEs
void euler_method(double x0, double y0, double h, int n) {
    double x = x0;
    double y = y0;

    printf("x\t\t y\n");
    printf("%.5lf\t %.5lf\n", x, y);

    for (int i = 1; i <= n; i++) {
        double slope = f(x, y);
        y = y + h * slope;
        x = x + h;

        printf("%.5lf\t %.5lf\n", x, y);
    }
}

int main() {
    double x0 = 0.0;   // Initial x
    double y0 = 1.0;   // Initial y
    double h = 0.1;    // Step size
    int n = 3;        // Number of steps

    euler_method(x0, y0, h, n);

    return 0;
}
