<?php
   $name = $_FILES['file']['name'];
  //  $size = $_FILES['file']['size'];
  //  $type = $_FILES['file']['type'];

   $tmp_name = $_FILES['file']['tmp_name'];

  //  $error = $_FILES['file']['error'];

  if (isset($name)) {
    if ( !empty($name)) {

      $location = 'uploads/';

      if (move_uploaded_file($tmp_name, $location.$name)) {
        echo 'Uploaded';
      }

    } else {
      echo 'Please Choose a file';
    }
  }
?>

<form class="" action="index.php" method="post" enctype="multipart/form-data">
  <input type="file" name="file" value="Upload"><br><br>
  <input type="submit" name="submit" value="Send">
</form>
