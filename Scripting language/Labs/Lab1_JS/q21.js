// 21. Explain JavaScript closure and hoisting, variable scope and callback function, object literals vs.  constructor with example. 

// Closure is like a backpack that a function carries even after it leaves its house (finishes execution). It allows the function to remember and access the things it learned from its home environment.
// A closure is an inner function that has access to the outer (enclosing) function's variables, even after the outer function has finished executing. 
function outerFunction() {
    let outerVar = 'I am from outer function';
    
    function innerFunction() {
      console.log(outerVar); // Accesses outerVar from its parent's scope
    }
    
    return innerFunction;
  }
  
  let closure = outerFunction(); // closure now contains innerFunction with access to outerVar
  closure(); // Logs: "I am from outer function"
  

// Hoisting:
// JavaScript's habit of lifting up variable declarations and function declarations to the top of their scope before the code runs.However, only the declarations are hoisted, not the initializations.
console.log(x); // Output: undefined
// let x = 5; //didn't work
var x = 5; //didn't work
console.log(x); // Output: 5


// Variable Scope:
// Scope means where a variable lives and where it can be accessed. Variables can either live everywhere (global scope) or just inside a specific place, like a function (local scope).
// Global Scope
let globalVar = 'I am global';

function myFunction() {
  // Local Scope
  let localVar = 'I am local';
  console.log(localVar); // Accessible 
  console.log(globalVar); // Accessible
}

console.log(globalVar); // Accessible
// console.log(localVar); // Throws ReferenceError: localVar is not defined


// Callback Function:
// A callback function is like a buddy you invite to a party. You tell them, "When this thing happens, I'll call you." Then, when that thing happens, you make the call!
function greeting(name, callback) {
    console.log(`Hello, ${name}!`);
    callback();
  }
  
  function sayBye() {
    console.log('Goodbye!');
  }
  
  greeting('Bijjjjjjaay', sayBye); // Outputs: Hello, Bijjjjaaaay! Goodbye!
  

// Object Literals vs. Constructors:
// Object literals are like recipes to make one dish, where you list all the ingredients and steps. Constructors are more like a factory that can make many dishes of the same kind, following the same recipe.

let person2 = {
    name: 'Bijay',
    age: 3,
    greet: function() {
      console.log(`Hello, my name is ${this.name}.`);
    }
  };
  person2.greet(); // Outputs: Hello, my name is Bijay.

// -------------------- 
  function Person1(name, age) {
    this.name = name;
    this.age = age;
    this.greet = function() {
      console.log(`Hello, my name is ${this.name}.`);
    };
  }
  
  const Bijay = new Person1('Bijay', 3);
  Bijay.greet(); // Outputs: Hello, my name is Bijay.
  