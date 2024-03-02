<!-- this is the 3rd done part that is "D" in CURD delete  -->

<?php
session_start();
include("connection.php");
$uid = $_GET['uid'];
$sql = "DELETE FROM tbl_users WHERE id='$uid' ";
$res = mysqli_query($conn, $sql);

if($res){
    // echo "Data deleted successfully";
    $_SESSION['msg'] = "Data deleted successfully";
}
else{
    $_SESSION['msg'] = "User not deleted";
}
header("location: index.php");
?>
