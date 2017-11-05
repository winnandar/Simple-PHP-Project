<?php
  session_start();
  $auth = isset($_SESSION['auth']);
  include("../config/conf.php");
  $id = $_GET['id'];
  $sql = "SELECT items.*,user.* FROM items LEFT JOIN user ON items.user_id = user.id WHERE items.id='$id'";
  $result = mysqli_query($conn, $sql);

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add</title>
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
            <?php while($row = mysqli_fetch_assoc($result)): ?>
            <h2>Item Detail: <?php echo $row['name']?></h2>
            <ul class="item">
                <li>
                  <div class="items">
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
                  </div>
                  <div class="user">
                    <b>Contact Person</b>
                    <label>Username: </label><p><?php echo $row['username']?></p>
                    <label>Email</label><p><?php echo $row['email']?></p>
                    <label>Phone</label><p><?php echo $row['phone']?></p>
                    <label>Address</label><p><?php echo $row['address']?></p>
                  </div>
                </li>
            </ul>
            <?php endwhile; ?>
          </section>
          <?php include("../layout/footer.php"); ?>

      </div>
  </body>
</html>
