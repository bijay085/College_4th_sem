// -WS to demostrate cookie in js


// this is from internet 
document.cookie = "username=John; expires=Thu, 31 Dec 2023 23:59:59 UTC; path=/";
const cookieValue = document.cookie
  .split('; ')
  .find(row => row.startsWith('username='))
  .split('=')[1];

console.log("Username:", cookieValue);
