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

  <!-- Sets title of page -->
  <h3>Refrigerator To Recipe</h3>
  <div class="row">
  
  
  <!-- Extra space needed to center image -->
  <div class="col-sm-4">
    </div>
	
	<!-- Sets image and calls JS functions to change image on mouse hover -->
    <div class="col-sm-4">
		<a href = "pantry.php"> <img src="ClosedFridge.jpg" class="img-responsive" id = "fridge" alt="ClosedFridge" onmouseover="hover(this);" onmouseout="unhover(this);" /> </a>
		<?php
		if($username == "")
			echo "<p> Start Pantry <p>";
		else
			echo "<p> Go To My Pantry <p>";
	   ?>
    </div>
  </div>
</div>

<script>

//Function that changes closed fridge image to open fridge image on mouse hover
function hover(element) {
    element.setAttribute('src', 'OpenFridge.jpg');
	var yourImg = document.getElementById('fridge');
    yourImg.style.width = '100%'
}

//Function that changes open fridge image to closed fridge image when mouse is not hovering
function unhover(element) {
    element.setAttribute('src', 'ClosedFridge.jpg');
		var yourImg = document.getElementById('fridge');
		yourImg.style.width = '55%';
}
</script>


</body>
</html>