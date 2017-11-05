<?php
  session_start();
  $auth = isset($_SESSION['auth']);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
      <div class="wrapper">
        <header>
          <ul class="auth">
            <?php if($auth){ ?>
            <li><a href="../user/user-logout.php">Logout</a></li>
            <?php }else{ ?>
            <li class="auth-item"><a href="../user/user-login.php">Login</a></li>
            <li><a href="../user/user-register.php">Register</a></li>
          <?php } ?>
          </ul>
          <img src="../images/logo.png" alt="Logo" width="100px" height="100px;">
          <h1>Advertisement</h1>
        </header>

          <?php include("../layout/nav.php"); ?>
          <section style="width: 100%">
            <h2>User Registration</h2>
            <form action="user-add.php" method="post">
              <label for="username">Username</label>
              <input type="text" name="username"><br>
              <label for="password">Password</label>
              <input type="password" name="password"><br>
              <label for="email">Email</label>
              <input type="text" name="email"><br>
              <label for="phone">Phone</label>
              <input type="text" name="phone"><br>
              <label for="address">Address</label>
              <textarea name="address" rows="8" cols="80"></textarea><br>
              <input type="submit" value="Register">
            </form>
          </section>
          <?php include("../layout/footer.php"); ?>

      </div>
  </body>
</html>
