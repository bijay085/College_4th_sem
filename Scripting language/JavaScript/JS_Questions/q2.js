// WAS to print your name reading from user input 

let name = prompt("What is your name ?");

console.log(name);
document.write(name);

let n1 = prompt("Enter n1:");
let n2 = prompt("Enter n2:");

document.write(`The sum is : ${Number(n1)} + ${Number(n2)}  <br>`);
document.write(`The differenece is : ${n1-n2}<br>`);
document.write(`The multiplication is : ${n1*n2}<br>`);
document.write(`The division is : ${n1/n2}<br>`);
document.write(`The modulus is : ${n1%n2}<br>`);
document.write(`The exponential is : ${n1**n2}<br>`);
document.write(`The end`);