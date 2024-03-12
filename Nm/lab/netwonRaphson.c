#include <stdio.h>
#include <math.h>

float newtonRaphson(float x) {
	return 3 * x * x - 2*x ;
}

int main (){
	float x, x1, x2, x0, fx1, fx2,fx0, dfx , Ea, E;
	printf("Enter inital guess and error :");
	scanf("%f%f", &x1, &Ea); 
	
	do{
		
		fx1 = newtonRaphson(x1);
		fx0 = newtonRaphson(x0);
        x0 = x1-((x2 - x1)*fx1/(fx2 - fx1));        
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
 