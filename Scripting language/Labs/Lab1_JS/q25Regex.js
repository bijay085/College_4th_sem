// 25. Explain Regular Expression on JavaScript with an example.


// Regular expressions, often referred to as regex, are patterns used to match character combinations in strings.They are used for searching, replacing, and extracting information from text. In JavaScript, you can create regular expressions using the RegExp object or using regex literals enclosed in forward slashes (/).

let Text = "Bijay is bijay is very very very Good boy and Very nice is";
console.log(Text);

// If we want to change every 'very' to capital letters
let regex = /very/gi; // g for global, i for case-insensitive
console.log(Text.replace(regex, "VERY"));

// ^: Starts the string
// [\w+.-]+: Matches one or more characters like letters, numbers, underscores, dots, and hyphens (local part)
// @: Separates the local part from the domain
// [\w.-]+: Matches one or more characters like letters, numbers, dots, and hyphens (domain part)
// $: Ends the string

// Matches strings that start with "Hello":
const regex1 = /^Hello/;
regex1.test("Hello, world!");  // true
regex1.test("Goodbye, Hello"); // false

// Matches strings that start with numbers:
const regex2 = /^\d+/;
regex2.test("123abc");   // true
regex2.test("abc123");   // false