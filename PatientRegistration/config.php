<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "optihealth_db";

$conn = new mysqli($servername, $username, $password, $db);

if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}

//echo "<script>alert('Connected Successfully')</script>";


?>