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
 
if(isset($_POST["add"]))
{
   $R_name = $_POST['add_resource_name'];
   $S_name = $_SESSION['id'];
   $query = "insert into total_resources(resource_name,school_id,T8to9,T9to10,T10to11,T11to12,T12to1,T1to2,T2to3,T3to4) values('$R_name','$S_name','F','F','F','F','F','F','F','F','F');";
   if(mysqli_query($con,$query))
	   echo '<script type="text/javascript">',
					'alert("Data Inserted Successfully");',
					'</script>';
   else 
	   echo '<script type="text/javascript">',
					'alert("Data Insertion Failed");',
					'</script>';
}
if(isset($_POST["update"]))
{
	$R_name = $_POST['update_resource_name'];
	$id = $_SESSION['id'];
	if($_POST["time_slot_available"] && $_POST["time_slot_block"])
	{
		if($_POST["time_slot_available"] == $_POST["time_slot_block"])
		{
			echo '<script type="text/javascript">',
					'alert("Can\'t have Available and blocked slots same");',
					'</script>';
		}
		else{
		$ts1=$_POST["time_slot_available"];
		 if($ts1=="T8to9")
	  $query = "UPDATE total_resources SET T8to9 = 'T' WHERE school_id = $id;";
   if($ts1=="T9to10")
	   $query = "UPDATE total_resources SET T9to10 = 'T' WHERE school_id = $id;";
   if($ts1=="T10to11")
	   $query = "UPDATE total_resources SET T10to11 = 'T' WHERE school_id = $id;";
	   
   if($ts1=="T11to12")
	   $query = "UPDATE total_resources SET T11to12 = 'T' WHERE school_id = $id;";
	   
   if($ts1=="T12to1")
	   $query = "UPDATE total_resources SET T12to1 = 'T' WHERE school_id = $id;";
	   
   if($ts1=="T1to2")
	   $query = "UPDATE total_resources SET T1to2 = 'T' WHERE school_id = $id;";
	   
   if($ts1=="T2to3")
	   $query = "UPDATE total_resources SET T2to3 = 'T' WHERE school_id = $id;";
	   
   if($ts1=="T3to4")
	  $query = "UPDATE total_resources SET T3to4 = 'T' WHERE school_id = $id;";
   if($ts1=="T4to5")
	   $query = "UPDATE total_resources SET T4to5 = 'T' WHERE school_id = $id;";
   
   	$ts=$_POST["time_slot_block"];
		  if($ts=="T8to9")
	  $query = "UPDATE total_resources SET T8to9 = 'F' WHERE school_id = $id;";
   if($ts=="T9to10")
	   $query = "UPDATE total_resources SET T9to10 = 'F' WHERE school_id = $id;";
   if($ts=="T10to11")
	   $query = "UPDATE total_resources SET T10to11 = 'F' WHERE school_id = $id;";
	   
   if($ts=="T11to12")
	   $query = "UPDATE total_resources SET T11to12 = 'F' WHERE school_id = $id;";
	   
   if($ts=="T12to1")
	   $query = "UPDATE total_resources SET T12to1 = 'F WHERE school_id = $id;";
	   
   if($ts=="T1to2")
	   $query = "UPDATE total_resources SET T1to2 = 'F' WHERE school_id = $id;";
	   
   if($ts=="T2to3")
	   $query = "UPDATE total_resources SET T2to3 = 'F' WHERE school_id = $id;";
	   
   if($ts=="T3to4")
	  $query = "UPDATE total_resources SET T3to4 = 'F' WHERE school_id = $id;";
   if($ts=="T4to5")
	   $query = "UPDATE total_resources SET T4to5 = 'F' WHERE school_id = $id;";
		}
		
	}else if($_POST["time_slot_available"])
	{
		$ts=$_POST["time_slot_available"];
		 if($ts=="T8to9")
	  $query = "UPDATE total_resources SET T8to9 = 'T' WHERE school_id = $id;";
   if($ts=="T9to10")
	   $query = "UPDATE total_resources SET T9to10 = 'T' WHERE school_id = $id;";
   if($ts=="T10to11")
	   $query = "UPDATE total_resources SET T10to11 = 'T' WHERE school_id = $id;";
	   
   if($ts=="T11to12")
	   $query = "UPDATE total_resources SET T11to12 = 'T' WHERE school_id = $id;";
	   
   if($ts=="T12to1")
	   $query = "UPDATE total_resources SET T12to1 = 'T' WHERE school_id = $id;";
	   
   if($ts=="T1to2")
	   $query = "UPDATE total_resources SET T1to2 = 'T' WHERE school_id = $id;";
	   
   if($ts=="T2to3")
	   $query = "UPDATE total_resources SET T2to3 = 'T' WHERE school_id = $id;";
	   
   if($ts=="T3to4")
	  $query = "UPDATE total_resources SET T3to4 = 'T' WHERE school_id = $id;";
   if($ts=="T4to5")
	   $query = "UPDATE total_resources SET T4to5 = 'T' WHERE school_id = $id;";
	
	}
	else if($_POST["time_slot_block"])
	{
		
		$ts=$_POST["time_slot_block"];
		  if($ts=="T8to9")
	  $query = "UPDATE total_resources SET T8to9 = 'F' WHERE school_id = $id;";
   if($ts=="T9to10")
	   $query = "UPDATE total_resources SET T9to10 = 'F' WHERE school_id = $id;";
   if($ts=="T10to11")
	   $query = "UPDATE total_resources SET T10to11 = 'F' WHERE school_id = $id;";
	   
   if($ts=="T11to12")
	   $query = "UPDATE total_resources SET T11to12 = 'F' WHERE school_id = $id;";
	   
   if($ts=="T12to1")
	   $query = "UPDATE total_resources SET T12to1 = 'F WHERE school_id = $id;";
	   
   if($ts=="T1to2")
	   $query = "UPDATE total_resources SET T1to2 = 'F' WHERE school_id = $id;";
	   
   if($ts=="T2to3")
	   $query = "UPDATE total_resources SET T2to3 = 'F' WHERE school_id = $id;";
	   
   if($ts=="T3to4")
	  $query = "UPDATE total_resources SET T3to4 = 'F' WHERE school_id = $id;";
   if($ts=="T4to5")
	   $query = "UPDATE total_resources SET T4to5 = 'F' WHERE school_id = $id;";
	}
  if($query && mysqli_query($con,$query))
	 echo '<script type="text/javascript">',
					'alert("Updated Successfully");',
					'</script>';
   else 
	   echo  '<script type="text/javascript">',
					'alert("Updation Failed");',
					'</script>';
	
}
if(isset($_POST["delete"]))
{
   $R_name = $_POST['delete_resource_name'];
   $query = "DELETE FROM total_resources WHERE resource_name='$R_name';";
	if($query && mysqli_query($con,$query))
	 echo '<script type="text/javascript">',
					'alert("Deleted Successfully");',
					'</script>';
   else 
	   echo  '<script type="text/javascript">',
					'alert("Deletion Failed");',
					'</script>';
   
}
?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Welcome, school name</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="#">Profile<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Resource
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="bookslot.html">Book a slot</a>
                        <a class="dropdown-item" href="school_resource_update.php">Update resources</a>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
<form action="school_resource_update.php" name="operations1" method="POST">
    <div class="container">
        <div class="row" style="margin-top: 25px;">
            <div class="col-sm-12 col-md-12">
                <div class="card">
                    <h5 class="card-header">Add resource</h5>
                    <div class="card-body">
                        <form>

                            <div class="form-group col-md-12 col-sm-12">
                                <label  for="inputEmail4">Resource Name</label>
                                <input name="add_resource_name" class="form-control" id="inputEmail4" placeholder="Resource Name">
                            </div>

  
                            <input type="submit" value="Add resource" name="add" class="btn btn-primary"/>
						
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </form>  
<form action="school_resource_update.php" name="operations2" method="POST">
	<div class="container">
        <div class="row" style="margin-top: 25px;">
            <div class="col-sm-12 col-md-12">
                <div class="card">
                    <h5 class="card-header">Update resource</h5>
                    <div class="card-body">
                        <form>

                            <div class="form-group col-md-12 col-sm-12">
                                <label name="resource_name" for="inputEmail4">Resource Name</label>
                                <input name="update_resource_name"  class="form-control" placeholder="Resource Name">
                            </div>
							 <div class="form-group col-md-12 col-sm-124">
                                <label for="inputState">Set the slot to make available</label>
                                <select id="inputState" class="form-control" name="time_slot_available">
									<option value="">--Select--</option>
                                    <option value="T8to9">8-9</option>
                                    <option value="T9to10">9-10</option>
                                    <option value="T10to11">10-11</option>
                                    <option value="T11to12">11-12</option>
                                    <option value="T12to1">12-1</option>
                                    <option value="T1to2">1-2</option>
                                    <option value="T2to3">2-3</option>
                                    <option value="T3to4">3-4</option>
                                    <option value="T4to5">4-5</option>
                                </select>
                            </div>
							 <div class="form-group col-md-12 col-sm-124">
                                <label for="inputState">Set the slot to block</label>
                                <select id="inputState" class="form-control" name="time_slot_block">
								    <option value="">--Select--</option>
                                    <option value="T8to9">8-9</option>
                                    <option value="T9to10">9-10</option>
                                    <option value="T10to11">10-11</option>
                                    <option value="T11to12">11-12</option>
                                    <option value="T12to1">12-1</option>
                                    <option value="T1to2">1-2</option>
                                    <option value="T2to3">2-3</option>
                                    <option value="T3to4">3-4</option>
                                    <option value="T4to5">4-5</option>
                                </select>
                            </div>
							
                            <input type="submit" value="Update resource" name="update" class="btn btn-primary"/>
						
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
	</form>
	<form action="school_resource_update.php" name="operations3" method="POST">
	<div class="container">
        <div class="row" style="margin-top: 25px;">
            <div class="col-sm-12 col-md-12">
                <div class="card">
                    <h5 class="card-header">Delete resource</h5>
                    <div class="card-body">
                        <form>

                            <div class="form-group col-md-12 col-sm-12">
                                <label for="inputEmail4">Resource Name</label>
								<select id="inputState" class="form-control" name="delete_resource_name">
								<option value="">--Select--</option>
                                <?php
								 $con = mysqli_connect("localhost","root","","school") or die("cannot connect server");
								 if($con->connect_error)
								 {
									echo "Error in connecting";
								 }
								 $query ="select resource_name from total_resources;";
								 echo "$query";
								 $query = mysqli_query($con,$query);
								 $query = mysqli_fetch_row($query);								   
								 foreach($query as $q)
								 {
									 echo "<option value=\"$q\">$q</option>";
								 }
							   ?>
							   </select>
                            </div>
			
                            <input type="submit" value="Delete resource" name="delete" class="btn btn-primary"/>
							
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form>
	
	
	
	
	
	
    </div>
    </div>


</body>

</html>