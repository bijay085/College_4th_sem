#include <stdio.h>
#include <math.h>

// Function to find the value of f(x) = x^2 - 5
float secant(float x) {
    return x * x - 5;
}

int main() {
    float x1, x2, x0, fx1, fx2, Ea, E;
    printf("Enter lower limit, upper limit and error: ");
    scanf("%f %f %f", &x1, &x2, &Ea);
    
    do {
        // Calculate function values
        fx1 = secant(x1);
        fx2 = secant(x2);
        
        // Compute the new approximation x0 using the secant formula
        x0 = x1 - ((x2 - x1) * fx1 / (fx2 - fx1));
        
        // Update x1 and x2 for the next iteration
        x1 = x2;
        x2 = x0;
        
        // Calculate the approximate relative error
        E = fabs((x2 - x1) / x2);
    } while(E > Ea); // Continue until the error is less than the accepted error
    
    printf("The root is: %f\n", x0);
    printf("The error is: %f\n", E);
    
    return 0;
}
