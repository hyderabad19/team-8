<?php
$selectcluster=$_POST['DROP'];
$select1=$_POST['DROP1'];
$con=mysqli_connect("localhost","root","","loop");
$query = mysqli_query($con,"INSERT into school_cluster values('$selectcluster','$select1')");
?>

