<?php
session_start();

if (!isset($_GET['uid'])) {
    header("location: /userManagement/select.php");
    exit;
}

include("connection.php");

$uid = $_GET['uid'];

$select_sql = "SELECT id, fullname, username, email, contact, address, password, program, photo FROM tbl_users WHERE id=$uid";
$select_res = mysqli_query($conn, $select_sql);

if (!$select_res) {
    die("Error in SQL query: " . mysqli_error($conn));
}

if ($user_data = mysqli_fetch_assoc($select_res)) {
    // Assign fetched data to variables
    $fullname = $user_data['fullname'];
    $username = $user_data['username'];
    $email = $user_data['email'];
    $contact = $user_data['contact'];
    $address = $user_data['address'];
    $password = $user_data['password'];
    $program = $user_data['program'];
    $photo = $user_data['photo'];

} else {
    echo "User not found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 300px;
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

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f8f8f8;
        }

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

        button:hover {
            background-color: #2980b9;
        }

        .cancel {
            background-color: #e74c3c;
            margin-top: 10px;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
            color: #3498db;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="update.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
            <h2>Update data</h2>
            <input type="hidden" name="uid" value="<?php echo $uid; ?>">
            <input type="hidden" name="photo_old" value="<?php echo $photo; ?>">

            <div class="form-box">
                <label for="fullname">Fullname</label>
                <input type="text" id="fullname" name="fullname" value="<?php echo $fullname; ?>">
            </div>
            <div class="form-box">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="<?php echo $username; ?>">
            </div>

            <div class="form-box">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>">
            </div>

            <div class="form-box">
                <label for="contact">Contact number</label>
                <input type="tel" id="contact" name="contact" value="<?php echo $contact; ?>">
            </div>
            <div class="form-box">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" value="<?php echo $address; ?>">
            </div>

            <div class="form-box">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" value="<?php echo $password; ?>">
            </div>

            <div class="form-box">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" value="<?php echo $password; ?>">
            </div>

            <div class="form-box">
                <label for="program">Program</label>
                <select id="program" name="program">
                    <option value="bca" <?php if ($program == 'bca')
                        echo 'selected'; ?>>BCA</option>
                    <option value="bbm" <?php if ($program == 'bbm')
                        echo 'selected'; ?>>BBM</option>
                    <option value="bim" <?php if ($program == 'bim')
                        echo 'selected'; ?>>BIM</option>
                </select>
            </div>

            <div class="form-box">
                <label for="photo">Profile Photo</label>
                <input type="file" id="photo" name="photo" accept="image/*">
            </div>


            <!-- Add the photo input if needed -->

            <button type="submit" name="submit">Update Now</button>
            <button type="button" class="cancel">Cancel</button>
        </form>
    </div>

    <script>
        function validateForm() {
            var fullname = document.getElementById('fullname').value;
            var email = document.getElementById('email').value;
            var contact = document.getElementById('contact').value;
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirmPassword').value;
            var photo =document.getElementById('photo').value;

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