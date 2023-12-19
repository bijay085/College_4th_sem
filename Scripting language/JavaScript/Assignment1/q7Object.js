// -WS to demonstrate types of  JS object

// object :  a collection of related properties or methods 
// while creating object we can use "let, var(less recommend), const" but if we didn't declare no worry : not to declare is not a good practice but code will run
// also we can't let same object name 

// simple example of object 
const myObject = { name: 'John', age: 30, city: 'New York' };

let person = {
    FirstName: "Spongebob",
    LastName: "SquarePant",
    age: 20,
    isStudent: true,
};

//-------------------------- Types of object --------------------------------

// 1. Literal Object:
// A simple object created using curly braces {} with key-value pairs:
const Bperson = {
    name: 'Dude',
    age: 36,
    city: 'Nepal'
};
console.log(Bperson); 

// 2. Array Object:
// An object that holds a collection of elements in square brackets []:
const fruits = ['apple', 'banana', 'orange'];
console.log(fruits); 

// 3. Function Object:
// A function in JavaScript is also an object:
function greet(name) {
    return 'Hello, ' + name + '!';
}
console.log(greet('Bob the builder'));

// 4. Date Object:
// An object to work with dates and times:
const currentDate = new Date();
console.log(currentDate);

// 5. RegExp Object:
// An object for working with regular expressions:
const pattern = /\w+/;
console.log(pattern); 