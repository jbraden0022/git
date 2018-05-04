<?php
session_start();


$db_host = 'localhost';
$db_username = 'root';
$db_pass = 'pass';
$db_name = 'rtr';
$db = new mysqli($db_host, $db_username, $db_pass, $db_name) or die("Can't connect to MySQL Server");

$ingredientName = $_POST['delete'];

$userID = $_SESSION["username"];

$quantity = $_SESSION["quantity"];
$quantityType = $_SESSION["quantityType"];
$ingredientID = $_SESSION["ingredientID"];

$sql = "SELECT `ingredientID` FROM `ingredient` WHERE `ingredientName` = '$ingredientName'";
echo $sql;
$result = mysqli_query($db, $sql);
$res = mysqli_num_rows($result);


if ($res == 0) {
echo 'Invalid ingredient';
}
else if ($res == 1) {
        $row = mysqli_fetch_assoc($result);
        $ID = $row['ingredientID'];

        $key = array_search($ingredientName, $ingredientID);

        $sql = "DELETE FROM 'userIngredients' WHERE userID = " . $userID . "   AND `ingredientID` = " . $ID ;
	echo $sql;
        mysqli_query($db, $sql);

        echo "Successfully Removed";

} else {
echo 'Remove Ingredient Error';
}

echo "Ingredient is: " . $sql;

//header('Location: https://refrigeratortorecipe.me/addIngre.php');
//header("Refresh:0");


$db->close();
?>

