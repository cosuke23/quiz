<?php
include("connection.php");
$question=$_GET['question'];
$choice_one=$_GET['choice_one'];
$choice_two=$_GET['choice_two'];
$choice_three=$_GET['choice_three'];
$choice_four=$_GET['choice_four'];
$correct=$_GET['correct'];
$no  = $_GET['no'];
$title=$_GET['title'];
$type  = $_GET['type'];


$update= mysqli_query($conn,"UPDATE question_display set main_question='$question',choice_one='$choice_one',choice_two='$choice_two',choice_three='$choice_three',choice_four='$choice_four',question_no='$no',question_title='$title',answer='$correct'");

if (!$update) {
	echo $conn->error;
}

$correct = mysqli_query($conn,"UPDATE final_questions set question='$question', correct_ans='$correct'");
$update_mark=mysqli_query($conn,"update user set mark=''");
$delete = mysqli_query($conn, "delete  from list");
$deletelo = mysqli_query($conn, "delete  from loser");
header("location:admin.php?quiz_type=$type");
?>