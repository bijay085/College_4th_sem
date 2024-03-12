#include <stdio.h>
#include <math.h>

float bisectionCalculator(float x) {
	return x*x - 7;
}

int main (){
	float x, x1, x2, x0, fx1, fx2,fx0, Ea, E;
	printf("Enter lower limit, upper limit and error :");
	scanf("%f%f%f", &x1, &x2, &Ea);
	
	do{
		x0 = (x1 + x2)/2;
		fx1 = bisectionCalculator(x1);
		fx2 = bisectionCalculator(x2);
		fx0 = bisectionCalculator(x0);

        if(fx0*fx1<0){
            x2=x0;
        }
        else{
            x1 = x0;
        }

        E = fabs((x2-x1)/x2);
	} while(E < Ea);
        printf("The root is %f:\n", x0);
        printf("The error is %f:", Ea);
    
    return 0;
}
