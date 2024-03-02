<?php
session_start();
include("connection.php");


if(isset($_POST['submit'])) {
    $uid = $_POST['uid']; 
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $bio = $_POST['bio'];
    $photo_old = $_POST['photo_old'];
    $photo = $_FILES['photo']['name'];
    // move_uploaded_file($_FILES['photo']['temp_name'], "public/" . $photo); //This is enough for files/photo
    $sql = "";

    if($photo != '') {
        if($photo_old != $photo) {
            $_SESSION['remove_file'] = $photo_old;
            if($_FILES['photo']['error'] == 0){
                //check for type
                $mimetypes = ["image/jpeg", "image/jpg", "image/png", "image/gif"];
                if(in_array($_FILES['photo']['type'], $mimetypes)) {
                    //upload image
                    if(move_uploaded_file($_FILES['photo']['tmp_name'], 'public/' . $_FILES['photo']['name'])) {
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
            $sql = "UPDATE tbl_users SET fullname='$fullname', email='$email', phone='$phone', address='$address', photo='$photo', bio='$bio' WHERE id=$uid;";
        }
    } else {
        $sql = "UPDATE tbl_users SET fullname='$fullname', email='$email', phone='$phone', address='$address', bio='$bio' WHERE id=$uid;";
    }

    
    $res = mysqli_query($conn, $sql);
    if($res) {
        $_SESSION['msg'] ='User updated successfully';
    } else {
        $_SESSION['msg'] = "User update failed.";
    }
    // echo "Data updated successfully";
    // header("location: /nmcbcafourth/formlogic/edit.php?uid=$uid");
    header("location: /nmcbcafourth/formlogic/select.php");

} else {
    // header("location: /nmcbcafourth/formlogic/select.php");
    header("location: /nmcbcafourth/formlogic/edit.php?uid=$uid");

}

