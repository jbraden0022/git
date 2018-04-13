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

   <div class="pagination-centered">
  <!-- Sets title of page -->
  <h3>Refrigerator To Recipe</h3>
  <div class="row">
  
   </div>
    <!-- Extra space needed to center image -->
  <div class="col-sm-4">
    </div>
</div>

<div class="container">
    <div class="row">    
        <div class="col-xs-8 col-xs-offset-2">
            <div class="input-group">
                <input type="text" class="form-control" name="x" placeholder="Search term...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>
    </div>
</div>

<br>
<div class="container">
<div class = "center">
<?php

$_SESSION["results"] = array("Slow Cooker Pulled Pork", "John's Famous Lasagna", "Chocolate Waffles");	
$results = $_SESSION["results"];
$i= 0;
foreach ($results as $result) {
	echo "<div class='row'> ";
	echo "<div class='col-xs-8 col-xs-offset-3'>";
    echo "<div class='media'>";
    echo "<div class='media-left'>";
	echo "<img src='testImage.jpg' class='media-object' id = 'test' alt='test image'/>";
	echo "</div>";
    echo "<div class='media-body'>";
	echo "<h4 class='media-heading'></h4>";
	echo "<br>";
	echo "<div class='text-left'>";
    echo "<h4><a class='results' href='#'>$result</a><h4>";
	echo "<p><span class='glyphicon glyphicon-menu-right'></span> <a class='moreResults' data-toggle='collapse' href='#more".$i."'>See more recipes like this</a><p>";
	//To display multiple similar recipes create a for each loop
	//Still not sure how to make this appear and disappear on click
	echo "<div class='panel-collapse collapse' id = 'more".$i."'>";
	$i++;
    echo "<div class='media'>";
    echo "<div class='media-left'>";
	echo "<img src='testImage.jpg' class='media-object' id = 'test' alt='test image'/>";
	echo "</div>";
	echo "<h4 class='media-heading'></h4>";
	echo "<br>";
	echo "<div class='text-left'>";
    echo "<h4><a class='results' href='#'>$result</a><h4>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "<br>";

}

?>
</div>
</div>
  </body>
</html>

