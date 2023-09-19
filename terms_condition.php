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
    border-color: white; 
}
.btn-primary {
	border-radius: 20px;
    width:200px;
    margin-top:10px;
}
.btn-default {
	border-radius: 20px;
    width:200px;
    margin-top:10px;
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
	<nav class="navbar navbar-collapse-lg navbar-dark">
		<div class="container">
		<a class="navbar-brand" hre="#">
			<img src="assets/logo_bsu.png" alt="logo" width="50" height="50" class="inline-block align-text-top me-2 ">
			<h6>BATANGAS STATE UNIVERSITY -  	 	TNEU <br>MENTAL HEALTH ASSESSMENT PORTAL</h6>
		</a>
		<a class="navbar-brand" hre="#">
			<img src="assets/logo_mind.png" alt="logo" width="80" height="80" class="inline-block align-text-top me-2 ">
		</a>
		</div>
	</nav>
    <br><br><br><br><br><br><br>
    <div class="row justify-content-center mt-3">
        <div class="col-md-6-mt-10 text-center">
            <button type="button" id="assessmentButton" class="btn btn-primary">Take Assessment</button><br>
            <button type="button" id="primaryButton"  class="btn btn-default">Guidelines</button>
        </div>
    </div>

    <div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Terms & Condition</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
<br>
1. Acceptance of Terms
By accessing or using the Batangas State University Mental Health Assessment Portal, you agree to comply with and be bound by these terms and conditions. If you do not agree with these terms, please refrain from using the portal.
<br><br>
2. Privacy Policy
Please review our Privacy Policy to understand how we collect, use, and protect your personal information. Your use of the portal indicates your acceptance of our privacy practices.
<br><br>
3. User Eligibility
You must be a registered student or authorized staff member of Batangas State University to access the portal. You agree to provide accurate and complete information during the registration process.
<br><br>
4. Confidentiality
All responses to mental health assessments, personal information, and communications within the portal are confidential. Access to this data is restricted to authorized personnel only. Refer to our Privacy Policy for more details.
<br><br>
5. Use of Portal

You agree to use the portal for its intended purpose of mental health assessment, counseling, and support.
Do not engage in any unlawful, harmful, or disruptive activities while using the portal.
You are responsible for maintaining the confidentiality of your login credentials.
6. Intellectual Property
All content, including text, graphics, logos, images, and software, is the property of Batangas State University. You may not reproduce, distribute, or modify any content without permission.
<br><br>
7. External Links
The portal may contain links to external websites or resources. We do not endorse or control these websites and are not responsible for their content or services.
<br><br>
8. Termination
Batangas State University reserves the right to terminate or suspend access to the portal at its discretion. Users who violate these terms and conditions may be subject to disciplinary actions.
<br><br>
9. Disclaimer
The portal is provided "as is" without any warranties, express or implied. Batangas State University does not guarantee the accuracy, completeness, or suitability of the content for any purpose.
<br><br>
10. Amendments
These terms and conditions may be updated or modified periodically. Users will be notified of any changes, and continued use of the portal after such changes constitutes acceptance of the new terms.
<br><br>
11. Contact Information
For inquiries or concerns about these terms and conditions, please contact the Office of Guidance and Counseling at Batangas State University.
<br><br>
By accessing and using the Batangas State University Mental Health Assessment Portal, you acknowledge that you have read, understood, and agreed to these terms and conditions.
            </div>
            <div class="modal-footer">
                Agree<input type="checkbox" name="checkbox_name" value="checkox_value">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" href="login.php">Take Assessment</button>
            </div>
        </div>
    </div>
</div>
<!-- Include Bootstrap and jQuery libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function () {
        // When the primary button is clicked, show the modal
        $("#primaryButton").click(function () {
            $("#alertModal").modal("show");
        });
    });

    var primaryButton = document.getElementById("assessmentButton");

        // Add a click event listener to the button
        primaryButton.addEventListener("click", function() {
            // Redirect to the next page when the button is clicked
            window.location.href = "assessment.php"; // Replace "next_page.html" with the actual URL of the next page
        });
</script>
    <script src="bootstrap/js/bootstrap.min.js"></script>