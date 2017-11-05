<?php
  session_start();
  $auth = isset($_SESSION['auth']);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>REGISTER</title>
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
            <div class="wrap">
              <ul class="side">
                <?php
                include("config/conf.php");
                $sql = "SELECT * FROM items";
                $item = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($item)): ?>
                <li>
                  <b><?php echo $row['name']?>
                  <p><?php echo $row['price']." (Kyat)"?></p>
                  <?php if($row['photo1']){ ?>
                  <a href="item/item-detail.php?id=<?php echo $row['id']?>">
                      <img src="images/item/<?php echo $row['photo1'] ?>" style="padding-top: 10px; width: 200px; height: 150px;">
                  </a>
                  <?php } ?>
                  </li>
               <?php endwhile; ?>
              </ul>
            </div>
          </section>
          <?php include("layout/footer.php"); ?>

      </div>
  </body>
</html>
