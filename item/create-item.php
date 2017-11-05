<?php
  session_start();
  $auth = isset($_SESSION['auth']);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add Item</title>
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
            <h2>Add Item</h2>
            <form action="add-item.php" method="post" enctype="multipart/form-data">
              <label for="name">Item Name</label>
              <input type="text" name="name">
              <label for="description">Description</label>
              <textarea name="description"></textarea>
              <label for="price">Price</label>
              <input type="text" name="price">
              <label for="upload">Choose a photo</label>
              <input id='upload' name="upload[]" type="file" multiple="multiple" />
              <input type="submit" value="Add Item">
            </form>
          </section>
          <?php include("../layout/footer.php"); ?>

      </div>
  </body>
</html>
