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


function test(){
document.write("This test function worked");
}
