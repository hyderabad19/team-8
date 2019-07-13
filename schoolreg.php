<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration for School</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
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
    if($email=='')
    {
        echo "<script>alert('please enter the email')</script>";
    }
    if($name=='')
    {
        echo "<script>alert('please enter the name')</script>";
    }
    if($pass=='')
    {
        echo "<script>alert('please enter the password')</script>";
    }
    if($addr=='')
    {
        echo "<script>alert('please enter the address')</script>";
    }
    if($pin=='')
    {
        echo "<script>alert('please enter the pin code')</script>";
    }
    if($city=='')
    {
        echo "<script>alert('please enter the city')</script>";
    }
    echo $name;
    $query = "insert into regschool(NAME,PINCODE,EMAIL,PASSWORD,ADDRESS,CITY) values('$name','$pin','$email','$pass','$addr','$city')";
    if(mysqli_query($con,$query))
        echo "<h3>You have registered</h3>";
    
}

?>
<div class="container">
  <h2><center>Register Here!</center></h2>
  <form class="form-horizontal" action="schoolreg.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="addr">Address:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="addr" placeholder="Enter Address" name="addr" required>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="pin">Pincode:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="pin" placeholder="Enter Pincode" name="pin" required>
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="city">City:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="city" placeholder="Enter City" name="city" required>
      </div>
    </div>
    <div class="form-group">
     <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" name="register" class="btn btn-default" >
      </div>
    </div>
  </form>
</div>

</body>
</html>



