<?php
  include("../config/conf.php");
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
  $result = mysqli_query($conn, $sql);
  $rowcount = mysqli_fetch_assoc($result);
  $id = $rowcount['id'];
  if($rowcount > 0){
    session_start();
    $_SESSION['auth'] = true;
    $_SESSION['userid'] = $id;
  }
  header("location: ../index.php");
 ?>
