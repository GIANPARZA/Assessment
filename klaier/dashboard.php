<! DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/fontawesome/css/font-awesome.min.css">
	<title>Login</title>
</head>
<style>
.navbar {
	background-image: url('assets/header.png');
	background-size:cover;
	background-repeat:no-repeat;
	background-position: center;
  height:90px;
  justify-content: center;
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
    flex-direction: row;
    text-align: center;
}
.navbar-brand h6 {
	color:#ffffff;
    margin:10px; /* Remove default margin to prevent spacing */
}
.transparent-container {
	background-color: transparent;
}
.container2{
    background-color: white;
    padding: 20px; /* Add some padding to create space between content and the container edges */
	max-width: 1000px; /* Adjust this value to set the desired medium width */
    margin: 0 auto; /* Center the container horizontally */
	border: 1px solid #ccc; /* Add a border to create a form-like appearance */
            border-radius: 5px;
			min-height: 400px; /* Set a minimum height */
      text-align: left;
}

.form-label {
  flex: 1;
}

select.form-select {
  flex: 1;
  margin-left: 20px; /* Add some space between label and select */
}

.sidenav {
  height: 100%;
  width: 300px;
  position: fixed;
  z-index: 1;
  top: 75px;
  left: 0;
  background-color: linear-gradient(rgba(255, 255, 255, 1), rgba(255, 255, 255, 0.5));
  overflow-y: fixed;
  padding-top: 15px;
  color:#000000;
}

.sidenav a {
  padding: 30px 50px 50px 50px;
  text-decoration: none;
  font-size: 25px;
  color: #000000;
  display: block;
}
.sidenav a i {
    font-size: 100px;
    color:#ffffff;
  }

.sidenav a:hover {
  color: #FF0307;
}

.main {
  margin-left: 300px;
  background-color:rgba(255, 255, 255, 0.75);
  height:100%;
  top:0px;

}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
@media screen and (max-width: 768px) {
  .sidenav { width: 200px;
  }
}
hr {
  height: 1px; /* Set the height to create a horizontal line */
    border-width:4px;
    border-color:#8b0000;

}
h2 {
  color:#8b0000;
  margin-left:20px;
  font-size:35px;
}
h1 {
  color:#8b0000;
  margin-left:20px;
}
.sidenav a.active {
  color: #ffffff; /* Change to your desired active button text color */
  background-color:rgba(255, 255, 255, 0.5);


}
</style>
<body class="bg-body">
	<nav class="navbar navbar-collapse-lg navbar-dark">
		<div class="container">
		<a class="navbar-brand " hre="#">
    <img src="assets/logo_bsu.png" alt="logo" width="60" height="60" class="inline-block align-text-top ">
			<h6>BATANGAS STATE UNIVERSITY -  	 	TNEU <br>MENTAL HEALTH ASSESSMENT PORTAL</h6>
		</a>
		<a class="navbar-brand" hre="#">
      <h6>In Partnership with</h6>
    <img src="assets/logo_mind.png" alt="logo" width="90" height="80" >
		</a>
		</div>
	</nav>


  <div class="sidenav">
  <a href="#" id="home"><i class="fa fa-home"></i></a>
  <a href="#" id="list"><i class="fa fa-list-alt"></i></a>
  <a href="#" id="calendar"><i class="fa fa-calendar-o"></i></a>
</div>

<div class="main">
  <h2>Homepage</h2>
  <hr>
  <h1>Welcome!</h1>
</div>  
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  // Initialize the active button (Home is active by default)
  $('#home').addClass('active');

  // Handle click events for menu items
  $('.sidenav a').click(function() {
    // Remove 'active' class from all menu items
    $('.sidenav a').removeClass('active');

    // Add 'active' class to the clicked menu item
    $(this).addClass('active');
  });
});
</script>