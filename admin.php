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
}
.navbar-brand {
    display: flex;
    align-items: center; /* Align items vertically */
    flex-direction: row;
    text-align: center;
    margin-left:0;
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
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 75px;
  left: 0;
  background-color: linear-gradient(rgba(255, 255, 255, 1), rgba(255, 255, 255, 0.5));
  overflow-y: auto;
  padding-top: 15px;
  color:#000000;
  display:block;
}

.sidenav a {
  padding: 30px 50px 50px 50px;
  text-decoration: none;
  font-size: 10px;
  color: #000000;
  display: block;

}
.sidenav a i {
    font-size: 100px;
    color:#28a745;
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
@media (max-width: 768px) {
            .sidenav {
                width: 100%;
                text-align: center;
                display: none;
        
            }

            .sidenav a {
                padding: 10px;
                font-size: 16px;
                background-color:#fff;
                color:#28a745;    

                
            }

            .main {
                margin-left: 0;
                padding: 10px;
            }
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
.sidenav-links {
  position: sticky; /* Make the links sticky within the sidenav */
  top: 0; /* Set the fixed position at the top of the sidenav */
}

</style>
<body class="bg-body">
	<nav class="navbar navbar-expand-md navbar-dark">
		<div class="container">
    
		<a class="navbar-brand" hre="#">
			<img src="assets/logo_bsu.png" alt="logo" width="40" height="40" class="inline-block align-text-top me-2 ">
			<h6 class="text-sm">BATANGAS STATE UNIVERSITY -  	 	TNEU <br>MENTAL HEALTH ASSESSMENT PORTAL</h6>
		</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
		</div>
	</nav>

    <div class="container " id="navbarNav">
<div class="sidenav">
      <div class="sidenav-links">
    <a href="#" id="home"><i class="fa fa-home"></i></a>
    <a href="#" id="list"><i class="fa fa-list-alt"></i></a>
    <a href="#" id="calendar"><i class="fa fa-calendar-o"></i></a>
  </div>
  </div>
</div>


  <div class="main">
    <div id="home-content">
    <h2>Homepage</h2>
    <hr>
    <h1>Welcome!</h1>
  </div>  

  <div id="list-content" style="display: none;">
      
      <h2>Dashboard</h2>
      <hr>
      <!-- Add your list content here -->
    </div>
    
    <div id="calendar-content" style="display: none;">
      <!-- Content for Calendar -->
      <h2>Calendar Page</h2>
      <hr>
      <!-- Add your calendar content here -->
    </div>
  </div>
  </div>

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
   <script src="bootstrap/js/bootstrap.min.js"></script>


<!--<script>
    $(document).ready(function () {
        // Handle initial state
        $('#home').addClass('active');
        $('#home-content').show();

        $('.sidenav a').click(function () {
            $('.sidenav a').removeClass('active');
            $(this).addClass('active');
            $('.main > div').hide();

            var linkId = $(this).attr('id');
            $('#' + linkId + '-content').show();

            // Close the collapsible container when a sidenav link is clicked
            $('#navbarNav').collapse('hide');
        });

        // Toggle the collapsible container when the button is clicked
        $('.navbar-toggler').click(function () {
            $('#navbarNav').collapse('toggle');
        });
    });
</script>-->
<script>
    $(document).ready(function () {
        // Function to toggle sidebar visibility
        function toggleSidebar() {
            var smallScreen = window.innerWidth <= 768; // Check if the screen is small
            var $sidenav = $('.sidenav');
            var $navbarNav = $('#navbarNav');
            
            if (smallScreen) {
                $sidenav.hide(); // Hide sidebar on small screens
                $navbarNav.removeClass('show'); // Hide the Bootstrap collapsible navbar on small screens
            } else {
                $sidenav.show(); // Show sidebar on large screens
                $navbarNav.addClass('show'); // Show the Bootstrap collapsible navbar on large screens
            }
        }

        // Toggle the collapsible container when the button is clicked
        $('.navbar-toggler').click(function () {
            toggleSidebar(); // Call the function to toggle sidebar visibility
        });

        // Handle resizing of the window
        $(window).resize(function () {
            toggleSidebar(); // Call the function when the window is resized
        });

        // Handle clicks on sidebar links
        $('.sidenav a').click(function () {
            $('.sidenav a').removeClass('active');
            $(this).addClass('active');
            $('.main > div').hide();

            var linkId = $(this).attr('id');
            $('#' + linkId + '-content').show();

            // Close the collapsible container when a sidenav link is clicked
            toggleSidebar(); // Call the function to toggle sidebar visibility
        });

        // Initial toggle based on window size
        toggleSidebar();
    });
</script>

   
