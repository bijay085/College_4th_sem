let n = 78940;
let number = n; // Store the original number
let largest = 0;
let smallest = 982;

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
