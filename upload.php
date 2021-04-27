<?php
session_start();
$sender=$_SESSION['id'];
include ("connection.php");
$target_dir = "profiles/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

        $sqlupdate = mysqli_query($conn,"UPDATE user SET pic = '$target_file' WHERE id = '$sender'");

   if (isset($_GET['re_id'])) {
      header("location:main.php?re_id=".$_GET['re_id']."");
   }else{
     header("location:main.php");
   }
  if (!$sqlupdate) {
    echo $conn->error;

  }
  else{

  }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}





              ?>