<?php

$servername = "mysqli";
$username = "root";
$password = "myecommerce";
$db = "myecommerce";

// Create connection
$con = mysqli_connect($servername,$username,$password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
