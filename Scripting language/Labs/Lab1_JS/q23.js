// 23. Write a JavaScript to demonstrate Spread Operator, Rest Parameter and Function on variable. Explain  Exception Handling with an example including Try-Catch. 

// ==> The spread operator, represented by three dots (...), allows an iterable (like an array or a string) to be expanded or spread into individual elements. We can use them for :::

// i. Copying arrays: 
let arrC = [1, 2, 3];
let newArr = [...arrC];
console.log(arrC);
console.log(newArr);

// ii. Concatenating arrays:
let arr1 = [1, 2, 3];
let arr2 = [4, 5, 6];
let combined = [...arr1, ...arr2];
console.log(arr1);  
console.log(arr2);  
console.log(combined);  


// iii. Function arguments: 
function myFunction(a, b, c) {
    console.log(a, b, c);
}
let arr = [1, 2, 3];
myFunction(...arr);
// console.log(myFunction);

// iv. Copying objects:
let obj = { name: 'John', age: 30 };
let newObj = { ...obj };
console.log(obj);
console.log(newObj);

// v. Creating arrays from iterable objects: 
let str = 'hello';
let chars = [...str];
console.log(str);
console.log(chars);


// //-------------------Rest parameter--------------------------
// When we're not sure how many arguments will be passed to a function, we can use ... followed by a parameter name to gather all those arguments into an array.
// Rest parameters in JavaScript are used within function declarations to collect multiple function arguments into a single array parameter. This feature allows functions to accept an indefinite number of arguments, storing them in an array for further processing within the function.
function displayNames(first, ...otherNames) {
    console.log("First name:", first);
    console.log("Other names:", otherNames);
}

displayNames("Bijay", "Rames", "Suresh", "Naresh");

function collectArgs(...args) {
    console.log(args);
  }
  
collectArgs(1, 2, 3, 4);

//------------------------function on variable -------------------
// It's defining a function using a variable.
const sayHello = function() {
    console.log('Hello!');
  };
  
  sayHello(); 


//   exception handling using try catch 
//this is from internet
function divide(a, b) {
    try {
      if (b === 0) {
        throw Error('Division by zero is not allowed');
      }
      return a / b;
    } catch (error) {
      console.error('Error:', error.message);
      // You can handle the error here, log it, or perform other actions.
      // For instance, returning a specific value in case of an error.
      return 'Error occurred';
    }
  }
  
  console.log(divide(10, 2)); //5
  console.log(divide(10, 0)); //  Error occurred
  
