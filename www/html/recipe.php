<?php
session_start();

$ID = $_GET['var'];

//echo "This is the ID of the recipe: " . $ID;

$db_host = 'localhost';
        $db_username = 'root';
        $db_pass = 'pass';
        $db_name = 'rtr';
        $db = new mysqli($db_host, $db_username, $db_pass, $db_name) or die("Can't connect to MySQL Server");

$sql = "SELECT *  FROM `recipe` WHERE `recipeID` =" . $ID ;


//echo $sql;
        $queryResult = mysqli_query($db, $sql);

           $row = mysqli_fetch_assoc($queryResult);
           $recipeName = $row['recipeName'];
           $url = $row['imgURL'];
	   $directions = $row['directions'];







?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Refrigerator To Recipe</title>
  
  <!-- This code grabs Bootsrap resources-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="functions.js"></script>
  
  <!-- This code grabs our custom css -->
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Creates navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
	  
	  <!-- Sets text of navbar -->
      <a class="navbar-brand" href="index.php">Refrigerator To Recipe</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
	  <?php
	  
		$username = "";	
		$username = $_SESSION["username"];
	  
	  if($username == "")
		{
        echo '<li><a href=pantry.php>Start Pantry</a></li>';
        echo '<li><a href=search.php>Search Recipes</a></li>';
        echo '<li><a href=login.php>Login</a></li>';
		}
	  else
		{
		echo '<li><a href=pantry.php>Go To My Pantry</a></li>';
        echo '<li><a href=search.php>Search Recipes</a></li>';
        echo '<li><a href=javascript:logout()>Logout</a></li>';
		}
		?>
      </ul>
    </div>
  </div>
</nav>


<div class="container-fluid bg-3 text-center"> 

<h3><?php echo $recipeName; ?> </h3>
<div class="row">
<!-- Extra space needed to center image -->
  <div class="col-sm-4">
    </div>
	<div class="col-sm-4">

<img src="<?php echo $url;?>" class="img-recipe" id = "recipeImage" alt="recipeImage" /> 
 </div>
</div>
<br>

<div class="container">
  <h2>Ingredients</h2>          
  <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>Quantity</th>
        <th>Type</th>
        <th>Ingredient</th>
      </tr>
    </thead>
    <tbody>
	
	<!-- Will need to replace this with php that gets results -->
	<!-- This data is basically just a placeholder to see how the table looks at the moment -->
	<!-- For the update I am not sure if we should make all fields updatable or take them to a page to update -->
	<!-- Also not sure if we should just have update button at bottom for all, or button for each -->



<?php 



$sql = "SELECT *  FROM `recipeIngredients` WHERE `recipeID` =" . $ID ;


//echo $sql;
        $queryResult = mysqli_query($db, $sql);

          


$res = mysqli_num_rows($queryResult);

if ($res > 0) {

$num = 0;



while($num < $res)
{
      $row = mysqli_fetch_assoc($queryResult);
	$quantity = $row['quantity'];
	$quantityType = $row['quantityType'];
        $ingredientID = $row['ingredientID'];
	$sql2 = "SELECT `ingredientName` FROM `ingredient` WHERE `ingredientID` = $ingredientID";
      $result2 = mysqli_query($db, $sql2);
      $row2 = mysqli_fetch_assoc($result2);
	$name = $row2['ingredientName'];





echo" 	<tr>";
echo"	<td> $quantity </td>";
echo"	<td> $quantityType</td>";
echo"	<td>$name </td>";
echo"	</tr>";
echo"	<tr>";


$num = $num + 1;
}
}
?>
    </tbody>
  </table>
</div>

<br>
<h2> Directions </h2>
<ul class="list-group">
<li class = "list-group-item"><?php echo $directions; ?> </li>
</ul>


</div>
  </body>
</html>
