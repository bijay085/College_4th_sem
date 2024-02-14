// -WS to demonstrate JS fucntion


//without function
let a = 10,
    b = 8,
    c = 6;

console.log("Average of a and b with +1 is ", 1 + (a + b) / 2);
console.log("Done");
console.log("Average of a and c with +1 is ", 1 + (a + c) / 2);
console.log("Done");
console.log("Average of b and c with +1 is ", 1 + (b + c) / 2);
console.log("Done");

//with function
console.log("With function :")
function functionName(parameters) {
    // return conditon or statement to be excuted ;
}

let x = 4,
    y = 2,
    z = 1;


// while creating function we dont use let, var or const but while making object we can use them 
function AverageWithSumOne(m,n) { 
    return 1 + (m+n)/2;
}

console.log("Average of x and y with +1 is ", AverageWithSumOne(x , y));
console.log("Average of x and z with +1 is ", AverageWithSumOne(x , z));
console.log("Average of y and z with +1 is ", AverageWithSumOne(y , z));

//simple function without parameter
function print(){
    return "Hello world";
}
console.log(print());


//simple function with parameter
function func(name){
    return `Hello ${name} .`;
}

console.log(func("Bijay"));
