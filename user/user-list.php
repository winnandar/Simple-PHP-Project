<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User List</title>
  </head>
  <body>
    <h1>User List</h1>
    <ul>
      <?php
        include("../config/conf.php");
        $sql = "SELECT * FROM user";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)):
       ?>
      <li>
        <?php echo $row['username']; ?>
      </li>
    <?php endwhile; ?>
    </ul>
  </body>
</html>
