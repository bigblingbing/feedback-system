<?php
 session_start();

  echo "Logout Successfully ";
  session_destroy();   // function that Destroys Session
  header("Location: ../logins/student-login.html");
?>
