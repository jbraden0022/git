<?php
session_start()
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Refrigerator To Recipe</title>
 <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
<script src="login.js"></script>

</head>
<body>



<!-- All the files that are required -->
<link rel="stylesheet" href="loginCSS.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<h1> Refrigerator To Recipe </h1>

<!-- Where all the magic happens -->
<!-- LOGIN FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo">login</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="login-form" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="lg_username" class="sr-only">Username</label>
						<input type="text" class="form-control" id="username" name="lg_username" placeholder="username">
					</div>
					<div class="form-group">
						<label for="lg_password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="password" name="lg_password" placeholder="password">
					</div>
					<div class="form-group login-group-checkbox">
						<input type="checkbox" id="remember" name="lg_remember">
						<label for="lg_remember">remember</label>
					</div>
				</div>
<script src="login.js"></script>

				<button type='submit' onclick='login()' class="login-button"><i class="glyphicon glyphicon-apple"></i></button>



			</div>
			<div class="etc-login-form">
				<p>forgot your password? <a href="forgotPass.php">click here</a></p>
				<p>new user? <a href="registration.php">create new account</a></p>
				<p>need to go home? <a href="index.php">go home</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>

<script src="login.js"></script>


</body>
</html>
