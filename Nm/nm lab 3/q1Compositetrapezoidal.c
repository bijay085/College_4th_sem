#include <stdio.h>

// Define the integrand function f(x) as x^3
double f(double x) {
    return x * x * x;
}

// Composite Trapezoidal Rule function
double composite_trapezoidal(double a, double b, int n) {
    double h = (b - a) / n;
    double integral = (f(a) + f(b)) / 2.0;

    for (int i = 1; i < n; i++) {
        integral += f(a + i * h);
    }

    integral *= h;
    return integral;
}

int main() {
    double a = 1.0;   // Lower limit of integration
    double b = 2.0;   // Upper limit of integration
    double h = 0.25;  // Subinterval width
    int n = (b - a) / h;  // Number of subintervals

    double result = composite_trapezoidal(a, b, n);
    printf("Approximated integral of x^3 from %.2lf to %.2lf using Composite Trapezoidal Rule: %.5lf\n", a, b, result);

    return 0;
}
