/*
Client side Local storage ::
-cookie
-session
-local storage

Server side Local Stoarge :
-cookie

*/

// Cookie ::  Text string
// syntax : how to make cookie 
window.cookie = "name : Your name ; Address ; Ktm, Nepal";
console.log(window.cookie); //normal cookie 
console.log(window.cookie.split(";"));//splited into array
// cookie expires but dont destroyed so time limit is given but session is destroyed
// cookie is in text string and need to change in array :: but the session automatically comes in array 
// task : Set time 
// to study in js : offical document site : MDN (Mozilla Developer Network)
// for cookie :  https://developer.mozilla.org/en-US/docs/Web/API/Document/cookie

