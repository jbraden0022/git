<?php



$db_host = 'localhost';
$db_username = 'root';
$db_pass = 'pass';
$db_name = 'rtr';
$db = new mysqli($db_host, $db_username, $db_pass, $db_name) or die("Can't connect to MySQL Server");
session_start();
$userID = $_SESSION["username"];



 $sql = "INSERT INTO `userIngredients`(`userID`, `quantity`, `quantityType`, `ingredientID`) VALUES (" . $userID . ", 1 , 'pinch',  22864 )";

 mysqli_query($db, $sql);


//echo $sql;

	header('Location: https://refrigeratortorecipe.me/addIngre.php');


?>
