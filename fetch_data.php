<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "mhap";


$connection = mysqli_connect($servername, $username, $password, $database);


if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}


$query = "SELECT assessment_ID, Name, sr_code, depression_interpretation, anxiety_interpretation, stress_interpretation, date  FROM assessment";
$result = mysqli_query($connection, $query);


if (!$result) {
    die("Database query failed: " . mysqli_error($connection));
}
?>
