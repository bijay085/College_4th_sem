#include <stdio.h>

// Define the ODE: y' = f(x, y)
double f(double x, double y) {
    return x + y; // Example ODE, replace with your own
}

// 4th Order Runge-Kutta (RK4) method for solving ODEs
void runge_kutta_4(double x0, double y0, double h, int n) {
    double x = x0;
    double y = y0;

    printf("x\t\t y (RK4)\n");
    printf("%.5lf\t %.5lf\n", x, y); // Initial condition

    for (int i = 1; i <= n; i++) {
        double k1 = h * f(x, y);
        double k2 = h * f(x + 0.5 * h, y + 0.5 * k1);
        double k3 = h * f(x + 0.5 * h, y + 0.5 * k2);
        double k4 = h * f(x + h, y + k3);

        y = y + (k1 + 2 * k2 + 2 * k3 + k4) / 6.0;
        x = x + h;

        printf("%.5lf\t %.5lf\n", x, y); // Print each step
    }
}

int main() {
    double x0 = 0.0;   // Initial x
    double y0 = 1.0;   // Initial y
    double h = 0.1;    // Step size
    int n = 3;        // Number of steps

    runge_kutta_4(x0, y0, h, n);

    return 0;
}
