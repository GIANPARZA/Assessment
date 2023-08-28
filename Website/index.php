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
</style>
<body class="bg-body">
	<nav class="navbar navbar-collapse-lg navbar-dark">
		<div class="container">
		<a class="navbar-brand" hre="#">
			<img src="assets/logo_bsu.png" alt="logo" width="40" height="40" class="inline-block align-text-top me-2 ">
			<h6>Batangas State University</h6>
		</a>
		<a class="navbar-brand" hre="#">
			<img src="assets/logo_mind.png" alt="logo" width="50" height="50" class="inline-block align-text-top me-2 ">
		</a>
		</div>
	</nav>
	<br><br><br><br>
	<div class="container mt-5 transparent-container">
		<div class="row justify-content-left">
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Login</h4>
						<form>
							<div class="mb-3">
								<label for="username" class="form-label">Username</label>
								<input type="text" class="form-control" id="username" name="username" required>
							</div>
							<div class="mb-3">
								<label for="password" class="form-label">Password</label>
								<input type="password" class="form-control" id="password" name="password" required>
							</div>
							<button type="submit" class="btn btn-primary">Login</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
