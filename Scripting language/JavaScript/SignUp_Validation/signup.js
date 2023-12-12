// parentElementalert("Make sure your info are safe ")

let form = document.signup_form; 
let fullname = form.fullname;
let email = form.email;
let photo = form.photo;

let span = document.createElement("span");
span.classList.add('error'); //use add/remove property with classList
console.log(email.parentElement); //test

email.parentElement.append(span);   //append(after all child) , prepend(before all child)

let errPhoto = document.createElement("span");
errPhoto.classList.add('error');
photo.parentElement.append(errPhoto);   //append(after all child) , prepend(before all child)

// event : mouse, keyboard, form, window 
//form event : submit
form.addEventListener("submit", function(e){
    if(fullname.value== ''){
        console.log("Fullname is empty.");
        fullname.nextElementSibling.innerText = "Fullname is empty ";
        //inside element : Text content insertion properties : innerText, innerHtml
        e.preventDefault();
    }

    if(email.value== ''){
        console.log("Email is empty.");
        email.nextElementSibling.innerText = "Email is empty";
        e.preventDefault();
    }
    if(photo.value== ''){
        console.log("No photo inserted");
        photo.nextElementSibling.innerText = "No photo inserted";
        e.preventDefault();
    }
});

console.log(Array());
console.log(Object());

//Keyboard event
email.addEventListener("keyup", function()
{
    console.log(email.value); 
    if(this.value.indexOf("@")==-1){
        // console.log("At least one '@' symbol is required."); this is shown in console only .
        this.nextElementSibling.innerText = "At least one '@' symbol is required.";
    }
    else if(this.value.indexOf("@") != this.value.lastIndexOf("@")){
        // console.log("More than one '@' symbol is not allowed"); this is shown in console only .
        this.nextElementSibling.innerText = "More than one '@' symbol is required.";

    }
    else if(this.value.indexOf(".") ==-1){
        // console.log("At least one '.' symbol is required."); this is shown in console only .
        this.nextElementSibling.innerText = "At least one '.' symbol is required.";
    }
    else if(this.value.indexOf(".") != this.value.lastIndexOf(".")){
        // console.log("More than one '.' symbol is not allowed"); this is shown in console only .
        this.nextElementSibling.innerText = "More than one '.' symbol is not allowed";

    }
    else if(this.value.indexOf(" ") !=-1){
        // console.log("No spaces are ' ' symbol is required."); this is shown in console only.
        this.nextElementSibling.innerText = "No spaces are ' ' symbol is required.";
    }
    else {
        // console.log("Ok! You are safe.");
        this.nextElementSibling.innerText = "";

    }
    
    });