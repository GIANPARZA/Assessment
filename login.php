<! DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<title>Login</title>
</head>
<style>
span {
	color:orange;
	font-size: 50px;
}
h1 {
    color: white;
    font-size: 50px; /* Change the font size as desired */
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
}
.navbar-brand {
    display: flex;
    align-items: center; /* Align items vertically */
}
.navbar-brand h6 {
	color:#ffffff;
    margin:10px; /* Remove default margin to prevent spacing */
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
	color:white;
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
    padding-right: 30px; /* Adjust as needed to create space for the icon */
}

.input-with-icon i {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 10px; /* Adjust this value to position the icon inside the input field */
    cursor: pointer;
}
</style>
<body class="bg-body">
	<nav class="navbar navbar-expand-md navbar-dark">
		<div class="container">
		<a class="navbar-brand" hre="#">
			<img src="assets/logo_bsu.png" alt="logo" width="40" height="40" class="inline-block align-text-top me-2 ">
			<h6 class="text-sm">BATANGAS STATE UNIVERSITY -  	 	TNEU <br>MENTAL HEALTH ASSESSMENT PORTAL</h6>
		</a>
		
		</div>
	</nav>
	<br><br><br><br>
	<div class="container mt-5 transparent-container">
		<div class="row justify-content-left">
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h1> A <span>MIND</span>ful day, Red Spartan! Welcome</h1>

						<form id="loginForm">
							<div class="mb-3">
								<input type="text" class="form-control" id="username" name="username" placeholder="SR-CODE" required>
							</div>

							<div class="mb-3 input-with-icon">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
								<i class="far fa-eye" id="togglePassword" onclick="togglePasswordField()"></i>
							</div>

							<div class="text-center">
								<button type="submit" id="assessmentButton" class="btn btn-primary">Login</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
// This function is called when a user signs in with Google
function onSignIn(googleUser) {
  // You can access user information and authentication tokens here.
  var profile = googleUser.getBasicProfile();
  var id_token = googleUser.getAuthResponse().id_token;
  
  // Send the 'id_token' to your server for verification.
  // Implement server-side verification to ensure the token is valid.
}

// Load the Google API client and initialize it with your client_id
gapi.load('auth2', function() {
  gapi.auth2.init({
    client_id: '20-06457', // Replace 'YOUR_CLIENT_ID' with your actual client_id
  });
});
</script>
<script type="text/javascript" src="javascript/javascript.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
</body>
</html>
