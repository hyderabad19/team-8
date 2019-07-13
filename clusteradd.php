
<html>
<form name="admincluster" method="post" action="add_cluster.php">
    <?php
$con=mysqli_connect("localhost","root","","school");
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
$query1 = mysqli_query($con,"SELECT NAME FROM regschool");
echo "<select name='DROP'>";
while ($row = mysqli_fetch_array($query)){
echo "<option value='" . $row['clustername'] ."'>" . $row['clustername'] ."</option>";
}
echo "</select>";
echo "<select name='DROP1'>";
while ($row = mysqli_fetch_array($query1)){
echo "<option value='" . $row['NAME'] ."'>" . $row['NAME'] ."</option>";
}
echo "</select>";
?>
    <input type="submit" name="submit" value="Submit"/><br>
    <br>
</form>
<h3>Add new cluster</h3>
    <form name="form1" action="addingnewcluster.php" method="post">
        <input type="text" name="addnewcluster"/>
        <input type="submit" value="Add new">
    </form>
<br/><br/>
</body>
</html>