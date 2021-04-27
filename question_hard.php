<?php
$id=$_POST['id'];
$q_no=$_POST['q_no'];
$u_answer=$_POST['answer'];
$ans_time=time();
include("connection.php");
if (isset($_POST['submit'])) {
	
$check=mysqli_query($conn,"SELECT * from identification where answer = '$u_answer' or consider = '$u_answer' and id='$id' ");
$sql=mysqli_num_rows($check);
$typex=$sql['type'];
if($typex=='easy'){
	$type='easy';

}
else{
$type='hard';	
}
if ($sql<=0) {
	$query_select_user_info = mysqli_query($conn,"SELECT * from user where id='$id'");
	if (!$query_select_user_info) {
		echo $conn->error;
	}
	$query_select_user_info_result=mysqli_fetch_array($query_select_user_info);
	$firstname = $query_select_user_info_result['fname'];
		$lastname = $query_select_user_info_result['lname'];
			$pic = $query_select_user_info_result['pic'];



// inserting to list
 $query_to_insert=mysqli_query($conn,"INSERT INTO loser (fname,lname,rank,id,pic) values('$firstname','$lastname',0,'$id','$pic')");

if (!$query_to_insert) {
	echo $conn->error;
}
 $query_to_select=mysqli_query($conn,"SELECT counting from loser");
$rank = mysqli_fetch_array($query_to_select);
$final = $rank['counting'] + 1;

$update = mysqli_query($conn, "UPDATE loser set counting='$final'");
$update_again = mysqli_query($conn, "UPDATE loser set rank='$final' where id='$id'");
$update_mark=mysqli_query($conn,"UPDATE user set mark='pending',type='$type',answer='$u_answer' where id='$id'");
	header("location:main.php");
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
			$type = $query_select_user_info_result['type'];


// inserting to list
			if($type=='average'){
			$count=2;
		}else{
			$count=3;
		}
 $query_to_insert=mysqli_query($conn,"INSERT INTO list (fname,lname,team,counting,rank,id,pic,ans_time) values('$firstname','$lastname','$count','$team',0,'$id','$pic','$ans_time')");


if (!$query_to_insert) {
	echo $conn->error;
}

 $query_to_select=mysqli_query($conn,"SELECT counting from winner");
$rank = mysqli_fetch_array($query_to_select);


 $query_to_winner=mysqli_query($conn,"SELECT * from winner where stud_id='$id'");
$row = mysqli_fetch_array($query_to_winner);
$winner=$row['stud_id'];
if($row<=0){
				if($type=='average'){
			$count=2;
		}else{
			$count=3;
		}

 $query_to_save=mysqli_query($conn,"INSERT INTO winner (fname,lname,team,rank,stud_id,counting,pic,ans_time) values('$firstname','$lastname','$team',0,'$id','$counting','$pic','$ans_time')");
	header("location:main.php");
}else{
	 $query_to_win=mysqli_query($conn,"SELECT counting from winner where stud_id='$id'");
$final_rank = mysqli_fetch_array($query_to_win);
$f_count =$final_rank['counting'];
	if($type=='average'){
$final_score = $f_count + 2;
}else{
$final_score = $f_count + 3;	
}
$update_winner = mysqli_query($conn, "UPDATE winner set counting='$final_score',ans_time='$ans_time' where stud_id='$id'");	
}
$update = mysqli_query($conn, "UPDATE list set counting='$final' where stud_id='$id'");
$update_again = mysqli_query($conn, "UPDATE list set rank='$final' where id='$id'");
$update_mark=mysqli_query($conn,"UPDATE user set mark='pending',type='$type',answer='$u_answer' where id='$id'");

	header("location:main.php");
}

}
?>
