// 12. Write a JavaScript to demonstrate all types of Operators. 
/**
 * There are different types of JavaScript operators:
Arithmetic Operators (+, -, *, /, %, **)
Assignment Operators (=, =+ =*, =-)
Comparison Operators (>, <, >=, !=, ==, ===)
String Operators (+)
Logical Operators (&&, ||, !,)
Bitwise Operators (&, |, ~, ^, <<, >>, >>>)
Ternary Operators(?)
Type Operators
*/

let a = 3;
let x = (100 + 50) * a;
console.log(x);


let b = 10;
b += 5;
console.log(b);


let letter1 = "A";
let letter2 = "B";
let result = letter1 < letter2;
console.log(result);

let firstName = "Bijay";
let lastname = "koirala";
let FullName = firstName + " " + lastname;
console.log(FullName);

if(firstName == 'Bijay' && lastname== 'koirala'){
    console.log("This is my labsheet");
}
 
console.log(5&1); //0101 & 0001 

let n1 = 4;
let n2 = 8;

let res = n1 > n2 ? 'Yes': 'No';
console.log(res);