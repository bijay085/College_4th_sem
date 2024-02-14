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

// username = "Bibek Rey";
// window.cookie = "name : Your name ; Address ; Ktm, Nepal; expires = Fri, 22 Dec 2023 6:36:00 UTC";
document.cookie = "username=Bibek Rey; expires=Fri, 22 Dec 2023 06:51:00 ; path = /";

// console.log(window.cookie ); //normal cookie 
// console.log(window.cookie.split(";"));//splited into array
// document.write(window.cookie); //normal cookie 
// document.write(window.cookie.split(";"));//splited into array

console.log(document.cookie); //normal cookie 
// console.log(document.cookie.split(";"));//splited into array
document.write(document.cookie); //normal cookie 
// document.write(document.cookie.split(";"));//splited into array

// cookie expires but dont destroyed so time limit is given but session is automatically destroyed not all but destroyed
// cookie is in text string and need to change in array :: but the session automatically comes in array 
// task : Set time 
// to study in js : offical document site : MDN (Mozilla Developer Network)
// for cookie :  https://developer.mozilla.org/en-US/docs/Web/API/Document/cookie

