<?php
include('assessment_db.php');
$errorMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sr_code = $_POST['sr_code'];
    $password = $_POST['password'];

   
    $sql = "SELECT * FROM account WHERE sr_code = '$sr_code' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        
        session_start();
        $_SESSION['sr_code'] = $sr_code;
        header("Location: terms_condition.php"); 
        exit; 
    } else {
        
        $errorMessage = "Invalid SR-CODE or password.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap/font/bootstrap-icons.min.css">
    
    <title>Login</title>
</head>
<style>

    span {
	color:orange;
	font-size: 50px;
}
h1 {
    color: white;
    font-size: 50px; 
}
.navbar {
	background-image: url('assets/header.png');
	background-size:cover;
	background-repeat:no-repeat;
	background-position: center;
}
.bg-body {
	background-image: url('assets/home.png');
	background-size:cover;
	background-repeat:no-repeat;
	background-position: center;
    height: 100vh;
}
.navbar-brand {
    display: flex;
    align-items: center;
}
.navbar-brand h6 {
	color:#ffffff;
    margin:10px; 
}
.transparent-container {
	background-color: transparent;
}
.card {
	background-color: transparent;
	border: none;
	box-shadow: none;
}
.form-control {
    background-color: transparent !important;
	color:#fff;
	border-radius: 50px;
	border-width: 3px;
        }
.form-control::placeholder {
    color: white;
}
.form-control:focus {
    color: white; 
    background-color: transparent !important;
    border-color: transparent; 
}
.form-control:active {
	
}
.btn-primary {
	border-radius: 20px;
	width: 100px;
}
.btn-primary:active {
    background-color: transparent;
}
.input-with-icon {
    position: relative;
}

.input-with-icon input[type="password"] {
    padding-right: 30px; 
}

.input-with-icon i {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 10px; 
    cursor: pointer;
}
.fa-eye, .fa-eye-slash {
    color: white !important;
}
.form-select {
        background-color: transparent;
        color: #fff;
        border-radius: 50px;
        border-width: 3px;
        border-color: #fff; /* Set border color */
        padding: 10px;
    }

    .form-select:focus {
        background-color: transparent;
        border-color: #fff; /* Set border color on focus */
    }

    .form-select option {
        background-color: #fff; /* Set background color of options */
        color: #000000;
    }
    .dropdown-container {
    display: flex;
    align-items: center;
}

.dropdown-container select.form-select {
    flex: 1;
}
</style>
<body class="bg-body">
    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/logo_bsu.png" alt="logo" width="40" height="40" class="inline-block align-text-top me-2">
                <h6 class="text-sm">BATANGAS STATE UNIVERSITY - TNEU <br>MENTAL HEALTH ASSESSMENT PORTAL</h6>
            </a>
        </div>
    </nav>



                        <div class="container mt-5 transparent-container">
        <div class="row justify-content-left">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1>Register a New Account</h1>

                        <form id="registrationForm" action="register.php" method="post">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="sr_code" name="sr_code" placeholder="SR-CODE" required autocomplete="off" pattern="^\d{2}-\d{5}$">
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control" id="name" name="name" placeholder="fullname" required autocomplete="off">
                            </div>

                            <div class="mb-3">
    <select class="form-select" id="department" name="department" required>
        <option value="" disabled selected>Select Department</option>
        <option value="Department 1">Department 1</option>
        <option value="Department 2">Department 2</option>
        <!-- Add more department options as needed -->
    </select>



    <select class="form-select" id="program" name="program" required>
        <option value="" disabled selected>Select Program</option>
        <option value="Program 1">Program 1</option>
        <option value="Program 2">Program 2</option>
        <!-- Add more program options as needed -->
    </select>



    <select class="form-select" id="year" name="year" required>
        <option value="" disabled selected>Select Year</option>
        <option value="First Year">First Year</option>
        <option value="Second Year">Second Year</option>
        <!-- Add more year options as needed -->
    </select>
</div>

<div class="mb-3">
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
</div>

<div class="mb-3">
    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
</div>

<div class="text-center">
    <button type="submit" id="registrationButton" class="btn btn-primary">Register</button>
</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script>
        
        $(document).ready(function() {
    $("#togglePassword").click(function() {
        var passwordField = $("#password");
        var icon = $(this).find("i");

        if (passwordField.attr("type") === "password") {
            passwordField.attr("type", "text");
            icon.removeClass("bi-eye-slash-fill").addClass("bi-eye-fill");
        } else {
            passwordField.attr("type", "password");
            icon.removeClass("bi-eye-fill").addClass("bi-eye-slash-fill");
        }
    });
});

$(document).ready(function() {
        
        function closeModal() {
            $('#errorModal').modal('hide');
        }

    
        $('#errorModal .modal-footer .btn-primary').click(function() {
            closeModal();
        });

     
        $('#errorModal').click(function(event) {
            if ($(event.target).hasClass('modal')) {
                closeModal();
            }
        });
    });
    </script>
    

</body>
</html>
