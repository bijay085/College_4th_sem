// 20. Explain JS Types. And, JS Data Types with an example including comment types 
// 21. Explain JavaScript closure and hoisting, variable scope and callback function, object literals vs.  constructor with example. 

/**
 * JavaScript has 8 Datatypes
 * String.
 * Number.
 * Bigint.
 * Boolean.
 * Undefined.
 * Null.
 * Symbol.
 * Object.
 */

let nameString = "Bijay";
let age = 18;
let number = 839383839939393899494998488344n;
let isAdult = false;
let hobby; //undefined
let badHabbit = null;
let favWord = Symbol("hdshs*whhhen"); //symbol
console.log(typeof(nameString));
console.log(typeof(age));
console.log(typeof(isAdult));
console.log(typeof(hobby));
console.log(typeof(badHabbit));
console.log(typeof(favWord));

let games = {
    action : "COD",
    openWorld : 'GTA',
    farming : 'green farm'
};
console.log(typeof(games));


//  comment types  ::::
//  => single comment line (//)
//  =>  Multi comment lines (/* ... */)

