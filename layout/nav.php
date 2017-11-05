<nav>
  <ul>
    <li><a href="../index.php">Home</a></li>
    <li><a href="../contact.php">Contact Us</a></li>
    <?php if($auth){ ?>
      <li><a href="../item/item-list.php">My Item</a></li>
      <li><a href="../item/create-item.php">Add Item</a></li>
   <?php } ?>
  </ul>
</nav>
