<?php
  include("../config/conf.php");
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $phone = $_POST["phone"];
  $address = $_POST["address"];
  $sql = "INSERT INTO user (username, email, password, phone, address) VALUES ('$username', '$email', '$password', '$phone', '$address')";
  mysqli_query($conn, $sql);
  header("location: user-list.php")
 ?>
