let form = document.register_form;
let fullname = form.fname, 
email = form.email,
phone = form.phone

form.addEventListener("submit", function(e){
    if (fullname.value.length <= 0) {
        fullname.nextElementSibling.innerText = "fullname required"
        e.preventDefault();
    }

    if (email.value.length <= 0) {
        email.nextElementSibling.innerText = "email required"
        e.preventDefault();
    }

    if (phone.value.length <= 0) {
        phone.nextElementSibling.innerText = "phone required"
        e.preventDefault();
    }
});

email.addEventListener("keydown", function(){
        // Regex: regular expression
        // - string pattern (not a language and script)
        // - regex suits on any programming language
        //     like : XMLDocument, js, php, python, .det etc
        // - So we can say REGEX is universal string apttern for checking string characters 


        
        /*
        let emailPattern = /[]/g; 
        or  -> w = word
        @ []-> exactly same
        let emailPattern = /[A-Za-z]\w/g;  or [A-Z][a-z]
        /*
        On pattern string making :
        if slash (/) only ends = single line 
        if /g ends = global (multiline also experts)
        */

    let emailPattern = /[A-Za-z]\w[(@)][A-Za-z]+\.[(com)]/g; 
       if(emailPattern.test(this.value) == false){
        this.nextElementSibling.innerText = "email not valid";
    } else {
        this.nextElementSibling.innerText = "";
    }
});
