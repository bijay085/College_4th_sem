<?php
/**
 * Including Files :
 * - required() :: mendatory one time
 * - required_once() :: mendatory on every execution
 * - include() :: just include on every executing, if error exits, don't block execution
 * - include_once() :: just include one time, if error exits, don't block further
 */
include("connection.php");
// include "connection.php" ;

// check submit button clicked or not 
if (isset($_POST['submit'])) {

    // This is C the first program 
    // testing form submission
    /*
    echo "<pre";
    var_dump($_POST);
    var_dump($_FILES);
    echo "</pre>";
    */

    // Data collection first 
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $bio = $_POST["bio"];
    $photo = $_FILES["photo"];
    $photo_name = $_FILES["photo"]["name"];

    // for files/photo
    if($_FILES['photo']['error']==0){
        //check for type
        $mimetypes = ["image/jpeg", "image/jp", "image/png", "image/gif"];
        if(in_array($_FILES['photo']['type'], $mimetypes)){
            //upload image
            if (move_uploaded_file($_FILES['photo']['tmp_name'],'public/' . $_FILES['photo']['name'])){
                echo "Image uploaded";
            }
            else{
                echo "Image cannot be uploaded";
            }
        }
        else{
            echo "Imagetype is invalid";
        }
    }
    else{
        echo "Image upload error";
    }
    /**#3 Now we require database to resolve CRUD operation according to DBMS 
     * Note: Lets create connection.php file for database connection query
     */

    /**Two way of putting values on query */
    // $sql = "INSERT INTO users VALUES('All values according to fields should exists.');";
    // $sql = "INSERT INTO users(Columns) VALUES('values according to listed columns');";
    $sql = "INSERT INTO tbl_users(fullname, email, phone, address, bio, photo) VALUES('$fullname', '$email', '$phone', '$address', '$bio', '$photo_name');"; //statement is ready
    $result = mysqli_query($conn, $sql); //Execution of query
    if ($result) {
        echo "Data inserted successfully.";
    } else {
        echo "Data not inserted, try again";
    }
} else {
    header("location: /nmcbcafourth/formlogic/"); //slas symbol handle the index. PHP of project root where our register form exits
}