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
 
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Welcome, school name</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Resource
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="bookslot.html">Book a slot</a>
            <a class="dropdown-item" href="updateresources.html">Update resources</a>
          </div>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#">Logout</a>
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
                  $con = mysqli_connect("localhost","root","","jpmc") or die("cannot connect server");
                  if($con->connect_error)
                  {
                   echo "Error in connecting";
                  }
                  
                  $query = "select r.resource_name,s.NAME,r.slot_date,r.T8to10,r.T10to12,r.T2to4 from total_resources r innerjoin school s where s.id = r.school_id";
                  $res = mysqli_query($con,$query);
                  $rows = mysqli_fetch_row($res);
                  echo $res;
                  echo "<tr>";
                   foreach($rows as $r)
                   {
                        echo "<td>$r</td>";
                   } 
                   echo "<input name='book' type='submit' value='book'>";
                   echo "</tr>" ;    
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

</html>