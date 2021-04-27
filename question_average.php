<?php
session_start();
$q_no=$_POST['q_no'];
$u_answer=$_POST['answer'];
$ans_time=time();
include("connection.php");
$id = $_SESSION['id'];
if (isset($_POST['submit'])) {
	

$sql_user = mysqli_query($conn,"SELECT * from question_display where answer='$u_answer'");
$chck_u = mysqli_fetch_array($sql_user);
$c_answer=$chck_u['answer'];

if(!$sql_user){
echo $q_no;
}else{


	$query_select_user_info = mysqli_query($conn,"SELECT * from user where id='$id'");
	if (!$query_select_user_info) {
		echo $conn->error;
	}
	$query_select_user_info_result=mysqli_fetch_array($query_select_user_info);
	$firstname = $query_select_user_info_result['fname'];
		$lastname = $query_select_user_info_result['lname'];
			$pic = $query_select_user_info_result['pic'];
			$team = $query_select_user_info_result['team'];


// inserting to list
			$count=1;
 $query_to_insert=mysqli_query($conn,"INSERT INTO list (fname,lname,team,counting,rank,id,pic,ans_time) values('$firstname','$lastname','$count','$team',0,'$id','$pic','$ans_time')");


if (!$query_to_insert) {
	echo $conn->error;
}

 $query_to_select=mysqli_query($conn,"SELECT counting from list");
$rank = mysqli_fetch_array($query_to_select);
$final = $rank['counting'] + 1;

 $query_to_winner=mysqli_query($conn,"SELECT * from winner where stud_id='$id'");
$winner = mysqli_fetch_array($query_to_winner);
if($winner==''){
	$counting=1;
 $query_to_save=mysqli_query($conn,"INSERT INTO winner (fname,lname,team,rank,stud_id,counting,pic,ans_time) values('$firstname','$lastname','$team',0,'$id','$counting','$pic','$ans_time')");
}else{ 
	 $query_to_win=mysqli_query($conn,"SELECT counting from winner where stud_id='$id'");
$final_rank = mysqli_fetch_array($query_to_win);
$final_winner = $final_rank['counting'] + 3;
$update_winner = mysqli_query($conn, "UPDATE winner set counting='$final_winner',ans_time='$ans_time' where stud_id='$id'");	
}
$update = mysqli_query($conn, "UPDATE list set counting='$final' where stud_id='$id'");
$update_again = mysqli_query($conn, "UPDATE list set rank='$final' where id='$id'");
$update_mark=mysqli_query($conn,"UPDATE user set mark='pending',answer='$u_answer' where id='$id'");

header("location:main.php");
}


}

?>