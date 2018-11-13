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
    <link href="form.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="result.css" rel="stylesheet">

    <title>admin</title>
  </head>
  <body>
    <?php
          if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
           {
               header("Location:../logins/admin-login.php");
           }



    ?>

    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1 col-sm-12">
          <div class="main-form">
            <div class="nav">
              <h2 class="left">Welcome Admin!</h2>
              <h2 class="right"><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
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

      $sql="SELECT * FROM forms";

      $result = $connect->query($sql);

      if (mysqli_num_rows($result) > 0) {
          while($row = $result->fetch_assoc()) {
              echo "<div class='box' id='box1'>";
                echo "<h5 class='heading'>";
                echo $row['name']."'s";
                echo " reviews</h5>";

                echo "<p class=''>";
                echo "<p>1) Select the choice you want for this question</p>";
                echo $row['q1'];
                echo "</p>";

                echo "<p class=''>";
                echo "<p>1) Select the choice you want for this question</p>";
                echo $row['q2'];
                echo "</p>";

                echo "<p class=''>";
                echo "<p>1) Select the choice you want for this question</p>";
                echo $row['q3'];
                echo "</p>";

                echo "<p class=''>";
                echo "<p>1) Select the choice you want for this question</p>";
                echo $row['q4'];
                echo "</p>";

                echo "<p class=''>";
                echo "<p>1) Select the choice you want for this question</p>";
                echo $row['q5'];
                echo "</p>";

                echo "<p class=''>";
                echo "<p>6) reviews</p>";
                echo $row['review'];
                echo "</p>";

              echo "</div>";

          }
      } else {
          echo "No results found";
      }
    ?>
  </body>
</html>
