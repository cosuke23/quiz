<?php
include("connection.php");
$type=$_GET['type'];
if($type=="average"){
	$question=$_GET['question'];
$correct=$_GET['correct'];
$no  = $_GET['no'];
$title=$_GET['title'];
$type  = $_GET['type'];


$update= mysqli_query($conn,"UPDATE final_questions set question='$question',question_no='$no',correct_ans='$correct',type='$type'");
$update= mysqli_query($conn,"UPDATE question_display set main_question='$question',type='$type',answer='$correct'");
if (!$update) {
	echo $conn->error;
}

$correct = mysqli_query($conn,"UPDATE final_questions set question='$question', correct_ans='$correct',type='$type'");
$update_mark=mysqli_query($conn,"update user set mark='',type='$type'");
$delete = mysqli_query($conn, "delete  from list");
$deletelo = mysqli_query($conn, "delete  from loser");
header("location:average.php?quiz_type=$type");
	}
?>