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

  $sql="DELETE FROM forms";

  $result = $connect->query($sql);
  $message="Deleted Sucessfully";
  $message1="Unable to delete data";

if($result){
  echo "<script type='text/javascript'>alert('$message');
  window.location.href='logout.php';
  </script>";

  } else {
    echo "<script type='text/javascript'>alert('$message1');
    window.location.href='logout.php';
    </script>";
  }
?>
