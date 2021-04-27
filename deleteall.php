<?php
session_start();
if (isset($_SESSION['admin_id'])) {
	# code...

include("connection.php");
$delete_user=mysqli_query($conn, "delete from user");
header("location:tae.php");
}else{
	header("location:admin.php");
}
?>