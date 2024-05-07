#include <stdio.h>
#include <math.h>

// Define the nonlinear model y = ax^b
double nonlinear_model(double x, double a, double b) {
    return a * pow(x, b);
}

// Define the transformed model log(y) = log(a) + b * log(x)
double transformed_model(double x, double log_a, double b) {
    return log_a + b * log(x);
}

int main() {
    int n, i;
    double x[100], y[100], log_y[100], sum_log_x = 0, sum_log_y = 0, sum_log_x_squared = 0, sum_log_x_y = 0;

    printf("Enter the number of data points: ");
    scanf("%d", &n);

    printf("Enter the data points xi and yi:\n");
    for (i = 0; i < n; i++) {
        scanf("%lf %lf", &x[i], &y[i]);
        log_y[i] = log(y[i]);
        sum_log_x += log(x[i]);
        sum_log_y += log_y[i];
        sum_log_x_squared += log(x[i]) * log(x[i]);
        sum_log_x_y += log(x[i]) * log_y[i];
    }

    double log_a = (sum_log_y * sum_log_x_squared - sum_log_x * sum_log_x_y) / (n * sum_log_x_squared - sum_log_x * sum_log_x);
    double b = (n * sum_log_x_y - sum_log_x * sum_log_y) / (n * sum_log_x_squared - sum_log_x * sum_log_x);
    double a = exp(log_a);

    printf("Estimated parameters: a = %lf, b = %lf\n", a, b);

    return 0;
}
