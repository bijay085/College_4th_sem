#include <stdio.h>
#include <math.h>

float secant(float x) {
	return x*x - 5;
}

int main (){
	float x, x1, x2, x0, fx1, fx2,fx0, Ea, E;
	printf("Enter lower limit, upper limit and error :");
	scanf("%f%f%f", &x1, &x2, &Ea);
	
	do{
		
		fx1 = secant(x1);
		fx2 = secant(x2);
		fx0 = secant(x0);
        x0 = x1-((x2 - x1)*fx1/(fx2 - fx1));        
            x1=x2;
            x2=x0;

        E = fabs((x2-x1)/x2);
	} while(E < Ea);
        printf("The root is %f:\n", x0);
        printf("The error is %f:", Ea);
    
    return 0;
}
 