#include <stdio.h>

// Define the integrand function f(x) as x^3
double f(double x) {
    return x * x * x;
}

// 1/3 Simpson's Rule function
double simpson_one_third(double a, double b, int n) {
    double h = (b - a) / n;
    double integral = f(a) + f(b);

    for (int i = 1; i < n; i += 2) {
        integral += 4 * f(a + i * h);
    }

    for (int i = 2; i < n; i += 2) {
        integral += 2 * f(a + i * h);
    }

    integral *= h / 3.0;
    return integral;
}

// 3/8 Simpson's Rule function
double simpson_three_eighth(double a, double b, int n) {
    double h = (b - a) / n;
    double integral = f(a) + f(b);

    for (int i = 1; i < n; i += 3) {
        integral += 3 * (f(a + i * h) + f(a + (i + 1) * h));
    }

    integral *= 3 * h / 8.0;
    return integral;
}

int main() {
    double a = 1.0;   // Lower limit of integration
    double b = 2.0;   // Upper limit of integration
    double h = 0.25;  // Subinterval width
    int n = (b - a) / h;  // Number of subintervals

    double result_one_third = simpson_one_third(a, b, n);
    double result_three_eighth = simpson_three_eighth(a, b, n);

    printf("Approximated integral of x^3 from %.2lf to %.2lf using 1/3 Simpson's Rule: %.5lf\n", a, b, result_one_third);
    printf("Approximated integral of x^3 from %.2lf to %.2lf using 3/8 Simpson's Rule: %.5lf\n", a, b, result_three_eighth);

    return 0;
}
