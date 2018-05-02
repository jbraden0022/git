<?php

$db_host = 'localhost';
$db_username = 'root';
$db_pass = 'pass';
$db_name = 'rtr';




$db = new mysqli($db_host, $db_username, $db_pass, $db_name) or die("Can't connect to MySQL Server");

$username = $_POST['username'];
$password = $_POST['password'];
$confirm = $_POST['confirm_pass']; // Password Confirmation
$email = $_POST['email'];

//testing
echo "'$username', '$password', '$email', '$confirm'";

if(strcmp($password, $confirm) != 0) {
	//throw error, passwords invalid
	echo "Passwords do not match";

}
else {
$hashed_password = password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO user(username, password, email) VALUES ('$username','$hashed_password','$email')";

if($db->query($sql) === TRUE) {
$userID = $db->insert_id;
//Start session
session_start();
$_SESSION['username'] = $userID;
header('Location: https://refrigeratortorecipe.me/pantry.php');
} else {
echo "Error creating new user";
// to be updated later
}
}
$db->close();

?>
