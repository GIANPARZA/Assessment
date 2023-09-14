 <! DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>Login</title>
</head>
<style>
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
.container2{
    background-color: white;
    padding: 20px; /* Add some padding to create space between content and the container edges */
	max-width: 1000px; /* Adjust this value to set the desired medium width */
    margin: 0 auto; /* Center the container horizontally */
	border: 1px solid #ccc; /* Add a border to create a form-like appearance */
            border-radius: 5px;
			min-height: 400px; /* Set a minimum height */
}

        .form-label {
            flex: 1;
        }

        select.form-select {
            flex: 1;
            margin-left: 20px; /* Add some space between label and select */
        }
</style>
<body class="bg-body">
	<nav class="navbar navbar-collapse-lg navbar-dark">
		<div class="container">
		<a class="navbar-brand" hre="#">
			<img src="assets/logo_bsu.png" alt="logo" width="40" height="40" class="inline-block align-text-top me-2 ">
			<h6>BATANGAS STATE UNIVERSITY -  	 	TNEU <br>MENTAL HEALTH ASSESSMENT PORTAL</h6>
		</a>
		<a class="navbar-brand" hre="#">
			<img src="assets/logo_mind.png" alt="logo" width="50" height="50" class="inline-block align-text-top me-2 ">
		</a>
		</div>
	</nav>
	<br><br><br><br>
	<div class="container2">


        <h2>Assessment Form</h2>
        <form>
    <div class="mb-1">
        <label for="name" class="form-label">Name:</label>
        <input type="text" id="name" name="name" class="form-control" readonly>
    </div>
    <div class="mb-1">
        <label for="email" class="form-label">G-suite:</label>
        <input type="email" id="email" name="email" class="form-control" readonly>
    </div>
    <hr>
</form>
			<hr>
			<div class="mb-1">
                <label for="name" class="form-label">Directions: The rating scale is as follows:<br><br>
0 Did not apply to me at all <br>
1 Applied to me to some degree, or some of the time<br>
2 Applied to me to a considerable degree, or a good part of time<br>
3 Applied to me very much, or most of the time</label>
			</div>
			<hr>
<div class="mb-3">
    <label for="question1" class="form-label">Question 1: I found myself getting upset by quite trivial things</label>
                <select class="form-select" id="question1" name="question1" required>
                    <option value="1">0 - Poor</option>
                    <option value="2">1 - Fair</option>
                    <option value="3">2 - Good</option>
                    <option value="4">3 - Very Good</option>
                </select>
</div>

<div class="mb-3">
<label for="question2" class="form-label">Question 2: I was aware of dryness of my mouth</label>
<select class="form-select" id="question2" name="question2" required>
					<option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question2" class="form-label">Question 3: I couldn't seem to experience any positive feeling at all</label>
<select class="form-select" id="question3" name="question3" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question1" class="form-label">Question 4: I experienced breathing difficulty (eg, excessively rapid breathing,
breathlessness in the absence of physical exertion)</label>
<select class="form-select" id="question4" name="question4" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question2" class="form-label">Question 5: I just couldn't seem to get going</label>
<select class="form-select" id="question2" name="question2" required>
					<option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question2" class="form-label">Question 6: Are you stressed?</label>
<select class="form-select" id="question3" name="question3" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question1" class="form-label">Question 7: Are you depressed?</label>
<select class="form-select" id="question1" name="question1" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question2" class="form-label">Question 8: Are you stressed?</label>
<select class="form-select" id="question2" name="question2" required>
					<option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question2" class="form-label">Question 9: Are you stressed?</label>
<select class="form-select" id="question3" name="question3" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question1" class="form-label">Question 10: Are you depressed?</label>
<select class="form-select" id="question1" name="question1" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question2" class="form-label">Question 11: Are you stressed?</label>
<select class="form-select" id="question2" name="question2" required>
					<option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question2" class="form-label">Question 12: Are you stressed?</label>
<select class="form-select" id="question3" name="question3" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
            </div>
			<div class="mb-3">
<label for="question1" class="form-label">Question 13: Are you depressed?</label>
<select class="form-select" id="question1" name="question1" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
	</div>
<div class="mb-3">
<label for="question2" class="form-label">Question 14: Are you stressed?</label>
<select class="form-select" id="question2" name="question2" required>
					<option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question2" class="form-label">Question 15: Are you stressed?</label>
<select class="form-select" id="question3" name="question3" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question1" class="form-label">Question 16: Are you depressed?</label>
<select class="form-select" id="question1" name="question1" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question2" class="form-label">Question 17: Are you stressed?</label>
<select class="form-select" id="question2" name="question2" required>
					<option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question2" class="form-label">Question 18: Are you stressed?</label>
<select class="form-select" id="question3" name="question3" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question1" class="form-label">Question 19: Are you depressed?</label>
<select class="form-select" id="question1" name="question1" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question2" class="form-label">Question 20: Are you stressed?</label>
<select class="form-select" id="question2" name="question2" required>
					<option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question2" class="form-label">Question 21: Are you stressed?</label>
<select class="form-select" id="question3" name="question3" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question1" class="form-label">Question 22: Are you depressed?</label>
<select class="form-select" id="question1" name="question1" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question2" class="form-label">Question 23: Are you stressed?</label>
<select class="form-select" id="question2" name="question2" required>
					<option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question2" class="form-label">Question 24: Are you stressed?</label>
<select class="form-select" id="question3" name="question3" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
            </div>
			<div class="mb-3">
<label for="question1" class="form-label">Question 15: Are you depressed?</label>
<select class="form-select" id="question1" name="question1" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
	</div>
<div class="mb-3">
<label for="question2" class="form-label">Question 26: Are you stressed?</label>
<select class="form-select" id="question2" name="question2" required>
					<option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question2" class="form-label">Question 27: Are you stressed?</label>
<select class="form-select" id="question3" name="question3" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question1" class="form-label">Question 28: Are you depressed?</label>
<select class="form-select" id="question1" name="question1" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question2" class="form-label">Question 29: Are you stressed?</label>
<select class="form-select" id="question2" name="question2" required>
					<option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question2" class="form-label">Question 30: Are you stressed?</label>
<select class="form-select" id="question3" name="question3" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question1" class="form-label">Question 31: Are you depressed?</label>
<select class="form-select" id="question1" name="question1" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question2" class="form-label">Question 32: Are you stressed?</label>
<select class="form-select" id="question2" name="question2" required>
					<option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question2" class="form-label">Question 33: Are you stressed?</label>
<select class="form-select" id="question3" name="question3" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question1" class="form-label">Question 34: Are you depressed?</label>
<select class="form-select" id="question1" name="question1" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question2" class="form-label">Question 35: Are you stressed?</label>
<select class="form-select" id="question2" name="question2" required>
					<option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
<div class="mb-3">
<label for="question2" class="form-label">Question 36: Are you stressed?</label>
<select class="form-select" id="question3" name="question3" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
            </div>
            <div class="mb-3">
<label for="question2" class="form-label">Question 37: Are you stressed?</label>
<select class="form-select" id="question2" name="question2" required>
					<option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
                <div class="mb-3">
<label for="question2" class="form-label">Question 38: Are you stressed?</label>
<select class="form-select" id="question2" name="question2" required>
					<option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
                <div class="mb-3">
<label for="question2" class="form-label">Question 39: Are you stressed?</label>
<select class="form-select" id="question2" name="question2" required>
					<option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
                <div class="mb-3">
<label for="question2" class="form-label">Question 40: Are you stressed?</label>
<select class="form-select" id="question2" name="question2" required>
					<option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
                <div class="mb-3">
<label for="question2" class="form-label">Question 41: Are you stressed?</label>
<select class="form-select" id="question2" name="question2" required>
					<option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>
                <div class="mb-3">
<label for="question2" class="form-label">Question 42: Are you stressed?</label>
<select class="form-select" id="question2" name="question2" required>
					<option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
				</div>


            <button type="submit" class="btn btn-primary" onclick="calculateTotalAndShowResult();">Submit</button>
        </form>
    </div>
	</div>
        <button id="scrollButton" class="btn btn-primary" style="display: none;">Scroll to Top</button>
    </div>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script>
	function calculateTotalAndShowResult() {
    // Get the selected values for all question select elements
    var question1Value = parseInt(document.getElementById("question1").value);
    var question2Value = parseInt(document.getElementById("question2").value);
    var question3Value = parseInt(document.getElementById("question3").value);

    // Calculate the total score
    var totalScore = question1Value + question2Value + question3Value;

    // Display the result in an alert
    alert("Total Score: " + totalScore);
    window.location.href = "Login.php";
}

    // Assuming you have user data available in JavaScript variables
    var userName = "Giancarloparza"; // Replace with the user's actual name
    var userEmail = "20-06457@g.batstate-u.edu.ph"; // Replace with the user's actual email

    // Set the values of the name and email fields
    document.getElementById("name").value = userName;
    document.getElementById("email").value = userEmail;
</script>
</body>
</html>
