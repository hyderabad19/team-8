
<html>
<form name="admincluster" method="post" action="add_cluster.php">
    <?php
$con=mysqli_connect("localhost","root","","loop");
if(mysqli_errno($con))
{
    echo "Can't Connect to mySQL:".mysqli_connect_error();
}
else
{
    echo "select cluster";
}
echo "<br>";
$query = mysqli_query($con,"SELECT clustername FROM cluster");
$query1 = mysqli_query($con,"SELECT school_name FROM school");
echo "<select name='DROP'>";
while ($row = mysqli_fetch_array($query)){
echo "<option value='" . $row['clustername'] ."'>" . $row['clustername'] ."</option>";
}
echo "</select>";
echo "<select name='DROP1'>";
while ($row = mysqli_fetch_array($query1)){
echo "<option value='" . $row['school_name'] ."'>" . $row['school_name'] ."</option>";
}
echo "</select>";
?>
    <input type="submit" name="submit" value="Submit"/><br>
    <br>
   <a href="addnewcluster.php">ADD NEW CLUSTER</a>
</form>
<br/><br/>
</body>
</html>