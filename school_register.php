<!DOCTYPE html>
<html lang="en">
<head>
  <title>School Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
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


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Welcome </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

				<li class="nav-item ">
                    <a class="nav-link" href="school_register.php">Register</a>
                </li>
				<li class="nav-item ">
                    <a class="nav-link" href="school_login.php">Login</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="title.html">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
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
    $query = "insert into regschool(NAME,PINCODE,EMAIL,PASSWORD,ADDRESS,CITY) values('$name',$pin,'$email','$pass','$addr','$city');";
	
	if(mysqli_query($con,$query))
	{
		echo '<script type="text/javascript">',
					'alert("Registered Successfully");',
					'</script>';
	    header("location:school_login.php");
	}
   else 
	   echo  '<script type="text/javascript">',
					'alert("Registration Failed");',
					'</script>';
}

?>
<div class="container">
  <h2><center>Register Here!</center></h2>
  <form class="form-horizontal" action="school_login.php" method="POST">
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
