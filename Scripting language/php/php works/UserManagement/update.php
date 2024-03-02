<?php
session_start();
include("connection.php");

if (isset($_POST['submit'])) {
    $uid = isset($_POST['uid']) ? $_POST['uid'] : '';
    $photo_old = isset($_POST['photo_old']) ? $_POST['photo_old'] : '';

    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $address = $_POST["address"];
    $password = $_POST["password"];
    $program = $_POST["program"];
    $photo_old = $_POST['photo_old'];
    $photo = $_FILES['photo']['name'];

    $sql = "";
    if (!empty($uid)) {

        $sql = "UPDATE tbl_users SET fullname='$fullname', username='$username', email='$email', contact='$contact', address='$address', password='$password', program='$program', photo='$photo' WHERE id=$uid;";

    } else {
        echo "User ID is empty or undefined!";
    }
    if ($photo != '') {
        if ($photo_old != $photo) {

            
            $_SESSION['remove_file'] = $photo_old;
            if ($_FILES['photo']['error'] == 0) {
                //check for type
                $mimetypes = ["image/jpeg", "image/jpg", "image/png", "image/gif"];
                if (in_array($_FILES['photo']['type'], $mimetypes)) {
                    //upload image
                    if (move_uploaded_file($_FILES['photo']['tmp_name'], 'public/' . $_FILES['photo']['name'])) {
                        $_SESSION['msg'] = "Image updated successfully";
                    } else {
                        $_SESSION['msg'] = "Image can not be updated.";
                    }
                } else {
                    $_SESSION['msg'] = "Image type is invalid.";
                }
            } else {
                $_SESSION['msg'] = "Image upload error.";
            }
            $sql = "UPDATE tbl_users SET fullname='$fullname', username='$username', email='$email', contact='$contact', address='$address', password='$password', program='$program', photo='$photo' WHERE id=$uid;";
        }
    } else {
        $sql = "UPDATE tbl_users SET fullname='$fullname', username='$username', email='$email', contact='$contact', address='$address', password='$password', program='$program' WHERE id=$uid;";
    }


    $res = mysqli_query($conn, $sql);
    if ($res) {
        $_SESSION['msg'] = 'User updated successfully';
    } else {
        $_SESSION['msg'] = "User update failed.";
    }
    echo "Data updated successfully";
    // header("location: /nmcbcafourth/formlogic/edit.php?uid=$uid");
    header("location: /userManagement/index.php");

} else {
    // header("location: /nmcbcafourth/formlogic/select.php");
    header("location: /userManagement/edit.php?uid=$uid");

}

