<!-- // This is the first program  -->

<?php

// #1 if POST meyhod and hash(#: self link) is on action ,
// -data is taken in the top of the file.
// -php is declared among top 

    //form data retriving 
    $form_data = $_POST; //--retreving data (single line and multiline)
    //if POST method is on form, use FILES method to get file field separately
    $form_file = $_FILES; //retreving data (files, multi attributes)
    // check

    echo "<pre>";
    print_r($form_data); //checking output
    print_r($form_file); //checking output
    echo "</pre>";

#2 IF GET METHOD;
    // -No files seperation 
    // -Retreving data 
    // $form_data_get = $_GET; //It gives file field name (with file name with type : abc.jpg) only
    // echo "<pre>";
    // print_r($form_data_get); //checking output
    // echo "</pre>";

#3 summary : POST method sends form data making hidden on URL (Secure), 
        // GET method sends form data making visible on URL (Not secure)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1>Form -> Validation -> Logic -> DB</h1>
    <div class="form-box"><div class="form-box__header">
        <h2 class="form-box__title">Register User</h2>
        <div class="text-container">
            <p>Your information will not be misused.</p>
        </div>
    </div>
    <form action="signup.php" method="POST" enctype="multipart/form-data" name="register" novalidate>
        <!-- after clicking submit the page will redirec to signup.php -->
        <div class="field-group">
            <label for="fullname">Full Name<span class="mendatory">*</span></label>
            <input type="text" name="fullname" id="fullname" value="">
            <span class="error"></span>
        </div>
        <div class="field-group">
            <label for="email">E-mail<span class="mendatory">*</span></label>
            <input type="text" name="email" id="email" value="">
            <span class="error"></span>
        </div>
        <div class="field-group">
            <label for="phone">Phone number</label>
            <input type="text" name="phone" id="phone" value="">
            <span class="error"></span>
        </div>
        <div class="field-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" value="">
            <span class="error"></span>
        </div>
        <div class="field-group">
            <label for="photo">Photo</label>
            <input type="file" name="photo" id="photo" value="">
            <span class="error"></span>
        </div>
        <div class="field-group">
            <label for="bio">Bio<span class="mendatory">*</span></label>
            <textarea name="bio" id="bio"></textarea>
            <span class="error"></span>
        </div>
        <!-- <div class="field-group"> -->
            <!-- only one content avaible so no wrap in div  -->
            <button type="submit" name="submit" value="submit">Register now</button>
        <!-- </div> -->
    </form>
</div>
<!-- <script src="script.js"></script> -->
</body>
</html>

<!-- while submitting the form, the name will be taken -->