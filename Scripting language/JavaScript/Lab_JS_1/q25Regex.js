// 25. Explain Regular Expression on JavaScript with an example.


// Regular expressions, often referred to as regex, are patterns used to match character combinations in strings.They are used for searching, replacing, and extracting information from text. In JavaScript, you can create regular expressions using the RegExp object or using regex literals enclosed in forward slashes (/).

let Text = " Bijay is bijay is very very very Good boy and Very nice is ";
console.log(Text);
// if we want to change very:: make it capital 
console.log(Text.replace('very', "VERY")); //only ine very is changed 

//now if we want to change very of all to capital letter then we need to use regex
let regex = /very/g; //g for global
console.log(Text.replace(regex, "VERY")); //only ine very is changed

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