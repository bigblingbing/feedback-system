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
$question1=$_POST["radio1"];
$question2=$_POST["radio2"];
$question3=$_POST["radio3"];
$question4=$_POST["radio4"];
$question5=$_POST["radio5"];
$review=$_POST["review"];

echo $question1;
echo $name;
/*
echo $name." ".$pass;
*/
$query = "INSERT INTO forms(name, q1, q2, q3, q4, q5, review) VALUES ('$name','$question1','$question2','$question3','$question4','$question5','$review')";

$result = $connect->query($query);



/*
$query="SELECT * FROM `admin`";
$result = mysqli_query( $connect, $query);
echo $result;
*/



       if(!$result){
           echo "<div>";
           echo "noy";
           echo "</div>";
       }
       else {
           // *** My PERSONAL preference is to use {} every where, it just makes it easier if you add
           // code into the condition later
           echo "thank you";
           $loggedIn = true;
           //header('Location: result.html');
           //exit;
       }


?>
