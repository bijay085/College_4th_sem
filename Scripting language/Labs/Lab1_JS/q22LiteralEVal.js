// 22. Explain Template Literals/String and eval() method with an example. 

// eval() method takes every things as Number
//  Template literals are defined using backticks (``) and ${} is placeholder.
let a = 84;
let b = 1;
let c = "+";

let d = eval(`${a} ${c} ${b}`);
console.log(`The sum is : ${d}`);
