<?php

$host = "127.0.0.1:3307";
$dbuser = "root";
$dbpwd = "";
$dbname = "db_usermanagement";
$conn = new mysqli($host, $dbuser, $dbpwd, $dbname);
if(!$conn) die("Database connection field");
