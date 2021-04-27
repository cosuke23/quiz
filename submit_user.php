b <?php

$id=$_POST['id'];
$team=$_POST['team'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$course=$_POST['course'];
$year=$_POST['year'];
$pass=$_POST['password'];

include("connection.php");

if (isset($_POST['submit'])) {
	    

$sql_user = mysqli_query($conn,"SELECT id from user where id=$id");
$chck_u = mysqli_fetch_array($sql_user);
$checker=$_POST['id'];
if($sql_chk<1){
	$sql = mysqli_query($conn,"INSERT INTO user (id,team,fname,lname,course,year,pass) values ('$id','$team','$fname','$lname','$course','$year','$pass')");
	$rank = mysqli_fetch_array($sql);

header("location:user.php");
  if (!$sql!=''){
		echo $co nn->error;
}
}else{
echo '<script>
alert("Id Exist");
window.location.href="user.php";
</script>';

	
}


}
?>