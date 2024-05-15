// 11. Write a JavaScript to demonstrate all types of Control Structures. And, explain use of noscript tag with  an example. 

// i. conditional statement : if , else if , swtich
let age = 19;
//if
if(age >= 20 ){
    console.log("You can drive");
}

// else if 
if(age >= 20){
    console.log("You had became adult");
}
else{
    console.log("You are a kid");
}

// switch case 

switch (age) {
    case 30:
        console.log("You are of 30's ");
        break;
    case 20:
        console.log("You are of 20's ");
        break;
    case 19:
        console.log("You are of 19's ");
        break;

    default:
        console.log("Invalid age");
        break;
}


// ii. Loop :: for ,  while loop, do while loop, foreach loop

let mday = ['sund', 'mon', 'tue'];
for(let i = 0; i<mday.length; i++){
    console.log(mday[i]);
}

let num = 0;
while (num<=5) {
    console.log(num);
    num++;
}

//do while
let num2 = 0;
do {
    console.log(num2);
    num2++;
} while (num2<=5);

//for each'
//array
let mday2 = ['sund', 'mon', 'tues', 'wed'];

mday2.forEach(item => {
    console.log(item);
});

//for in
//object
let cv = {
    name : 'bijay',
    roll : 92,
    class : 'bca'
};
for (let iKey in cv) {
    console.log(iKey + ': ' + cv[iKey]);
}

//for of
let fruits = ['apple', 'banana', 'orange'];

for (let fruit of fruits) {
    console.log(fruit);
}

//non script tag
/**
 * Non script tags are tags same like of html. They are used to show that the browser doesnt support js or the js has been get disabled by the browser.
 * <noscript>This will be shown if JS is disabled or not supported</noscript>
 */