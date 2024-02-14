// 6. What is an Array? Write a program to demonstrate array with multiple-ways of creating an array including  listed tasks using property and methods from prototype: 
// - Check prototypes of Array() 
// - Add data as a first element on existing array. 
// - Add data as a last element on existing array. 
// - Remove first element/data from existing array. 
// - Remove last element/data from existing array. 
// - Add data on any middle position on existing array. 
// - Remove from any middle position from existing array. 
// - Write a program to demonstrate forEach (), map (), filter (), reduce () methods on an array. - Write a program to display data from array with for-loop 
// - Check length of array 
// - Display single element of array without loop 
// - Write a JavaScript to demonstrate array de-structuring. -----

// => Array is collection of same or differnet types of data types. Array prototype refers to the blueprint or the template for all arrays. It's like a master object that contains methods and properties that can be accessed and used by all arrays created in JavaScript.

// Multiple ways of creating array :: 2 
// 1. Array Literal syntax
let arrName = [12, 13, 'Bijay', 'NULL'];
console.log(arrName);

// 2.Using new Array() construction 
let arrName2 = new Array(2);
let arrName3 = new Array('red', 'green', 4, null);

// 3. Array.from()
let ele1 = 'hello';
let ele2 = 'hello2';
let ele3 = 'hello3';
let ele4 = 'hello4';

let arrName4 = Array.from(ele1);
console.log(arrName4); //Creates an array ['h', 'e', 'l', 'l', 'o']
arrName4 = Array.from(ele2);
console.log(arrName4);

// 4. Spread Syntax (...):
// Using the spread syntax allows you to create an array by expanding another array or iterable object.
let originalArray = [1, 2, 3];
let newArray = [...originalArray];

// 5. Using fill() method 
let arrName5 = new Array(5).fill(0); 
console.log(arrName5);

//now going to point wise 
// Checking prototypes of Array()
let protoOfArrayConstructor = Object.getPrototypeOf(Array); // Getting the prototype of Array()
console.log(protoOfArrayConstructor === Function.prototype); // Output: true

let arrayLong = [1, 2, 4, 'Ram', 'Hari'];
console.log("Original array is :");
console.log(arrayLong);

// - Add data as a first element on existing array. 
console.log("Array with a element added at first  is :");
arrayLong.unshift('first');
console.log(arrayLong);

// - Add data as a last element on existing array. 
console.log("Add data as a last element on existing array");
arrayLong.push('Game'); //add at last
console.log(arrayLong);

// - Remove first element/data from existing array. 
console.log("Remove first element/data from existing array");
arrayLong.shift();
console.log(arrayLong);

// - Remove last element/data from existing array.
console.log("Remove last element/data from existing array");
arrayLong.pop();
console.log(arrayLong);

// - Add data on any middle position on existing array. 
console.log("Add data on any middle position on existing array");
arrayLong[parseInt(arrayLong.length/2)]= 'mid_element';
console.log(arrayLong);


// - Remove from any middle position from existing array. 
console.log("Remove from any middle position from existing array");
arrayLong.splice(parseInt(arrayLong.length/2),1); //shift function don't have any parameter of selecting
console.log(arrayLong); 

// - Write a program to demonstrate forEach (), map (), filter (), reduce () methods on an array. - Write a program to display data from array with for-loop 
// - Check length of array 
// - Display single element of array without loop 
// - Write a JavaScript to demonstrate array de-structuring.


let arrayLast = [0, 1, 2, 'mid', 'slast', 'last'];
// for each loop
arrayLast.forEach(item => {
    console.log(item);
    
});
//map :: The map() method in JavaScript is used to create a new array by applying a function to each element of an existing array.
let numbers = [1, 2, 3, 4];
let squaredNumbers = numbers.map(function(number) {
  return number * number;
});
console.log(squaredNumbers);

// filter 
let number1 = [1, 2, 3, 4, 5, 6];
let evenNumbers = numbers.filter(function(number) {
  return number % 2 === 0;
});
console.log(evenNumbers);

// reduce
let number2 = [1, 2, 3, 4, 5];
let sum = numbers.reduce(function(accumulator, currentValue) {
  return accumulator + currentValue;
}, 0);

console.log(sum); // Output: 15 (1 + 2 + 3 + 4 + 5 = 15)

//display data using for loop
for(let i =0; i<arrayLast.length; i++){
    console.log(arrayLast[i]);
}

// checking length of array 
console.log(number2.length);

// - Display single element of array without loop 
console.log(number2[2]);

// - Write a JavaScript to demonstrate array de-structuring. 
let numbersLast = [1, 2, 3];
let [a, b, c] = numbersLast;
console.log(a); 
console.log(b); 
console.log(c);
