<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/fontawesome/css/font-awesome.min.css">
	<title>Login</title>
</head>
<style>
    /* Add your global styles here */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0
}

.bg-body {
    background-color: #f8f9fa;
}

/* Header styles */
.navbar {
    background-color: red;
}

/* Sidebar styles */
.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    width: 250px;
    padding-top: 1rem;
    background-color: blue;
    color: #ffffff;
    z-index: 2; /* Set a lower z-index value than the header */
}

/* Main content styles */
.main {
    margin-left: 250px; /* Set this value to the width of your sidebar */
    padding: 2rem;
}

/* Content specific styles */
.content {
    margin-top: 20px;
}

/* Media query for responsive layout */
@media (max-width: 768px) {
    .sidebar {
        display: none;
    }

    .main {
        margin-left: 0;
    }
}

</style>
<body class="bg-body">
    <nav class="navbar navbar-expand-md navbar-light">
        <!-- Navbar content goes here -->
        <a class="navbar-brand" href="#">
			<img src="assets/logo_bsu.png" alt="logo" width="40" height="40" class="inline-block align-text-top me-2 ">
			<h6 class="text-sm">BATANGAS STATE UNIVERSITY -  	 	TNEU <br>MENTAL HEALTH ASSESSMENT PORTAL</h6>
		</a>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block sidebar">
            <a href="#" id="home"><i class="fa fa-home"></i></a>
            <a href="#" id="list"><i class="fa fa-list-alt"></i></a>
            <a href="#" id="calendar"><i class="fa fa-calendar-o"></i></a>
            <a href="#" id="analytics"><i class="fa fa-line-chart"></i></a>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <!-- Main content goes here -->
                <div class="content" id="home-content">
                    <!-- Content specific to the home page -->
                </div>

                <div class="content" id="list-content" style="display: none;">
                    <!-- Content specific to the list page -->
                </div>

                <div class="content" id="calendar-content" style="display: none;">
                    <!-- Content specific to the calendar page -->
                </div>

                <div class="content" id="analytics-content" style="display: none;">
                    <!-- Content specific to the analytics page -->
                </div>
            </main>
        </div>
    </div>

    <!-- Scripts go here -->
</body>

</html>
