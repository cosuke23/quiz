<?php
$q_no=$_POST['q_no'];
$u_answer=$_POST['answer'];

include("connection.php");

if (isset($_POST['submit'])) {
	

$sql_user = mysqli_query($conn,"SELECT * from question_display where answer='$u_answer'");
$chck_u = mysqli_fetch_array($sql_user);
$c_answer=$chck_u['answer'];

if(!$sql_user){
echo $q_no;
}else{

echo	$q_no;
}


}
?>