// 24. Explain JavaScript Errors types with an example including built-in error constructors. 

// ** from internet **---
// // JavaScript has several built-in error constructors to handle different types of errors.
// JavaScript has several error types that can occur during execution:

// Error: The base error type from which other errors are derived.
// SyntaxError: Occurs when there's a syntax mistake in the code.
// Incorrect syntax
let x = 10
console.log(x);


// ReferenceError: Occurs when trying to access an undefined variable or function.
// Accessing an undefined variable
console.log(nonExistentVariable);

// TypeError: Occurs when a value is not of the expected type.
// Performing an operation on an incorrect type
let num = 10;
num(); // This will throw a TypeError since num is not a function

// RangeError: Occurs when a value is not within a valid range.
// Recursion causing a stack overflow
function infiniteLoop() {
    infiniteLoop();
}
infiniteLoop();

// URIError: Occurs when using global URI handling functions incorrectly.
// Using decodeURIComponent() incorrectly
let uri = "%%%";
try {
    decodeURIComponent(uri);
} catch (error) {
    console.log(error instanceof URIError); // Output: true
}

// built-in error constructors
new Error()
new Error(message)
new Error(message, options)
new Error(message, fileName)
new Error(message, fileName, lineNumber)

Error()
Error(message)
Error(message, options)
Error(message, fileName)
Error(message, fileName, lineNumber)

