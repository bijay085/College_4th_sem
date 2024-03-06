<?php
// echo "Application program Document";

$conn = new mysqli('localhost', 'root', '', 'db_sl');
if(!$conn) die("database connection error");

// print_r($_GET);
$tbl_user_test_req = isset($_GET['tbl_user_test'])? $_GET['tbl_user_test']: '';
$sql = "SELECT * FROM tbl_user_test";
// $sql = "SELECT * FROM tbl_tbl_user_test_test oder by id desc limit 2";
$res = mysqli_query($conn, $sql);
$data = [];

if($res){
    while($row = mysqli_fetch_assoc($res)){
        array_push($data, $row['username']);
    }
} else{
    $data = "OOPS DATA not found";
}

echo json_encode($data); //array as a string