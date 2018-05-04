<?php
session_start();



$db_host = 'localhost';
$db_username = 'root';
$db_pass = 'pass';
$db_name = 'rtr';
$db = new mysqli($db_host, $db_username, $db_pass, $db_name) or die("Can't connect to MySQL Server");

$quantity = $_POST['quantity'];
$quantityType = $_POST['quantityType'];
$ingredientName = $_POST['ingredientName'];



$userID = $_SESSION["username"];


$sql = "SELECT `ingredientID` FROM `ingredient` WHERE `ingredientName` = '$ingredientName'";

$result = mysqli_query($db, $sql);
$res = mysqli_num_rows($result);


if ($res == 0) {
echo 'Invalid ingredient';
}
else if ($res == 1) {
        $row = mysqli_fetch_assoc($result);
	$ID = $row['ingredientID'];


	
	array_push($_SESSION['quantity'], $quantity);
	array_push($_SESSION['quantityType'], $quantityType);
     
        $sql2 = "SELECT `ingredientName` FROM `ingredient` WHERE `ingredientID` = '$ID'";
        $result2 = mysqli_query($db, $sql2);
        $row2 = mysqli_fetch_assoc($result2);
        $ingredientName  = $row2['ingredientName'];



	array_push($_SESSION['ingredientID'], $ingredientName);

	$sql = "INSERT INTO `userIngredients`(`userID`, `quantity`, `quantityType`, `ingredientID`) VALUES (" . $userID  . ", " . $quantity . ", '".$quantityType."', " . $ID . ")";

	mysqli_query($db, $sql);

	
	echo "Successfully Added";
        
} else {
echo 'Duplicate Ingredient Error';
}

//echo "Quantity: " . $quantity
       



//echo $sql;
		






//header('Location: https://refrigeratortorecipe.me/pantry.php');
//header("Refresh:0");


//echo "success"; //take this out, just to test

$db->close();
?>

