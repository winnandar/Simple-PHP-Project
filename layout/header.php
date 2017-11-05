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
