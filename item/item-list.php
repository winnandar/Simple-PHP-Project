<?php
  session_start();
  $auth = isset($_SESSION['auth']);
  $user_id = $_SESSION['userid'];
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
          <h1>Item List</h1>
        </header>

          <?php include("../layout/nav.php"); ?>
          <section style="width: 100%">
            <h2>Item Lists</h2>
            <div class="main">
              <ul class="item">
                <?php
                include("../config/conf.php");
                $sql = "SELECT * FROM items WHERE user_id = '$user_id'";
                $item = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($item)): ?>
                <li>
                  <b><?php echo $row['name']?>&nbsp; &nbsp;<span>( <?php echo $row['price']." Kyat"?> )</span></b>
                  <p><?php echo $row['description']?></p>
                  <?php if($row['photo1']){ ?>
                  <img src="../images/item/<?php echo $row['photo1'] ?>">
                  <?php } ?>
                  <?php if($row['photo2']){ ?>
                  <img src="../images/item/<?php echo $row['photo2'] ?>">
                  <?php } ?>
                  <?php if($row['photo3']){ ?>
                  <img src="../images/item/<?php echo $row['photo3'] ?>">
                  <?php } ?>
                  </li>
               <?php endwhile; ?>
              </ul>
            </div>
          </section>
          <?php include("../layout/footer.php"); ?>

      </div>
  </body>
</html>
