<?php
session_start();
include("connection.php");
$id = $_POST['username'];
$pass = $_POST['password'];
$sql = mysqli_query($conn,"SELECT * from user where id='$id' and pass='$pass'");
$result=mysqli_fetch_array($sql);
if ($result<=0) {
	
	?>
	<script type='text/javascript'>alert('wrong');</script>
<script type="text/javascript">
	alert("INVALID USERNAME or PASSWORD")
</script>
	<?php

	header("location:loginattemt.php");
}else{

$_SESSION['id']=$result['id'];
$_SESSION['pass']=$result['pass'];

header("location:main_start.php");
}
?>
