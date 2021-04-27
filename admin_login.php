<?php
session_start();
include("connection.php");
$username = $_POST['username'];
$password = $_POST['password'];



$query = mysqli_query($conn,"select * from admin where username ='$username' and password='$password'");

$row = mysqli_fetch_array($query);
if ($row<=0) {
echo "wala";
}else{
$_SESSION['admin_id']=$row['id'];
header("location:mainadmin.php");
}
?>