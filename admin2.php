<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/fontawesome/css/font-awesome.min.css">
    <title>Navbar Demo</title>
    <style>
         #navbarNav {
    transition: max-height 0.2s ease-out;
}
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
  height: 100vh;
}
.navbar-brand {
    display: flex;
    align-items: center; 
    flex-direction: row;
    text-align: center;
    margin-left:0;
}
.navbar-brand h6 {
	color:#ffffff;
    margin:10px;
}
.transparent-container {
	background-color: transparent;
}

body {
    font-family: Arial, sans-serif;
}

header {
    background-color: #f2f2f2;
    text-align: center;
    padding: 20px 0;
}

.top-navbar {
    background-color: #000000;
    color:blue;
    overflow: hidden;
    
}

.top-navbar button {
    float: left;
    display: block;
    color: blue;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.content {
    display: none;
    padding: 20px;
}

.show {
    display: block;
}

</style>
</head>


<body class="bg-body">
	<nav class="navbar navbar-expand-md navbar-dark">
		<div class="container">
    
		<a class="navbar-brand" href="#">
			<img src="assets/logo_bsu.png" alt="logo" width="40" height="40" class="inline-block align-text-top me-2 ">
			<h6 class="text-sm">BATANGAS STATE UNIVERSITY -  	 	TNEU <br>MENTAL HEALTH ASSESSMENT PORTAL</h6>
		</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
		</div>
	</nav>

    <nav class="top-navbar">
        <button onclick="showContent('home')">home</button>
        <button onclick="showContent('about')">about</button>
        <button onclick="showContent('services')">service</button>
        <button onclick="showContent('contact')">contact </button>
    </nav>

    <div class="content" id="home-content">
        <h2>Home Content</h2>
        <p>Welcome to our homepage. This is the home content.</p>
    </div>

    <div class="content" id="about-content">
        <h2>About Us</h2>
        <p>Learn more about our company and team.</p>
    </div>

    <div class="content" id="services-content">
        <h2>Our Services</h2>
        <p>Explore the services we offer to our clients.</p>
    </div>

    <div class="content" id="contact-content">
        <h2>Contact Us</h2>
        <p>Get in touch with us. We are happy to help you.</p>
    </div>

    <script src="script.js"></script>
</body>

</html>
