<?php  session_start(); ?>  // session starts with the help of this function

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="login";

$connect=new mysqli($servername,$username,$password, $dbname);//Connection to DB

if(!$connect)
    die("Connection failed:".mysql_error);
else
    echo"connected";

/*if(isset($_SESSION['use']))   // Checking whether the session is already there or not if
                                      // true then header redirect it to the home page directly
         {
            header("Location:result.php");
         }*/
$name=$_POST["name"];
$pass=$_POST["pass"];


$query = "SELECT id FROM admin WHERE id = '$name' AND password = '$pass'";// AND password = $userPass";

$result = $connect->query($query);

$_SESSION['use']=$name;


/*
$query="SELECT * FROM `admin`";
$result = mysqli_query( $connect, $query);
echo $result;

*/
$message="wrong userid or password";
$loggedIn = false;
$row = mysqli_fetch_array($result);

       if(!$row){
           echo "<div>";
           echo "<script type='text/javascript'>alert('$message');
           window.location.href='admin-login.html';
           </script>";
           echo "</div>";
       }
       else {
           // *** My PERSONAL preference is to use {} every where, it just makes it easier if you add
           // code into the condition later
           echo "loggedin";
           $loggedIn = true;
           header('Location: result.php');
           exit;
       }


?>
