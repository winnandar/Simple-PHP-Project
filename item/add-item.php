<?php
  session_start();
  include("../config/conf.php");
  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $upload = $_FILES['upload']['name'];
  $user_id = $_SESSION['userid'];
  $total = count($upload);
    if(count($upload) > 0){
        //Loop through each file
        for($i=0; $i<count($upload); $i++) {
          //Get the temp file pat
            $tmpFilePath = $_FILES['upload']['tmp_name'][$i];
            //Make sure we have a filepath
            if($tmpFilePath != ""){
                //save the filename
                $shortname = $_FILES['upload']['name'][$i];
                //save the url and the file
                $filePath = "../images/item/$shortname";
                move_uploaded_file($tmpFilePath, $filePath);
            }
        }
    }
    $shortname0 = $_FILES['upload']['name'][0];
    $shortname1 = $_FILES['upload']['name'][1];
    $shortname2 = $_FILES['upload']['name'][2];
    $sql = "INSERT INTO items (name, description, price,photo1, photo2, photo3, upload,user_id) VALUES ('$name', '$description', '$price','$shortname0','$shortname1','$shortname2', '$total', '$user_id')";
    $result = mysqli_query($conn, $sql);
    header("location: item-list.php")
 ?>
