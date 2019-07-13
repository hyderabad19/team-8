<!DOCTYPE html>
<html lang="en">
<head>
  <title>School Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script>
      function Validate()
	  {
		  var email=document.getElementById("email");
		  var name=document.getElementById("name");
		  var password=document.getElementById("pwd");
		  var address=document.getElementById("addr");
		  var pincode=document.getElementById("pin");
		  var city=document.getElementById("city");
		  console.log("entered validated");
		  if(email=='' ||name=='' ||password==''||address==''||pincode==''||city=='')
			    alert("Please fill the empty fields");
	  }
  </script>
  </head>
<body>
<?php
$con = mysqli_connect("localhost","root","","school") or die("cannot connect server ");
if($con->connect_error)
   echo "Error in connecting";
if(isset($_POST["register"]))
{
    $name = $_POST['name'];
    $pass = $_POST['pwd'];
    $email = $_POST['email'];
    $addr = $_POST['addr'];
    $pin = $_POST['pin'];
    $city = $_POST['city'];    
    $query = "insert into regschool(NAME,PINCODE,EMAIL,PASSWORD,ADDRESS,CITY) values('$name','$pin','$email','$pass','$addr','$city')";
	if(mysqli_query($con,$query))
        echo "<h3>You have registered</h3>";
    else echo "Failed Registration";
}

?>
<div class="container">
  <h2><center>Register Here!</center></h2>
  <form class="form-horizontal" action="school_register.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="addr">Address:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="addr" placeholder="Enter Address" name="addr">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="pin">Pincode:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="pin" placeholder="Enter Pincode" name="pin">
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="city">City:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="city" placeholder="Enter City" name="city">
      </div>
    </div>
    <div class="form-group">
     <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" name="register" class="btn btn-default" onclick="Validate()">
      </div>
    </div>
  </form>
</div>

</body>
</html>
