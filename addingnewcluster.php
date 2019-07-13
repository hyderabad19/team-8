

 <?php
$con=mysqli_connect("localhost","root","","loop");
$value=$_POST['addnewcluster'];
$query = mysqli_query($con,"insert into cluster(clustername) values('$value')");
?>