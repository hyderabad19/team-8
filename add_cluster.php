<?php
$selectcluster=$_POST['DROP'];
$select1=$_POST['DROP1'];
$con=mysqli_connect("localhost","root","","school");
$query = mysqli_query($con,"INSERT into school_cluster values('$selectcluster','$select1')");
echo '<script type="text/javascript">',
					'alert("Cluster with School Inserted Successfully");',
					'</script>';
header("location:clusteradd.php");
?>

