<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <title>My Chart.js Chart</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ">
              <li class="navbar-nav navbar-right ">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </nav>


  <div class="container" style="margin-top:10px;">

  <div class="row" style="margin-top: 25px;">
            <div class="col-sm-12 col-md-12">
                <div class="card">
                    <h5 class="card-header"> Monthly usage of resources</h5>
                    <div class="card-body">
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $dbname = "jpmc";
                    $con  = mysqli_connect($servername, $username, null, $dbname);
                    $query = mysqli_query($con,"select clustername from school_cluster");
                    echo "<select name='dropdown' id="id_cluster">";
                    while($row=mysqli_fetch_array($query)){
                      echo "<option value='" 
                      .$row['clustername'] ."'>" . 
                      $row['clustername'] ."</option>";
                    }
                    echo "</select>";
                                        ?>
                    <?php
                    $_
                    ?>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>


        <div class="row" style="margin-top: 25px;">
            <div class="col-sm-12 col-md-12">
                <div class="card">
                    <h5 class="card-header">Add school to cluster</h5>
                    <div class="card-body">
                        
                   

                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 25px;">
            <div class="col-sm-12 col-md-12">
                <div class="card">
                    <h5 class="card-header">add cluster</h5>
                    <div class="card-body">
                        


                    </div>
                </div>
            </div>
        </div>

  </div>

  <script>
    let myChart = document.getElementById('myChart').getContext('2d');
    
      $("#id_cluster").change(function()
      {
        alert(1);
      });
    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    let massPopChart = new Chart(myChart, {
      type: 'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data: {
        labels: ['school 1', 'school 2', 'school 3', 'school 4', 'school 5', 'school 6'],
        datasets: [{
          label: 'number of slots unused',
          data: [
            5,10,30,50,70,90
          ],

          backgroundColor: [
            'rgba(255, 206, 86, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(255, 206, 86, 0.6)',
          ],
          borderWidth: 1,
          borderColor: '#777',
          hoverBorderWidth: 3,
          hoverBorderColor: '#000'
        }]
      },
      options: {
        title: {
          display: true,
          text: 'Clusterwise',
          fontSize: 25
        },
        legend: {
          display: true,
          position: 'right',
          labels: {
            fontColor: '#000'
          }
        },
        layout: {
          padding: {
            left: 50,
            right: 0,
            bottom: 0,
            top: 0
          }
        },
        tooltips: {
          enabled: true
        }
      }
    });
  </script>
</body>

</html>