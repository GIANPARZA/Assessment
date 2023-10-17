<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Image Gallery using Bootstrap 5 | Coder Uncle</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>

         .mb-3 {

justify-content: center;
align-items: center;
text-align: center;
margin-bottom: 10px;
}
.navbar {
background-image: url('assets/header.png');
background-size:cover;
background-repeat:no-repeat;
background-position: center;
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

.gallery{
	padding: 80px 0px;
}
img{
	max-width: 150%;
}
.gallery img{
	
	padding: 15px;
	width: 60%;
	box-shadow: 0px 0px 15px rgba(0,0,0,0.3);
	cursor: pointer;
	object-fit: cover; 
}
#gallery-popup .modal-img{
	width: 100%;
}
.card{
	background:transparent;
}
.gallery-item {
    width: 200%;
    height: 100%;
    object-fit: cover; 
    border-radius: 0px; 
	background:transparent;
}
    </style>
</head>
<body>
<body class="bg-body">
	<nav class="navbar navbar-expand-md navbar-dark">
		<div class="container-lg">
		<a class="navbar-brand" hre="#">
			<img src="assets/logo_bsu.png" alt="logo" width="40" height="40" class="inline-block align-text-top me-2 ">
			<h6 class="text-sm">BATANGAS STATE UNIVERSITY -  	 	TNEU <br>MENTAL HEALTH ASSESSMENT PORTAL</h6>
		</a>
		
		</div>
	</nav>
    <div class="container">
	<section class="gallery min-vh-100">
			<div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-2">
				<div class="col">

                <a href="activity1.html">
					<img src="assets/1.png" class="gallery-item" alt="Gallery1">
                    </a>
				</div>

				<div class="col">
                <a href="activity2.html">
					<img src="assets/2.png" class="gallery-item" alt="Gallery2">
                </a>
				</div>

				<div class="col">
                <a href="activity3.html">
					<img src="assets/3.png" class="gallery-item" alt="Gallery3">
                    </a>
				</div>

				<div class="col">
                <a href="activity4.html">
					<img src="assets/4.png" class="gallery-item" alt="Gallery4">
                    </a>
				</div>
</div>
			</div>
		</div>
	</section>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>