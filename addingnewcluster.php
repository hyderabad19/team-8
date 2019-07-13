<?php
$con=mysqli_connect("localhost","root","","school");
$value=$_POST['addnewcluster'];
$query = mysqli_query($con,"insert into cluster(clustername) values('$value')");
 echo '<script type="text/javascript">',
					'alert("Cluster Inserteed Successfully");',
					'</script>';
header("location:clusteradd.php");
?>