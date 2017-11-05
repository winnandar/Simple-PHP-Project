<?php
  session_start();
  $auth = isset($_SESSION['auth']);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
      <div class="wrapper">
        <header>
          <ul class="auth">
            <?php if($auth){ ?>
            <li><a href="user/user-logout.php">Logout</a></li>
            <?php }else{ ?>
            <li class="auth-item"><a href="user/user-login.php">Login</a></li>
            <li><a href="user/user-register.php">Register</a></li>
          <?php } ?>
          </ul>
          <img src="images/logo.png" alt="Logo" width="100px" height="100px;">
          <h1>Advertisement</h1>
        </header>

          <nav>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <?php if($auth){ ?>
                <li><a href="item/item-list.php">My Item</a></li>
                <li><a href="item/create-item.php">Add Item</a></li>
             <?php } ?>
            </ul>
          </nav>
          <section style="width: 100%">
              <h2>Contact Us</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </section>
          <?php include("layout/footer.php"); ?>

      </div>
  </body>
</html>
