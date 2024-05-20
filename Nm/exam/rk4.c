#include <stdio.h>

// Define the differential equation dy/dx = f(x, y)
double f(double x, double y) {
    return x + y; // Example function: dy/dx = x + y
}

// Function to perform the RK4 method
void rk4(double (*f)(double, double), double x0, double y0, double x, double h) {
    int n = (int)((x - x0) / h);
    double k1, k2, k3, k4;

    printf("x0\ty0\n");
    printf("%.5f\t%.5f\n", x0, y0);

    for (int i = 0; i < n; i++) {
        k1 = h * f(x0, y0);
        k2 = h * f(x0 + h / 2, y0 + k1 / 2);
        k3 = h * f(x0 + h / 2, y0 + k2 / 2);
        k4 = h * f(x0 + h, y0 + k3);

        y0 = y0 + (k1 + 2 * k2 + 2 * k3 + k4) / 6;
        x0 = x0 + h;

        printf("%.5f\t%.5f\n", x0, y0);
    }
}

int main() {
    double x0, y0, x, h;

    printf("Enter initial value of x (x0): ");
    if (scanf("%lf", &x0) != 1) {
        printf("Invalid input! Please enter a valid number.\n");
        return 1;
    }

    printf("Enter initial value of y (y0): ");
    if (scanf("%lf", &y0) != 1) {
        printf("Invalid input! Please enter a valid number.\n");
        return 1;
    }

    printf("Enter the value of x at which y is required: ");
    if (scanf("%lf", &x) != 1) {
        printf("Invalid input! Please enter a valid number.\n");
        return 1;
    }

    printf("Enter the step size h: ");
    if (scanf("%lf", &h) != 1) {
        printf("Invalid input! Please enter a valid number.\n");
        return 1;
    }

    rk4(f, x0, y0, x, h);

    return 0;
}
