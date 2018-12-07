<!DOCTYPE html>
<?php   session_start();  ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Feedback</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../assets/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="for.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="stats.css" rel="stylesheet">

    <title>admin</title>
  </head>
  <body>

        <center>
          <h3 id="head" class="heading">Check 0ut the stats!</h3>
        </center>
        <?php
          $servername="localhost";
          $username="root";
          $password="";
          $dbname="login";

          $connect=new mysqli($servername,$username,$password, $dbname);//Connection to DB

          if(!$connect)
              die("Connection failed:".mysql_error);
          else
            //  echo"connected";
          //$ret=$_POST["rcid"];

          $sql="SELECT SUM(q1 = 'one') AS 'one' ,SUM(q1 = 'two') AS 'two' ,SUM(q1 = 'three') AS 'three' ,SUM(q1 = 'four') AS 'four' FROM forms
";

          $result = $connect->query($sql);

          if (mysqli_num_rows($result) > 0) {
              while($row = $result->fetch_assoc()) {
                echo "<div class='box' id='box1'>";
                echo "<h5 class='heading'>College Library facilities";
                echo " reviews</h5>";
                echo "<h6>Students with rating one : ". $row['one']."</h6>";
                echo "<h6>Students with rating two : ". $row['two']."</h6>";
                echo "<h6>Students with rating three : ". $row['three']."</h6>";
                echo "<h6>Students with rating four : ". $row['four']."</h6>";
                echo "</div>";
              }
          } else {
              echo "No results found";
          }


          $sql="SELECT SUM(q2 = 'one') AS 'one' ,SUM(q2 = 'two') AS 'two' ,SUM(q2 = 'three') AS 'three' ,SUM(q2 = 'four') AS 'four' FROM forms
";

          $result = $connect->query($sql);

          if (mysqli_num_rows($result) > 0) {
              while($row = $result->fetch_assoc()) {
                echo "<div class='box' id='box1'>";
                echo "<h5 class='heading'>College Lab facilities";
                echo " reviews</h5>";
                echo "<h6>Students with rating one : ". $row['one']."</h6>";
                echo "<h6>Students with rating two : ". $row['two']."</h6>";
                echo "<h6>Students with rating three : ". $row['three']."</h6>";
                echo "<h6>Students with rating four : ". $row['four']."</h6>";
                echo "</div>";
              }
          } else {
              echo "No results found";
          }

          $sql="SELECT SUM(q3 = 'one') AS 'one' ,SUM(q3 = 'two') AS 'two' ,SUM(q3 = 'three') AS 'three' ,SUM(q3 = 'four') AS 'four' FROM forms
";

          $result = $connect->query($sql);

          if (mysqli_num_rows($result) > 0) {
              while($row = $result->fetch_assoc()) {
                echo "<div class='box' id='box1'>";
                echo "<h5 class='heading'>College Internet facilities";
                echo " reviews</h5>";
                echo "<h6>Students with rating one : ". $row['one']."</h6>";
                echo "<h6>Students with rating two : ". $row['two']."</h6>";
                echo "<h6>Students with rating three : ". $row['three']."</h6>";
                echo "<h6>Students with rating four : ". $row['four']."</h6>";
                echo "</div>";
              }
          } else {
              echo "No results found";
          }

          $sql="SELECT SUM(q4 = 'one') AS 'one' ,SUM(q4 = 'two') AS 'two' ,SUM(q4 = 'three') AS 'three' ,SUM(q4 = 'four') AS 'four' FROM forms
";

          $result = $connect->query($sql);

          if (mysqli_num_rows($result) > 0) {
              while($row = $result->fetch_assoc()) {
                echo "<div class='box' id='box1'>";
                echo "<h5 class='heading'>College Hostel facilities";
                echo " reviews</h5>";
                echo "<h6>Students with rating one : ". $row['one']."</h6>";
                echo "<h6>Students with rating two : ". $row['two']."</h6>";
                echo "<h6>Students with rating three : ". $row['three']."</h6>";
                echo "<h6>Students with rating four : ". $row['four']."</h6>";
                echo "</div>";
              }
          } else {
              echo "No results found";
          }

          $sql="SELECT SUM(q5 = 'one') AS 'one' ,SUM(q5 = 'two') AS 'two' ,SUM(q5 = 'three') AS 'three' ,SUM(q5 = 'four') AS 'four' FROM forms
";

          $result = $connect->query($sql);

          if (mysqli_num_rows($result) > 0) {
              while($row = $result->fetch_assoc()) {
                echo "<div class='box' id='box1'>";
                echo "<h5 class='heading'>College Academic faculties";
                echo " reviews</h5>";
                echo "<h6>Students with rating one : ". $row['one']."</h6>";
                echo "<h6>Students with rating two : ". $row['two']."</h6>";
                echo "<h6>Students with rating three : ". $row['three']."</h6>";
                echo "<h6>Students with rating four : ". $row['four']."</h6>";
                echo "</div>";
              }
          } else {
              echo "No results found";
          }
        ?>
        <div>
          <center>
            <form class="" action="logout.php" method="post">
              <h3 class="right"><a href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i></i></a></h3>
            </form>
          </center>
        </div>

  </body>
</html>
