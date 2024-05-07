#include <stdio.h>

int main() {
    int n, i;
    double x[100], y[100], sum_x = 0, sum_y = 0, sum_xy = 0, sum_x_squared = 0;

    printf("Enter the number of data points: ");
    scanf("%d", &n);

    printf("Enter the data points xi and yi:\n");
    for (i = 0; i < n; i++) {
        scanf("%lf %lf", &x[i], &y[i]);
        sum_x += x[i];
        sum_y += y[i];
        sum_xy += x[i] * y[i];
        sum_x_squared += x[i] * x[i];
    }

    double x_mean = sum_x / n;
    double y_mean = sum_y / n;
    double slope = (sum_xy - n * x_mean * y_mean) / (sum_x_squared - n * x_mean * x_mean);
    double intercept = y_mean - slope * x_mean;

    printf("Equation of the line of best fit: y = %.2fx + %.2f\n", slope, intercept);

    return 0;
}
