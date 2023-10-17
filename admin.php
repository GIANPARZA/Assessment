<?php include('fetch_data.php')?>
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
.container2{
    background-color: white;
    padding: 20px; 
	max-width: 1000px;
    margin: 0 auto;
	border: 1px solid #ccc; 
            border-radius: 5px;
			min-height: 400px; 
      text-align: left;
      height: 100vh;
}

.form-label {
  flex: 1;
}

select.form-select {
  flex: 1;
  margin-left: 20px; 
}

.sidenav {
  height: 100vh;
  width: 180px;
  position: fixed;
  z-index: 1;
  top: 90px;
  left: 0;
  background-color: linear-gradient(rgba(255, 255, 255, 1), rgba(255, 255, 255, 0.5));
  overflow-y: hidden;
  padding-top: 50px;
  color:#000000;
  display:block;
  align-items: flex-start;
  
}

.sidenav a {
  padding: 50px 10px 10px 50px;
  text-decoration: none;
  font-size: 20px;
  color: #000000;
  display: block;
  transition: all 0.3s ease;

 

}
.sidenav a i {
    font-size: 95px;
    margin-right: 10px;
    color:#fff;
  }

.sidenav a:hover {
  color: #FF0307;
  background-color:rgba(255, 255, 255, 0.75);
  transform: scale(1.05);

}

.main {
  margin-left: 0px;
  background-color:rgba(255, 255, 255, 0.75);
  height:100%;
  top:0px;
  height: 100vh;

}
@media (max-width: 768px) {
            .sidenav {
                width: 100%;
                text-align: center;
                display:none;
                
        
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
  height: 1px;
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
  color: #ffffff; 
  background-color:rgba(255, 255, 255, 0.5);


}
.sidenav-links {
  position: sticky;
  top: 0; 
}
#list-content {
    max-height: 100vh; 
    overflow-y: auto; 
}

</style>
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

    <div class="navbar-collapse ">
            <ul class="navbar-nav ml-auto justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="#" id="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="list">List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="calendar">Calendar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="analytics">Analytics</a>
                </li>
            </ul>
        </div>
    </div>
	</nav>




  <div class="main">
    <div id="home-content">
    <h2>Homepage</h2>
    <hr>
    <h1>Welcome!</h1>
  </div>  

  <div id="list-content" style="display: none;">
    <h2>Dashboard</h2>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Sr-code</th>
                    <th>Depression</th>
                    <th>Anxiety</th>
                    <th>Stress</th>
    
                    <th>Date</th>
                    <th>Program</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['assessment_ID'] . "</td>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['sr_code'] . "</td>";
                    echo "<td>" . $row['depression_interpretation'] . "</td>";
                    echo "<td>" . $row['anxiety_interpretation'] . "</td>";
                    echo "<td>" . $row['stress_interpretation'] . "</td>";
                    echo "<td>" . $row['date'] . "</td>";

    
                    echo "</tr>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

    
<div id="calendar-content" style="display: none;">
    <h2>Schedule Appointment</h2>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Sr-code</th>
                    <th>Status</th>
                    <th>Appointment</th>

                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['assessment_ID'] . "</td>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['sr_code'] . "</td>";

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<div id="analytics-content" style="display: none;">
<h2>Analytics</h2>
    <hr>
    <canvas id="analytics-chart"></canvas>
</div>

</div>
  </div>
  </div>

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    $(document).ready(function () {
        
        function toggleSidebar() {
            var smallScreen = window.innerWidth <= 768; 
            var $sidenav = $('.sidenav');
            var $navbarNav = $('#navbarNav');
            
            if (smallScreen) {
                $sidenav.hide(); 
                $navbarNav.removeClass('show'); 
            } else {
                $sidenav.show(); 
                $navbarNav.addClass('show'); 
            }
        }

       
        $('.navbar-toggler').click(function () {
            toggleSidebar(); 
        });

       
        $(window).resize(function () {
            toggleSidebar(); 
        });

        $('.sidenav a').click(function () {
            $('.sidenav a').removeClass('active');
            $(this).addClass('active');
            $('.main > div').hide();

            var linkId = $(this).attr('id');
            $('#' + linkId + '-content').show();

           
            toggleSidebar();
        });

        
      });
    
</script>
<script>
    
    function scheduleAppointment(assessmentID) {

        if (confirm("Do you want to schedule an appointment for Assessment ID " + assessmentID + "?")) {
            
     
        } else {
         
        }
    }

    $(document).ready(function () {
 
        $('#analytics').click(function () {
    
            $('.sidenav a').removeClass('active');
            $(this).addClass('active');
            $('.main > div').hide();
            $('#analytics-content').show();

          
            createSampleChart();
        });
    });

   


        function createSampleChart() {
            var ctx = document.getElementById('analytics-chart').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May'],
                    datasets: [{
                        label: 'Number of Students',
                        data: [15, 22, 30, 18, 25],
                        backgroundColor: 'rgba(175, 255, 192, 0.6)',
                        borderColor: 'rgba(175, 255, 192, 1)',
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 5 // Define step size for y-axis ticks
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: true // Hide legend
                        }
                    }
                }
            });
        }

        // Call the createSampleChart function when document is ready
        $(document).ready(function() {
            createSampleChart();
        });
</script>

<script>
    $(document).ready(function () {
        function toggleSidebar() {
            var smallScreen = window.innerWidth <= 768;
            var $navbarNav = $('#navbarNav');

            if (smallScreen) {
                $navbarNav.removeClass('show');
            } else {
                $navbarNav.addClass('show');
            }
        }

        $('.navbar-toggler').click(function () {
            toggleSidebar();
        });

        $(window).resize(function () {
            toggleSidebar();
        });

        $('.nav-link').click(function () {
            $('.nav-link').removeClass('active');
            $(this).addClass('active');
            $('.main > div').hide();

            var linkId = $(this).attr('id');
            $('#' + linkId + '-content').show();

            toggleSidebar();
        });

        // Add an event listener for the "Home" link
        $('#home').click(function () {
            $('.nav-link').removeClass('active');
            $(this).addClass('active');
            $('.main > div').hide();
            $('#home-content').show();
        });
    });
</script>











   
