<?php

$db_host = 'localhost';
$db_username = 'root';
$db_pass = 'pass';
$db_name = 'rtr';
$db = new mysqli($db_host, $db_username, $db_pass, $db_name) or die("Can't connect to MySQL Server");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT `userID` FROM `user` WHERE `username` = '$username' AND `password` = '$password'";

$result = mysqli_query($db, $sql);
$res = mysqli_num_rows($result);

if ($res == 0) {
echo 'Invalid username or password';
}
else if ($res == 1) { 
	$row = mysqli_fetch_assoc($result);
	$userID = $row['userID'];
	//Start your session
      	session_start();
      	//Store the name in the session
      	$_SESSION['username'] = $userID;
	header('Location: https://refrigeratortorecipe.me/pantry.php');

} else {
echo 'Multiple users found with those credentials.';
}
$db->close();
?>
