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


$name=$_POST["name"];
$pass=$_POST["pass"];

echo $name." ".$pass;

$query = "SELECT id FROM student WHERE id = '$name' AND password = '$pass'";// AND password = $userPass";

$result = $connect->query($query);



/*
$query="SELECT * FROM `admin`";
$result = mysqli_query( $connect, $query);
echo $result;

*/
$loggedIn = false;
$row = mysqli_fetch_array($result);

       if(!$row){
           echo "<div>";
           echo "No existing user or wrong password.";
           echo "</div>";
       }
       else {
           // *** My PERSONAL preference is to use {} every where, it just makes it easier if you add
           // code into the condition later
           echo "loggedin";
           $loggedIn = true;
           header('Location: ../forms/form.html');
           exit;
       }


?>
