/* Create a contact form anf validate using JS. 
Fields : - fullname , email, phone, gender, address, message.*/

let form = document.mForm;
let fname = form.fname;
let email = form.email;
let phone = form.phone;
let gender = form.gender;
let address = form.address;
let msg = form.message;




// let errphone = document.createElement("span");
// errphone.classList.add('error');
// phone.parentElement.append(errphone);

// let erremail = document.createElement("span");
// erremail.classList.add('error');
// email.parentElement.append(erremail);

// let erraddress = document.createElement("span");
// erraddress.classList.add('error');
// address.parentElement.append(erraddress);

// let errmsg = document.createElement("span");
// errmsg.classList.add('error');
// msg.parentElement.append(errmsg);

//loop of element to add new node/element instead of separate concept as above
let eleArr = [email, phone, address, msg, gender];
eleArr.forEach(item => {
    let span = document.createElement("span");
    span.classList.add('error');

    if(item.length >= 0) {
        item[0].parentElement.parentElement.append(span)
    } else {
        item.parentElement.append(span);
    }
});

/*
let errgender = document.createElement("span");
errgender.classList.add('error');
gender.parentElement.append(errgender);
*/
form.addEventListener("submit", function(e){
    let containsNumbers = /\d/.test(fname.value);
    if(fname.value== ''){
        console.log("FullName is empty");
        fname.nextElementSibling.innerText= "Fullname is empty";
        e.preventDefault();
    }
    if (containsNumbers) {
        console.log("Full Name contains numbers");
        fname.nextElementSibling.innerText = "Full Name should not contain numbers";
        e.preventDefault();
    }
    if (email.value=='') {
        console.log("No email ");
        email.nextElementSibling.innerText = "Email is empty";
        e.preventDefault();
    }
    if (phone.value=='') {
        console.log("Contact misssing");
        phone.nextElementSibling.innerText = "Phone number is missing";
        e.preventDefault();
    }
    if (address.value=='') {
        console.log("Address misssing");
        address.nextElementSibling.innerText = "Your address is missing";
        e.preventDefault();
    }
    console.log(gender)
    if (gender.value == '') {
        gender[1].parentElement.nextElementSibling.innerText = "Gender not selected yet";
        e.preventDefault();
    }
    
    if (msg.value=='') {
        console.log("No message/comment written yet");
        msg.nextElementSibling.innerText = "Please enter a comment";
        e.preventDefault();
    }
});

let resetBtn = document.querySelector("[name*='reset']");
resetBtn.addEventListener("click", function() {
    confirm("Are you sure to reset ?");
});

// KeyboardEvent
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

// phone.addEventListener("keyup", function(){
//     console.log(phone.value);
//     let conatinsAlphabets = /\d/.test(phone.value);
//     if(conatinsAlphabets ) {
//         console.log("Contact number must not have alphabets");
//         phone.nextElementSibling.innerText = "Contact number must not have alphabets"
//         e.preventDefault();
//     }
// });

address.addEventListener("keyup", function(){
    let disallowedSymbols = /[!@#$%^&*()_+={}\[\]:;<>,.?/~\\|]/; // Define symbols not allowed
    
    console.log(address.value);
    if (disallowedSymbols.test(this.value)) {
        this.nextElementSibling.innerText = "Symbols not allowed in address";
        this.value = this.value.replace(disallowedSymbols, ''); // Remove disallowed symbols
    } else {
        this.nextElementSibling.innerText = ""; // Clear error message if no disallowed symbols
    }
});

msg.addEventListener("keyup", function(){
    let disallowedSymbols = /[!#$%^&*()_+={}\[\]:;<>,?/~\\|]/; // Define symbols not allowed
    console.log(msg.value)

    if (disallowedSymbols.test(this.value)) {

        errmsg.innerText = "Symbols not allowed in comment section";
        // this.value = this.value.replace(disallowedSymbols, ''); // Remove disallowed symbols
    } else {
        errmsg.innerText = ""; // Clear error message if no disallowed symbols
    }
});