<?php

session_start();


$db_host = 'localhost';
$db_username = 'root';
$db_pass = 'pass';
$db_name = 'rtr';
$db = new mysqli($db_host, $db_username, $db_pass, $db_name) or die("Can't connect to MySQL Server");

//$userQuantity = $_SESSION["?"]
//$userQuantityTyp = $_SESSION["?"]
//$useringredientID = $_SESSION["?"]

$matches = []; 

$userID = 99; //FOR TESTING -- USE SESSION VARIABLE ID IN THE FUTURE

$userID = $_SESSION["username"];


//$result = $db->query("SELECT quantity FROM userIngredients where userID = " . $userID . "ORDER BY ingredientID");    
//$userQuantity = $result->fetch_all(MYSQLI_ASSOC);

//$result = $db->query("SELECT quantityType FROM userIngredients where userID = " . $userID . "ORDER BY ingredientID");    
//$userQuantityType = $result->fetch_all(MYSQLI_ASSOC);

$result = mysqli_query($db,"SELECT ingredientID FROM userIngredients where userID = " . $userID. " ORDER BY ingredientID");    
//$userIngredientID = $result->fetch_all(MYSQLI_ASSOC);
//$userIngredientID = mysqli_fetch_all($result,MYSQLI_ASSOC);
$res = mysqli_num_rows($result);

$num = 0;

while($num < $res)
{
          $row = mysqli_fetch_assoc($result);
//      $quantity[] = $row['quantity'];
//      $quantityType[] = $row['quantityType'];
      $userIngredientID[]  = $row['ingredientID'];
//echo "Quantities are: " . $quantity[$num]. "\n";


//echo $row['ingredientID'];

//echo "Quantity Types are: " . $quantityType[$num]. "\n";
//echo "Ingredients are: " . $userIngredientID[$num]. "\n";



          $num = $num + 1;

}








$sql = "SELECT * FROM `recipe`";


$result = mysqli_query($db,"SELECT recipeID FROM recipe ORDER BY recipeID");    

$res = mysqli_num_rows($result);

$num = 0;



while($num < $res)
{
          $row = mysqli_fetch_assoc($result);

	  
       
	$recipeID = $row['recipeID'];
	
//	echo $recipeID;

	
        $match = true;

//      $result = $db->query("SELECT quantity FROM recipeIngredients where recipeID = " . $recipeID . "ORDER BY ingredientID");
//      $recipeQuantity = $result->fetch_all(MYSQLI_ASSOC);

//      $result = $db->query("SELECT quantityType FROM recipeIngredients where recipeID = " . $recipeID . "ORDER BY ingredientID");
//      $recipeQuantityType = $result->fetch_all(MYSQLI_ASSOC);

        $result2 = mysqli_query($db,"SELECT ingredientID FROM recipeIngredients where recipeID = " . $recipeID . " ORDER BY ingredientID");
		
		$res2 = mysqli_num_rows($result2);
		
		$num2 = 0;


		unset($recipeIngredientID);

		while($num2 < $res2)
		{
        $row = mysqli_fetch_assoc($result2);
		$recipeIngredientID[] = $row['ingredientID'];
		

          $num2 = $num2 + 1;


		  
		}	  
	

//	echo "user: " . count($userIngredientID) . "recipe: " . count($recipeIngredientID); 
	
        if (count($userIngredientID) > count($recipeIngredientID)){






                $u=0;
                $r=0;

		while( $u < count($userIngredientID) and $r < count($recipeIngredientID)){
		
                        if($userIngredientID[$u] ==  $recipeIngredientID[$r]){
		//		echo "| USER: " .  $userIngredientID[$u] . " RECIPE:  " .  $recipeIngredientID[$r] . " |" ;
                                $u++;
                                $r++;

                        }

                        elseif($userIngredientID[$u] < $recipeIngredientID[$r]){
                             
			//	echo "no match1";
				  $u++;

				 if ($u == count($userIngredientID)){
                                        $match = false;
                                }


                        }

                        else{
			//	echo "no match2";
                                $match = false;
                                break;

                        }
			
                }


        }
        else{
	//	echo "more recipe Ingredients";
                $match = false;

        }


        if($match){

             //   echo "Recipe you can make: " .  $recipeID . "\n";
			 $recipes[] = recipeID;

	//	 array_push($_SESSION['results'], $recipeID;

        }





		




          $num = $num + 1;

}

/*

$ids = $result->fetch_all(MYSQLI_ASSOC);

foreach ($ids as $recipeID){
	
	$match = true;

//	$result = $db->query("SELECT quantity FROM recipeIngredients where recipeID = " . $recipeID . "ORDER BY ingredientID");    
//	$recipeQuantity = $result->fetch_all(MYSQLI_ASSOC);

//	$result = $db->query("SELECT quantityType FROM recipeIngredients where recipeID = " . $recipeID . "ORDER BY ingredientID");    
//	$recipeQuantityType = $result->fetch_all(MYSQLI_ASSOC);

	$result = $db->query("SELECT ingredientID FROM recipeIngredients where recipeID = " . $recipeID . " ORDER BY ingredientID");    
	$recipeIngredientID = $result->fetch_all(MYSQLI_ASSOC);
	
	if (count($useringredientID) > count($recipeingredientID)){
	
		$u=0;
		$r=0;
		
		while( $u < count($useringredientID)-1 && $r < count($recipeingredientID)-1{

			if($useringredientID[$u] ==  $recipeingredientID[$r]){
			
				$u++;
				$r++;
			
			}
		
			elseif($useringredientID[$u] < $recipeingredientID[$r]){
				u++;
			}
		
			else{
			
				$match = false;
				break;
			
			}
		
		}		
		
			
	}
	else{
		$match = false;
		
	}
	
	
	if($match){
		echo $recipeID;
	}
	
	
}

*/


 $_SESSION["results"] = $recipes;



header('Location: https://refrigeratortorecipe.me/searchResults.php');
$db->close();
?>
