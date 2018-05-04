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
//echo "'$username', '$password', '$email', '$confirm'";

if(strcmp($password, $confirm) != 0) {
	//throw error, passwords invalid
	echo "Passwords do not match";

}
else {
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

//echo $hashed_password;

/* $sql = $db->prepare("INSERT INTO user(username, password, email) VALUES (:user, :pass, :email)");
$sql->bind_param(':user', $username);
$sql->bind_param(':pass', $hashed_password);
$sql->bind_param(':email', $email);
$sql->execute();
*/
//$stmt = $db->prepare("INSERT INTO user (username, password, email) VALUES (?, ?, ?)");
//$stmt->bind_param("sss", $user, $pass, $prepemail);

$sql="INSERT INTO user (username, password, email) VALUES ('" . $username . "','" . $hashed_password . "','" . $email . "')";

$result = mysqli_query($db, $sql);

// set parameters and execute
$user = $username;
$pass = $hashed_password;
$prepemail = $email;
//$stmt->execute();

//if($sql->execute()) === TRUE) {
$userID = $db->insert_id;
//Start session

$sql = "SELECT * FROM user WHERE userID=( SELECT max(userID) FROM user )";

$result = mysqli_query($db, $sql);
$result = mysqli_query($db, $sql);
$result = mysqli_query($db, $sql);
$result = mysqli_query($db, $sql);


$row = mysqli_fetch_assoc($result);
$ID = $row['userID'];

session_start();
$_SESSION['username'] = $ID;
header('Location: https://refrigeratortorecipe.me/regSession.php');


// } else {
// echo "Error creating new user";
// to be updated later
// }
}
$db->close();

?>
