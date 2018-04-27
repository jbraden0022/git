<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Refrigerator To Recipe</title>
<script src="functions.js"></script>
 
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
	  
		$username  = "";	
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

   <div class=class="pagination-centered">
  <!-- Sets title of page -->
  <h3>Refrigerator To Recipe</h3>
  <div class="row">
  
   </div>
    <!-- Extra space needed to center image -->
  <div class="col-sm-4">
    </div>
</div>
</div>

<div class="center">
<!-- I cannot figure out how to remove the spaces between columns -->
  <div class="container ">

    <div class="row no-gutter">
      <div class="col-md-2 col-md-offset-1">
	  
        <input class="form-control" name="quantity" id="quantity" type="text" placeholder="Quantity" />
		
      </div>
	  
	  	<div class="col-md-1 col-md-offset-1">
	  
        <div class="dropdown">
				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Measurement
                        <span class="caret"></span></button>

			   <select class="dropdown-menu" id="quantityType">
                                <option value=cup>Cup</option>
				<option value=gallon>Gallon</option>
                                <option value=Ounce>Ounce</option>
                                <option value=pint>Pint</option>
                                <option value=pound>Pound</option>
                                <option value=quart></option>
                                <option value=tablespoon>Tablespoon</option>
                                <option value=teaspoon>Teaspoon</option>
                        </select>
		</div>
		
      </div>
	  
      <div class="col-md-2 col-md-offset-1">

        <input type="text" id="ingredientName" class="form-control" name="ingredient" placeholder="Ingredient" >
		
	  </div>

      <div class="col-md-1 col-md-offset-1">
	  
        <button class="btn btn-block" type="button" onclick='addIngredient()'>Add</button>
		
      </div>

  </div>
  </div>
  
  <br>
  
  <div class="container">
  <h2>My Ingredients</h2>          
  <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>Quantity</th>
        <th>Type</th>
        <th>Ingredient</th>
		<th>Update</th>
		<th>Delete</th>
      </tr>
    </thead>
    <tbody>
	
	<!-- Will need to replace this with php that gets results -->
	<!-- This data is basically just a placeholder to see how the table looks at the moment -->
	<!-- For the update I am not sure if we should make all fields updatable or take them to a page to update -->
	<!-- Also not sure if we should just have update button at bottom for all, or button for each -->
	<tr>
	<td> 2 </td>
	<td> Cup </td>
	<td> Sugar </td>
	<td><button class='btn btn-block' type='button'>Update</button></td>
	<td><button class='btn btn-block' type='button'>Delete</button></td>
	</tr>
	<tr>
	<td> 1/2 </td>
	<td> Teaspoon </td>
	<td> Vanilla Extract </td>
	<td><button class='btn btn-block' type='button'>Update</button></td>
	<td><button class='btn btn-block' type='button'>Delete</button></td>
	</tr>

    </tbody>
  </table>
</div>

<br>

<!-- Figured we could try to implement a search feature on ingredients to display table of matching ingredients -->
<div class="container ">

    <div class="row no-gutter">
      <div class="col-md-2 col-md-offset-4">
	  
        <input class="form-control" name="quantity" type="text" placeholder="Search Ingredients" />
		
      </div>
      <div class="col-md-1 col-md-offset-0">
	  
        <button class="btn btn-block" type="button">Search</button>
		
      </div>

  </div>
  </div>
  
</div>
  
  </body>
</html>
