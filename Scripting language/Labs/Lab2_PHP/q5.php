

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate fields
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $service = $_POST['service'];
    $comment = $_POST['comment'];
    $terms = isset($_POST['terms']) ? $_POST['terms'] : '';

    // Example validation checks
    if (empty($fullname) || empty($email) || empty($username) || empty($password) || empty($confirm_password) || empty($service) || empty($comment) || empty($terms)) {
        die('Please fill in all required fields.');
    }

    if ($password !== $confirm_password) {
        die('Passwords do not match.');
    }

    // File upload handling
    $uploadDir = './public/uploads/';
    $uploadFile = $uploadDir . basename($_FILES['image']['name']);

    $allowedTypes = array('image/png', 'image/jpeg', 'image/jpg');
    $fileType = $_FILES['image']['type'];

    if (!in_array($fileType, $allowedTypes)) {
        die('Invalid file type. Only PNG, JPG, and JPEG files are allowed.');
    }

    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
        echo 'File is valid, and was successfully uploaded.';
    } else {
        echo 'File upload failed.';
    }

    // Add code to insert data into database and send confirmation emails here
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
<script src="validation.js"></script>
</head>
<body>
<form action="process.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
    <h2>Register</h2>
    <input type="text" id="fullname" name="fullname" maxlength="20"  placeholder="Full name *"><br>
    
    <input type="email" id="email" name="email"  placeholder="Email *"><br>

    <input type="text" id="username" name="username" placeholder = "Username *"  title="Username must start with a letter followed by a number" ><br>

    <input type="password" id="password" name="password" minlength="8" placeholder="Password*" ><br>

    <input type="password" id="confirm_password" name="confirm_password" placeholder = "Confirm password *" ><br>
    
    <label for="service">Service *</label>
    <select id="service" name="service" >
        <option value="">Select Service</option>
        <option value="service1">Service 1</option>
        <option value="service2">Service 2</option>
        <option value="service3">Service 3</option>
    </select><br>
    
    <label for="image">Select a file *</label>
    <input type="file" id="image" name="image" accept=".png, .jpg, .jpeg" ><br>
    
    <img id="imagePreview" src="#" alt="Preview" style="display: none;"><br>
    
    <label for="comment">Write your comment here</label><br>
    <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br>
    
    <input type="checkbox" id="terms" name="terms" >
    <label for="terms">I agree to terms and conditions</label><br>
    
    <input type="submit" value="Register">
</form>

<script>
function validateForm() {
    // Get form values
    var fullname = document.getElementById('fullname').value;
    var email = document.getElementById('email').value;
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var confirm_password = document.getElementById('confirm_password').value;
    var image = document.getElementById('image').value;
    var terms = document.getElementById('terms').checked;

    // Full name validation: Length up to 20 characters
    if (fullname.length > 20) {
        alert('Full name should not exceed 20 characters.');
        return false;
    }

    // Email validation: Must be a valid email address
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert('Please enter a valid email address.');
        return false;
    }

    // Username validation: Must start with string followed by number
    var usernamePattern = /^[a-zA-Z]+\d+$/;
    if (!usernamePattern.test(username)) {
        alert('Username must start with letters followed by numbers.');
        return false;
    }

    // Password validation: Length more than 8 characters and complex
    var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    if (password.length <= 8 || !passwordPattern.test(password)) {
        alert('Password must be more than 8 characters long and include at least one uppercase letter, one lowercase letter, one number, and one special character.');
        return false;
    }

    // Confirm password validation: Must match the password
    if (password !== confirm_password) {
        alert('Passwords do not match.');
        return false;
    }

    // Image validation: Must be selected
    if (image === "") {
        alert('Please select an image file.');
        return false;
    }

    // Terms and conditions validation: Must be checked
    if (!terms) {
        alert('You must agree to the terms and conditions.');
        return false;
    }

    return true;
}

// Preview image function
document.getElementById('image').onchange = function () {
    var reader = new FileReader();
    reader.onload = function (e) {
        document.getElementById('imagePreview').src = e.target.result;
        document.getElementById('imagePreview').style.display = 'block';
    };
    reader.readAsDataURL(this.files[0]);
};


</script>
</body>
</html>
