#include<stdio.h>
#include<conio.h>
#include<math.h>

// finding the non- linear regression in c 
int  main() {
    double Sx = 0, Sy = 0 , Sx2 = 0, Sy2 = 0, Sxy = 0, a, b, A; // -> s refer to submssion
    int i, j, n, x[10], y[10];

    printf("Enter the value of n : "); //=> maximum 10
    scanf("%d", &n);
    
    printf("Enter the value of x :");
    for (i = 0; i < n; i++){
    scanf("%d", &x[i]);
    }
    printf("Enter the value of y :");
    for (i = 0; i < n; i++){
    scanf("%d", &y[i]);
    }

//printing the value of Sxy, Sx, Sy, Sx2 
    for(i=0;i<n;i++){
    Sx = Sx + x[i];
    Sx2 = Sx2 + x[i]*x[i];
    Sy = Sy + log(y[i]);
    // Sy2 = Sy2 + y[i]*y[i];
    Sxy = Sxy + x[i]* log(y[i]);
    }

    //finding the value of a and b

    b = (n*Sxy-Sx*Sy)/(n*Sx2-Sx*Sx);
    A = (Sy - b* Sx)/n;

    a = exp(A);


//  y = a +bx;
    printf("The value y = %d %d", a, "+",b,"x" );
}
