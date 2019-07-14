<html>

<head>
    <title>

    </title>
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
</head>
<body>
<?php
session_start();
$con = mysqli_connect("localhost","root","","school") or die("cannot connect server ");
if($con->connect_error)
   echo "Error in connecting";

if(isset($_REQUEST['rn'])&&isset($_REQUEST['id'])&&isset($_REQUEST['slot']))
{
	if($_POST['bday']!="")
	{
	$query = "update total_resources set ".$_REQUEST['slot']."='T' where resource_name=\"".$_REQUEST['rn']."\" 
					and school_id=".$_REQUEST['id'].";";
	
    if(mysqli_query($con,$query))
	{}
	else
		echo '<script type="text/javascript">',
					'alert("Booking Failed");',
					'</script>';
	
	$query = "update total_resources set slot_date=".$_POST['bday']." where resource_name=\"".$_REQUEST['rn']."\" 
					and school_id=".$_REQUEST['id'].";";
	}
	 
    
	
	
}
	

?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Welcome</a>
				
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                      <a class="nav-link" href="#">Profile<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Resource
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="bookings.php">Book a slot</a>
                        <a class="dropdown-item" href="school_resource.php">Update resources</a>
                      </div>
                    </li>
                    <li class="nav-item ">
                            <a class="nav-link" href="title.html">Logout</a>
                    </li>
                  </ul>
                </div>
              </nav>
               
<div class="container">

    <div class="row" style="margin-top: 25px;">
      <div class="col-sm-12 col-md-12">
        <div class="card">
          <h5 class="card-header">Select a resource</h5>
          <div class="card-body">

            <div class="container">

              <table class="table">
                <thead>
                  <tr>
                    <th>Resource</th>
                    <th>School</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>book</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $con = mysqli_connect("localhost","root","","school") or die("cannot connect server");
                  if($con->connect_error)
                  {
                   echo "Error in connecting";
                  }
				  $query = "select r.resource_name,s.id,s.NAME,r.slot_date,r.T8to9,r.T9to10,r.T10to11,r.T11to12,r.T12to1,r.T1to2,r.T2to3,r.T3to4,r.T4to5 from total_resources r join regschool s where s.id = r.school_id";
                  $res = mysqli_query($con,$query);
                  
                  if ($res->num_rows > 0) {
				// output data of each row
				
				   while($row = $res->fetch_assoc()) {
					   
					if($row['T8to9']=='F')
					{
				    echo "<form method=\"POST\" action=\"bookings.php\">";
					echo "<tr>";					
					echo "<td>".$row['resource_name']."</td>";
					echo "<td>".$row['NAME']."</td>";
					echo "<td><input type=\"date\" name=\"bday\"></td>";
					echo "<td>8am-9am</td>";
					echo "<input type='hidden' value=\"".$row['resource_name']."\" name='rn'/>";
					echo "<input type='hidden' value=\"".$row['id']."\" name='id'/>";
					echo "<input type='hidden' value=\"T8to9\" name='slot'/>";
					echo "<td><input value='book' type='submit'></td>";
					
					echo "</tr>" ;
					echo "</form>";
					}
					 
					if($row['T9to10']=='F')
					{
					echo "<tr>";
					echo "<form method=\"POST\" action=\"bookings.php\">";
					echo "<td>".$row['resource_name']."</td>";
					echo "<td>".$row['NAME']."</td>";
					echo "<td><input type=\"date\" name=\"bday\"></td>";
					echo "<td>9am-10am</td>";
					echo "<input type='hidden' value=\"".$row['resource_name']."\" name='rn'/>";
					echo "<input type='hidden' value=\"".$row['id']."\" name='id'/>";
					echo "<input type='hidden' value=\"T9to10\" name='slot'/>";
					echo "<td><input value='book' type='submit'></td>";
					echo "</form>";
					echo "</tr>" ;				
					}
					   
					if($row['T10to11']=='F')
					{
					echo "<tr>";
					echo "<form method=\"POST\" action=\"bookings.php\">";
					echo "<td>".$row['resource_name']."</td>";
					echo "<td>".$row['NAME']."</td>";
					echo "<td><input type=\"date\" name=\"bday\"></td>";
					echo "<td>10am-11am</td>";
					echo "<input type='hidden' value=\"".$row['resource_name']."\" name='rn'/>";
					echo "<input type='hidden' value=\"".$row['id']."\" name='id'/>";
					echo "<input type='hidden' value=\"T10to11\" name='slot'/>";
					echo "<td><input value='book' type='submit'></td>";
					echo "</form>";
					echo "</tr>" ;
					}
					   
					if($row['T11to12']=='F')
					{
					echo "<tr>";
					echo "<form method=\"POST\" action=\"bookings.php\">";
					echo "<td>".$row['resource_name']."</td>";
					echo "<td>".$row['NAME']."</td>";
					echo "<td><input type=\"date\" name=\"bday\"></td>";
					echo "<td>11am-12pm</td>";
					echo "<input type='hidden' value=\"".$row['resource_name']."\" name='rn'/>";
					echo "<input type='hidden' value=\"".$row['id']."\" name='id'/>";
					echo "<input type='hidden' value=\"T11to12\" name='slot'/>";
					echo "<td><input value='book' type='submit'></td>";
					echo "</form>";
					echo "</tr>" ;
					}
					   
					if($row['T12to1']=='F')
					{
					echo "<tr>";
					echo "<form method=\"POST\" action=\"bookings.php\">";
					echo "<td>".$row['resource_name']."</td>";
					echo "<td>".$row['NAME']."</td>";
					echo "<td><input type=\"date\" name=\"bday\"></td>";
					echo "<td>12pm-1pm</td>";
					echo "<input type='hidden' value=\"".$row['resource_name']."\" name='rn'/>";
					echo "<input type='hidden' value=\"".$row['id']."\" name='id'/>";
					echo "<input type='hidden' value=\"T12to1\" name='slot'/>";
					echo "<td><input value='book' type='submit'></td>";
					echo "</form>";
					echo "</tr>" ;
					}
					   
					if($row['T1to2']=='F')
					{
					echo "<tr>";
					echo "<form method=\"POST\" action=\"bookings.php\">";
					echo "<td>".$row['resource_name']."</td>";
					echo "<td>".$row['NAME']."</td>";
					echo "<td><input type=\"date\" name=\"bday\"></td>";
					echo "<td>1pm-2pm</td>";
					echo "<input type='hidden' value=\"".$row['resource_name']."\" name='rn'/>";
					echo "<input type='hidden' value=\"".$row['id']."\" name='id'/>";
					echo "<input type='hidden' value=\"T1to2\" name='slot'/>";
					echo "<td><input value='book' type='submit'></td>";
					echo "</form>";
					echo "</tr>" ;
					}
					if($row['T2to3']=='F')
					{
					echo "<tr>";
					echo "<form method=\"POST\" action=\"bookings.php\">";
					echo "<td>".$row['resource_name']."</td>";
					echo "<td>".$row['NAME']."</td>";
					echo "<td><input type=\"date\" name=\"bday\"></td>";
					echo "<td>2pm-3pm</td>";
					echo "<input type='hidden' value=\"".$row['resource_name']."\" name='rn'/>";
					echo "<input type='hidden' value=\"".$row['id']."\" name='id'/>";
					echo "<input type='hidden' value=\"T2to3\" name='slot'/>";
					echo "<td><input value='book' type='submit'></td>";
					echo "</form>";
					echo "</tr>" ;
					}
					if($row['T3to4']=='F')
					{
					echo "<tr>";
					echo "<form method=\"POST\" action=\"bookings.php\">";
					echo "<td>".$row['resource_name']."</td>";
					echo "<td>".$row['NAME']."</td>";
					echo "<td><input type=\"date\" name=\"bday\"></td>";
					echo "<td>3pm-4pm</td>";
					echo "<input type='hidden' value=\"".$row['resource_name']."\" name='rn'/>";
					echo "<input type='hidden' value=\"".$row['id']."\" name='id'/>";
					echo "<input type='hidden' value=\"T3to4\" name='slot'/>";
					echo "<td><input value='book' type='submit'></td>";
					echo "</form>";
					echo "</tr>" ;
					}
					if($row['T4to5']=='F')
					{
					echo "<tr>";
					echo "<form method=\"POST\" action=\"bookings.php\">";
					echo "<td>".$row['resource_name']."</td>";
					echo "<td>".$row['NAME']."</td>";
					echo "<td><input type=\"date\" name=\"bday\"></td>";
					echo "<td>4pm-5pm</td>";
					echo "<input type='hidden' value=\"".$row['resource_name']."\" name='rn'/>";
					echo "<input type='hidden' value=\"".$row['id']."\" name='id'/>";
					echo "<input type='hidden' value=\"T4to5\" name='slot'/>";
					echo "<td><input value='book' type='submit'></td>";
					echo "</form>";
					echo "</tr>" ;
					}
				   }
				}				   
                  ?>
                              
                </tbody>
              </table>
            </div>


          </div>
        </div>
      </div>
    </div>

  </div>


</body>
</body>

</html>