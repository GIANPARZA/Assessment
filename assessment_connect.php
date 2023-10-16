<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "mhap";


$conn = new mysqli($servername, $username, $password, $database);


if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>
