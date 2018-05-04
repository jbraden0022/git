<?php

$db_host = 'localhost';
$db_username = 'root';
$db_pass = 'pass';
$db_name = 'rtr';
$db = new mysqli($db_host, $db_username, $db_pass, $db_name) or die("Can't connect to MySQL Server");
session_start();
$userID = $_SESSION["username"];






$sqlIngredients = "SELECT quantity, quantityType, ingredientID FROM userIngredients WHERE userID = '$userID'";






$result = mysqli_query($db, $sqlIngredients);
$res = mysqli_num_rows($result);
echo "My size is: " . $res;
if ($res > 0) {
echo "I did it!";
$num = 0;

//$quantity = [];
//$quantityType = [];
//$ingredientID = [];




while($num < $res)
{
      $row = mysqli_fetch_assoc($result);
      $quantity[] = $row['quantity'];
      $quantityType[] = $row['quantityType'];
      $ingredient = $row['ingredientID'];
      $sql2 = "SELECT `ingredientName` FROM `ingredient` WHERE `ingredientID` = '$ingredient'";
      $result2 = mysqli_query($db, $sql2);
      $row2 = mysqli_fetch_assoc($result2);
	  $ingredientID[]  = $row2['ingredientName'];
      echo "Quantities are: " . $quantity[$num]. "\n";


//echo $row['ingredientID'];

echo "Quantity Types are: " . $quantityType[$num]. "\n";
echo "Ingredients are: " . $ingredientID[$num]. "\n";
    

              


//array_push($_SESSION['quantity'], $quantity[$num]);
//array_push($_SESSION['quantityType'], $quantityType[$num]);
//array_push($_SESSION['IngredientID'], $ingredientID[$num]);


          $num = $num + 1;


}


} else {

echo "Oh no :(";
//              $_SESSION["quantity"]= 0;
  //            $_SESSION["quantityType"] = 0;
    //          $_SESSION["ingredientID"] = 0;
}


		 $_SESSION["quantity"]= $quantity;
               $_SESSION["quantityType"] = $quantityType;
                $_SESSION["ingredientID"] = $ingredientID;


header('Location: https://refrigeratortorecipe.me');
//  exit();*/
$db->close();

?>





