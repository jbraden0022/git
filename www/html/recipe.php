<?php
session_start();
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
	  
		$_SESSION["username"] = "";	
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
        echo '<li><a href=#>Logout</a></li>';
		}
		?>
      </ul>
    </div>
  </div>
</nav>


<div class="container-fluid bg-3 text-center"> 

<h3>Lemon Icebox Cake</h3>
<div class="row">
<!-- Extra space needed to center image -->
  <div class="col-sm-4">
    </div>
	<div class="col-sm-4">
<img src="testImage.jpg" class="img-recipe" id = "recipeImage" alt="recipeImage" /> 
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
	<tr>
	<td> 1 </td>
	<td> 9 inch </td>
	<td> Prepared Graham Cracker Crust </td>
	</tr>
	<tr>
	<td> 2 </td>
	<td> 8 Ounce </td>
	<td> Packages Cream Cheese, Softened </td>
	</tr>
	<tr>
	<td> 2 </td>
	<td> </td>
	<td> Lemons, Juiced </td>
	</tr>
	<tr>
	<td> 1 </td>
	<td> Teaspoon </td>
	<td> Lemon Zest </td>
	</tr>

    </tbody>
  </table>
</div>

<br>
<h2> Directions </h2>
<ul class="list-group">
<li class = "list-group-item">1. In a medium mixing bowl, beat cream cheese until fluffy. </li>
<li class = "list-group-item">2. Add condensed milk, lemon juice, and lemon rind. </li>
<li class = "list-group-item">3. Mix until smooth. </li>
<li class = "list-group-item">4. Pour mixture into crust. </li>
<li class = "list-group-item">5. Refrigerate at least 2 hours before serving. </li>
<li class = "list-group-item">6. Garnish with whipped cream and mint leaves if desired. </li>
</ul>


</div>
  </body>
</html>
