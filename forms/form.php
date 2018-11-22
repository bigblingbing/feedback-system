<!DOCTYPE html>
<html lang="en">
<?php   session_start();  ?>
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

</head>

<body>
  <?php
        if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
         {
             header("Location:../logins/student-login.php");
         }

            echo $_SESSION['use'];

            echo "Login Success";

            echo "<a href='logout.php'> Logout</a> ";
  ?>

  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1 col-sm-12">
        <div class="main-form">
          <div class="nav">
            <h2 class="left">Feedback Form</h2>
            <h2 class="right"><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></h2>
          </div>

          <form method="post" action="form-store.php">
            <div class="row">
              <div class="col-md-4 ml-auto mr-auto col-sm-12">
                <div class="md-form" id="name">
                  <i class="fa fa-user prefix"></i>
                  <input type="text" id="inputIconEx2" class="form-control" name="name">
                  <label for="inputIconEx2">Enter your name</label>
                </div>
              </div>
            </div>

            <div class="box" id="box1">
              <p>1) Select the choice you want for this question</p>
              <label class="container1">One
                <input type="radio" value="xyz" name="radio1">
                <span class="checkmark"></span>
              </label>
              <label class="container1">Two
                <input type="radio" value="xyz" name="radio1">
                <span class="checkmark"></span>
              </label>
              <label class="container1">Three
                <input type="radio" value="xyz" name="radio1">
                <span class="checkmark"></span>
              </label>
              <label class="container1">Four
                <input type="radio" value="xyz" name="radio1">
                <span class="checkmark"></span>
              </label>
            </div>

            <div class="box" id="box2">
              <p>2) Select the choice you want for this question</p>
              <label class="container1">One
                <input type="radio" value="xyz" name="radio2">
                <span class="checkmark"></span>
              </label>
              <label class="container1">Two
                <input type="radio" value="xyz" name="radio2">
                <span class="checkmark"></span>
              </label>
              <label class="container1">Three
                <input type="radio" value="xyz" name="radio2">
                <span class="checkmark"></span>
              </label>
              <label class="container1">Four
                <input type="radio" value="xyz" name="radio2">
                <span class="checkmark"></span>
              </label>
            </div>

            <div class="box" id="box3">
              <p>3) Select the choice you want for this question</p>
              <label class="container1">One
                <input type="radio" value="xyz" name="radio3">
                <span class="checkmark"></span>
              </label>
              <label class="container1">Two
                <input type="radio" value="xyz" name="radio3">
                <span class="checkmark"></span>
              </label>
              <label class="container1">Three
                <input type="radio" value="xyz" name="radio3">
                <span class="checkmark"></span>
              </label>
              <label class="container1">Four
                <input type="radio" value="xyz" name="radio3">
                <span class="checkmark"></span>
              </label>
            </div>

            <div class="box" id="box4">
              <p>4) Select the choice you want for this question</p>
              <label class="container1">One
                <input type="radio" value="xyz" name="radio4">
                <span class="checkmark"></span>
              </label>
              <label class="container1">Two
                <input type="radio" value="xyz" name="radio4">
                <span class="checkmark"></span>
              </label>
              <label class="container1">Three
                <input type="radio" value="xyz" name="radio4">
                <span class="checkmark"></span>
              </label>
              <label class="container1">Four
                <input type="radio" value="xyz" name="radio4">
                <span class="checkmark"></span>
              </label>
            </div>

            <div class="box" id="box5">
              <p>5) Select the choice you want for this question</p>
              <label class="container1">One
                <input type="radio" value="xyz" name="radio5">
                <span class="checkmark"></span>
              </label>
              <label class="container1">Two
                <input type="radio" value="xyz" name="radio5">
                <span class="checkmark"></span>
              </label>
              <label class="container1">Three
                <input type="radio" value="xyz" name="radio5">
                <span class="checkmark"></span>
              </label>
              <label class="container1">Four
                <input type="radio" value="xyz" name="radio5">
                <span class="checkmark"></span>
              </label>
            </div>

            <div class="box">6) Have some other issues?
              <div class="md-form">
                <textarea type="text" id="form7" class="md-textarea form-control" rows="3" name="review"></textarea>
                <label for="form7">Some extra reviews?</label>
              </div>
            </div>

            <center>
              <span class="submit"><button class="btn-floating btn-sm btn-tw" type="submit"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i>
                </button></span>
            </center>

          </form>
        </div>
      </div>
    </div>

  </div>


  <!-- SCRIPTS -->

  <!-- JQuery -->
  <script type="text/javascript" src="../assets/js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../assets/js/mdb.min.js"></script>

  <script type="text/javascript" src="./form.js"></script>

</body>

</html>