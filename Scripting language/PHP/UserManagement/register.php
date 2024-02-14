<?php
include("connection.php");

// check submit button clicked or not 
if (isset($_POST['submit'])) {

    // Data collection first 
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $address = $_POST["address"];
    $password = $_POST["password"];
    $program = $_POST["program"];
    $photo = $_FILES["photo"];
    $photo_name = $_FILES["photo"]["name"];


    // for files/photo
    if ($_FILES['photo']['error'] == 0) {
        //check for type
        $mimetypes = ["image/jpeg", "image/jpg", "image/png", "image/gif"];
        if (in_array($_FILES['photo']['type'], $mimetypes)) {
            //upload image
            if (move_uploaded_file($_FILES['photo']['tmp_name'], 'public/' . $_FILES['photo']['name'])) {
                echo "Image uploaded";
            } else {
                echo "Image cannot be uploaded";
            }
        } else {
            echo "Imagetype is invalid";
        }
    } else {
        echo "Image upload error";
    }

    $sql = "INSERT INTO tbl_users(fullname,username, email, contact, address, password, program, photo) VALUES('$fullname','$username', '$email', '$contact', '$address', '$password','$program', '$photo_name');"; //statement is ready
    $result = mysqli_query($conn, $sql); //Execution of query
    if ($result) {
        echo "Data inserted successfully.";
        header("location: /userManagement/index.php");
    } else {
        echo "Data not inserted, try again";
    }
} 
else {
   echo "Some problem occured";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f0f0;
            margin: 10px;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        form {
            background-color: #ffffff;
            padding: 60px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
            width: 500px;
        }

        h2 {
            text-align: center;
            color: #3498db;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f8f8f8;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        button.cancel {
            background-color: #e74c3c;
            margin-top: 10px;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <div class="conatiner">
        <form action="#" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
            <h2>Register here</h2>
            <div class="form-box">
                <label for="fullname">Fullname</label>
                <input type="text" id="fullname" name="fullname">
            </div>
            <div class="form-box">
                <label for="username">Username</label>
                <input type="text" id="username" name="username">
            </div>

            <div class="form-box">
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
            </div>

            <div class="form-box">
                <label for="contact">Contact number</label>
                <input type="tel" id="contact" name="contact">
            </div>
            <div class="form-box">
                <label for="address">Address</label>
                <input type="text" id="address" name="address">
            </div>

            <div class="form-box">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>

            <div class="form-box">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword">
            </div>

            <div class="form-box">
                <label for="program">Program</label>
                <select id="program" name="program">
                    <option value=""></option>
                    <option value="bca">BCA</option>
                    <option value="bbm">BBM</option>
                    <option value="bim">BIM</option>
                </select>
            </div>

            <div class="form-box">
                <label for="photo">Profile Photo</label>
                <input type="file" id="photo" name="photo" accept="image/*">
            </div>
            <button type="submit" name="submit">Submit</button>
            <button type="button" class="cancel">Cancel</button>
            <a href="/userManagement/login.php">Already have a account</a>
        </form>

        <script>
            function validateForm() {
                var fullname = document.getElementById('fullname').value;
                var email = document.getElementById('email').value;
                var contact = document.getElementById('contact').value;
                var password = document.getElementById('password').value;
                var confirmPassword = document.getElementById('confirmPassword').value;

                if (fullname === '' || email === '' || contact === '' || password === '' || confirmPassword === '') {
                    alert('All fields are required');
                    return false;
                }

                if (password !== confirmPassword) {
                    alert('Passwords do not match');
                    return false;
                }
                return true;
            }
        </script>
</body>
</html>