<?php
  session_start();
  unset($_SESSION['auth']);
  header("location: ../user/user-login.php");
 ?>
