function login(){


var username = document.getElementById('username').value;

       
var password = document.getElementById('password').value;
              

     jQuery.ajax({
        url:"authenticate.php", //the page containing php script
        type: "POST", //request type
        data: {username:username, password:password},//sets variables names in post
        dataType: "text",
	 success:function(result){ //prints out echo from php file
          document.write(result);
        },
	error: function(xhr, status, error) {

	  console.log(xhr);
		 if (xhr == 'undefined' || xhr == undefined) {
                alert('undefined');
            } else {
                alert('object is there');
            }
            alert(status);
            alert(error);

		}

      });



}

function register(){


var username = document.getElementById('reg_username').value;
var password = document.getElementById('reg_password').value;
var confirm_pass = document.getElementById('reg_password_confirm').value;
var email = document.getElementById('reg_email').value;
//document.write(username + password + confirm_pass + email);

     jQuery.ajax({
        url:"newuser.php", //the page containing php script
        type: "POST", //request type
        data: {username:username, password:password, confirm_pass:confirm_pass, email:email},//sets variables names in post
        dataType: "text",
         success:function(result){ //prints out echo from php file
          document.write(result);
        },
        error: function(xhr, status, error) {

          console.log(xhr);
                 if (xhr == 'undefined' || xhr == undefined) {
                alert('undefined');
            } else {
                alert('object is there');
            }
            alert(status);
            alert(error);

                }

      });

}


function addIngredient(){


var quantity = document.getElementById('quantity').value;

var quantityType = document.getElementById('quantityType').value;

var ingredientName = document.getElementById('ingredientName').value;

//document.write(quantity + " " + quantityType + " " + ingredientName );


     jQuery.ajax({
        url:"addIngredient.php", //the page containing php script
        type: "POST", //request type
        data: {quantity:quantity, quantityType:quantityType, ingredientName:ingredientName},//sets variables names in post
        dataType: "text",
         success:function(result){ //prints out echo from php file
	 if(result !== "."){
		// alert(result);

			

			if (window.confirm(result))
			{
   			 
   			 window.location = '/pantry.php';
			}
      		 }
	 },
        error: function(xhr, status, error) {

          console.log(xhr);
                 if (xhr == 'undefined' || xhr == undefined) {
                alert('undefined');
            } else {
                alert('object is there');
            }
            alert(status);
            alert(error);

                }

      }); 

//document.location.href = "https://refrigeratortorecipe.me";

}

function removeIngredient(x){


var ingredientName = document.getElementById('delete').value;
var ingredientName = x;

     jQuery.ajax({
        url:"removeIngredient.php", //the page containing php script
        type: "POST", //request type
        data: {ingredientName:ingredientName},//sets variables names in post
        dataType: "text",
         success:function(result){ //prints out echo from php file
         if(result !== "."){
                // alert(result);



                        if (window.confirm(result))
                        {

                         window.location = '/pantry.php';
                        }

               }
         },
        error: function(xhr, status, error) {

          console.log(xhr);
                 if (xhr == 'undefined' || xhr == undefined) {
                alert('undefined');
            } else {
                alert('object is there');
            }
            alert(status);
            alert(error);

                }

      });

//document.location.href = "https://refrigeratortorecipe.me";

}


function displayRecipes(){




     jQuery.ajax({
        url:"displayRecipes.php", //the page containing php script
        type: "POST", //request type
        data: {},//sets variables names in post
        dataType: "text",
         success:function(result){ //prints out echo from php file
     //    document.write(result);
        },
        error: function(xhr, status, error) {

          console.log(xhr);
                 if (xhr == 'undefined' || xhr == undefined) {
                alert('undefined');
            } else {
                alert('object is there');
            }
            alert(status);
            alert(error);

                }

      });



window.location = '/searchResults.php';
}


function logout(){


     jQuery.ajax({
        url:"logout.php", //the page containing php script
        type: "POST", //request type
        data: {},//sets variables names in post
        dataType: "text",
         success:function(result){ //prints out echo from php file
          document.write(result);
	
        },
        error: function(xhr, status, error) {

          console.log(xhr);
                 if (xhr == 'undefined' || xhr == undefined) {
                alert('undefined');
            } else {
                alert('object is there');
            }
            alert(status);
            alert(error);

                }

      });

}



function test(){
document.write("That test function worked");
}
