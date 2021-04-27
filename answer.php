<?php

include('connection.php');
$type=$_GET['type'];
$mark=mysqli_query($conn,"UPDATE user set mark='done' ");
if($type=='easy'){
header("location:admin.php?quiz_type=$type");
}elseif ($type=='average') {
	# code...
	header("location:average.php?quiz_type=$type");
}else{
	header("location:hard.php?quiz_type=$type");
}
?>