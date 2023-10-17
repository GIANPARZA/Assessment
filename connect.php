<?php
// Database configuration
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'login_dbl';

// Create a database connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function sanitize($conn, $input) {
    return mysqli_real_escape_string($conn, $input);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = sanitize($conn, $_POST["username"]);
    $password = sanitize($conn, $_POST["password"]);


    $sql = "SELECT id, username FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {

        session_start();
        $_SESSION['username'] = $username;
        header("Location: assessment.php"); 
    } else {

        $error = "Invalid username or password";
    }
}


$conn->close();
?>