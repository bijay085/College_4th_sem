// fullname, email, phone, studying, dob, password, confirm-password,gender(male, female)

let form = document.rform;
let fname = form.fullname;
let email = form.email;
let address = form.address;
let phone = form.phone;
let studying = form.studying;
let dob = form.dob;
let password = form.password;
let cpass= form.confirmpassword;
let gender = form.gender;
let msg = form.message;

let eleArr = [email, address, phone, studying, dob, password, cpass, gender, msg];
eleArr.forEach(item => {
    let span = document.createElement("span");
    span.classList.add('error');

    if(item.length >= 0) {
        item[0].parentElement.parentElement.append(span)
    } else {
        item.parentElement.append(span);
    }
});

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
    if (address.value=='') {
        console.log("Address misssing");
        address.nextElementSibling.innerText = "Your address is missing";
        e.preventDefault();
    }
    if (phone.value=='') {
        console.log("Contact misssing");
        phone.nextElementSibling.innerText = "Phone number is missing";
        e.preventDefault();
    }
    if(password.value == ''){
        console.log("Password missing ");
        password.nextElementSibling.innerText = "Enter password";
        e.preventDefault();
    }
    if(cpass.value == ''){
        console.log("Confirm password missing");
        cpass.nextElementSibling.innerText = "Confirm password is missing";
        e.preventDefault();
    }

    if(password.value != cpass.value){
        console.log("Password didnt match");
        cpass.nextElementSibling.innerText = "Password didnt match";
        e.preventDefault();
    }

    if(dob.value == ''){
        console.log("No dob selected");
        dob.nextElementSibling.innerText= "No dob choosed";
        e.preventDefault();
    }
    
    if (msg.value == '') {
        console.log("No msg written");
        msg.nextElementSibling.innerText = "No msg written";
        e.preventDefault();
    }
    // if (msg.value === '') {
    //     showError(msg, "Please enter a comment");
    //     e.preventDefault();
    // }

    console.log(gender)
    if (gender.value === '') {
        gender[1].nextElementSibling.innerText = "Gender not selected yet";
        e.preventDefault();
    }
    console.log(studying)
    if (studying.value === '') {
        studying.nextElementSibling.innerText = "Options not selected yet";
        e.preventDefault();
    }

    // if (studying.value === '') {
    //     showErrorSelect(studying, "Please select an option", 'select-error');
    //     e.preventDefault();
    //   }
      

    
});

let resetBtn = document.querySelector("[name*='reset']");
resetBtn.addEventListener("click", function() {
    confirm("Are you sure to reset ?");
});


fname.addEventListener("keyup", function()
{
    let containsNumbers = /\d/.test(fname.value);
    console.log(fname.value)
    if (this.value.indexOf(fname) == (containsNumbers) ) {
        // console.log("Full Name contains numbers");
        fname.nextElementSibling.innerText = "Full Name should not contain numbers";

    }

});
email.addEventListener("keyup", function()
{
    console.log(email.value); 
    if(this.value.indexOf("@")==-1){
        // console.log("At least one '@' symbol is required."); this is shown in console only .
        this.nextElementSibling.innerText = "At least one '@' symbol is required.";
    }
    else if(this.value.indexOf("@") != this.value.lastIndexOf("@")){
        // console.log("More than one '@' symbol is not allowed"); this is shown in console only .
        this.nextElementSibling.innerText = "More than one '@' symbol is not needed.";

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
    console.log(msg.value);

    if (disallowedSymbols.test(this.value)) {
        this.nextElementSibling.innerText = "Symbols not allowed in comment section";
    } else {
        this.nextElementSibling.innerText = ""; // Clear error message if no disallowed symbols
    }
});