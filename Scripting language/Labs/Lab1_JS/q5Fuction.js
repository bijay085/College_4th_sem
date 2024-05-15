// 5. What is Function? Write a program to demonstrate built-in and user-defined functions with all sub-types.

// => Function is a block of code used to do any particular task

// a..built in functions :: ==>
// JavaScript has five functions built in to the language.These are ready-made functions provided by JavaScript. We can use them without needing to create them ourself.
//Examples include console.log(), parseInt(), Math.max(), and String.toUpperCase().Its subtypes are ::  
/*
Core Functions: These are the fundamental functions provided by JavaScript itself. They cover basic operations like type conversions, arithmetic operations, and type checking. Examples include parseInt(), parseFloat(), isNaN(), and typeof().

Object Methods: These functions are specific to certain JavaScript objects and are called methods. For instance, methods like toUpperCase() and toLowerCase() belong to the String object, while push() and pop() are methods of the Array object.

Constructor Functions: Certain functions serve as constructors for creating new instances of objects. For example, Date(), Array(), and Object() are used with the new keyword to create new instances of Date, Array, and generic objects, respectively.
*/
let a = '10',
    b = '3';
let c = (parseInt(a/b));
console.log(c);
console.log(typeof(c));

let e = "Ram";
console.log(e.toUpperCase());
console.log(e.toLowerCase());
//push pop
let fruits = ['apple', 'banana', 'orange'];
fruits.push('mango'); // Adds 'mango' to the end of the array
console.log(fruits); 
console.log(fruits.pop());// show the last removed element  

console.log(Date.now());
// creating a car example as a object 
// Constructor function for creating Car objects
function Car(brand, model, year) {
    this.brand = brand;
    this.model = model;
    this.year = year;
    
    this.info = function() {
      return `${this.year} ${this.brand} ${this.model}`;
    };
  }
  
  let car1 = new Car('Toyota', 'Corolla', 2020);
  let car2 = new Car('Tesla', 'Model S', 2022);
  
  console.log(car1.info()); // 
  console.log(car2.brand); //

// b.. User-defined functions:: ==>
//  These are functions that the user create(us). We can give them any name We want and then write the instructions for what We want them to do. Once We define these functions, We can use them whenever We need them in our code. It's like creating our own special tool to do a job that's not covered by the ready-made tools.

// i. -function with parameter and with return
function add(a,b){
    return a+b;
}
console.log(add(1,2));
// -function with parameter and without return
function greet(name){
    console.log(`Hey! ${name}`);
}
greet('Bijay');
// -function without parameter and with return
function getRandomNumber(){
    return Math.random();
}
console.log(getRandomNumber());
// -function without parameter and without return
function game(){
    console.log("I play games.");
}
game();
