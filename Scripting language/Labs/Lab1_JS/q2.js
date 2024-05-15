// 2. Write a JavaScript to print largest & smallest among 10 elements of an array. And, write script to print  largest & smallest among 5 digits of a number. 

// 1st part 
let numbers = [6, 1, 478, 9, 0, 73, 72, 99, 12, 2];
let largestNumber = numbers[0];
let smallestNumber = numbers[0];

for (let i = 0; i < numbers.length; i++) {
    if (numbers[i] > largestNumber) {
        largestNumber = numbers[i];
    }
    if (numbers[i] < smallestNumber) {
        smallestNumber = numbers[i];
    }
}
console.log("The original numbers in array form are :" + numbers);
console.log(`The largest number is : ${largestNumber}`);
console.log(`The smallest number is : ${smallestNumber}`);

//2nd part
let n = 78941;
let number = n; // Store the original number
let largest = 0;
let smallest = 9;

while (n) {
    let r = n % 10;

    // Find the largest digit
    if (r > largest) {
        largest = r;
    }

    // Find the smallest digit
    if (r < smallest) {
        smallest = r;
    }

    n = parseInt(n / 10);
}

console.log("Original Number: " + number);
console.log("Largest digit: " + largest);
console.log("Smallest digit: " + smallest);



