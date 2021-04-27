<?php
include("connection.php");
$no=$_GET['no'];
$delete=mysqli_query($conn,"DELETE from table_for_questions where question_no='$no'");
header("location:admin.php");
?>