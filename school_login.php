<!DOCTYPE html>
<html lang="en">
<head>
  <title>School Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script>
     function validateForm() {
		console.log("Entered Validation\n");
		var x = document.forms["login_form"]["email"].value;
		var y = document.forms["login_form"]["pwd"].value;
		if (x.length==0 || y.length==0) {
		alert("Fields must be filled out");
    return false;
  }
}
  </script>
</head>
<body>
<?php
$con = mysqli_connect("localhost","root","","school") or die("cannot connect server ");
if($con->connect_error)
   echo "Error in connecting";
if(isset($_POST["login"]))
{
    $pass = $_POST['pwd'];
    $email = $_POST['email'];
    //$query = "insert into regschool(NAME,PINCODE,EMAIL,PASSWORD,ADDRESS,CITY) values('$name','$pin','$email','$pass','$addr','$city')";
    $query = "select id from regschool where EMAIL='$email' and PASSWORD='$pass'";
	$res=mysqli_query($con,$query);
	$res1 = mysqli_num_rows($res);
	//Comments
	if($res1>0)
		echo "Successfully Logged In<br/>";
	else echo "Authentication Failed<br/>";
	$res1 = mysqli_fetch_row($res);
	session_start();
	$_SESSION['id']=$res1[0];
}

?>
<div class="container">
  <h2><center>Login Here!</center></h2>
  <form name="login_form" class="form-horizontal" action="school_resource_update.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>
    
    <div class="form-group">
     <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" name="login" class="btn btn-default" onclick="validateForm()">
      </div>
    </div>
  </form>
</div>

</body>
</html>
