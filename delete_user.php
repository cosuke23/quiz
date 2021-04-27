<?php
include("connection.php");
$no=$_GET['no'];
$delete=mysqli_query($conn,"DELETE from user where id='$no'");
header("location:tae.php");
?>