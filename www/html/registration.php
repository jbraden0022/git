<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Refrigerator To Recipe</title>
 <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
<script src="functions.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>

<!-- All the files that are required -->
<link rel="stylesheet" href="loginCSS.css">
<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<h1> Refrigerator To Recipe </h1>

<!-- REGISTRATION FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo">register</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="register-form" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="reg_username" class="sr-only">Username</label>
						<input type="text" class="form-control" id="reg_username" name="reg_username" placeholder="username">
					</div>
					<div class="form-group">
						<label for="reg_password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="password">
					</div>
					<div class="form-group">
						<label for="reg_password_confirm" class="sr-only">Confirm Password</label>
						<input type="password" class="form-control" id="reg_password_confirm" name="reg_password_confirm" placeholder="confirm password">
					</div>
					
					<div class="form-group">
						<label for="reg_email" class="sr-only">Email</label>
						<input type="text" class="form-control" id="reg_email" name="reg_email" placeholder="email">
					</div>
				</div>
 				<script src="login.js"></script>
				<button type='button' onclick='register()' class="login-button"><i class="glyphicon glyphicon-apple"></i></button>
			</div>
			<div class="etc-login-form">
				<p>already have an account? <a href="login.php">login here</a></p>
				<p>need to go home? <a href="index.php">go home</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>


</html>
