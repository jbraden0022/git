<?php
session_start();

echo ".";

$db_host = 'localhost';
$db_username = 'root';
$db_pass = 'pass';
$db_name = 'rtr';
$db = new mysqli($db_host, $db_username, $db_pass, $db_name) or die("Can't connect to MySQL Server");

$quantity = $_POST['quantity'];
$quantityType = $_POST['quantityType'];
$ingredientName = $_POST['ingredientName'];





$sql = "SELECT `ingredientID` FROM `ingredient` WHERE `ingredientName` = '$ingredientName'";

$result = mysqli_query($db, $sql);
$res = mysqli_num_rows($result);


if ($res == 0) {
echo 'Invalid ingredient';
}
else if ($res == 1) {
        $row = mysqli_fetch_assoc($result);
		$ID = $row['ingredientID'];
        
} else {
echo 'Duplicate Ingredient Error';
}


       
$sql = "INSERT INTO `userIngredients`(`userID`, `quantity`, `quantityType`, `ingredientID`) VALUES (99, '".$quantity."', '".$quantityType."', '".$ID."')";
		
mysqli_query($db, $sql);

array_push($_SESSION['quantity'], $quantity);
array_push($_SESSION['quantityType'], $quantityType);
array_push($_SESSION['ID'], $ID);


//echo "success"; //take this out, just to test

$db->close();
?>

