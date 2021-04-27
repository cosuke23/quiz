<?php
include("connection.php");
session_start();
if (isset($_SESSION['admin_id'])) {
	# code...

include("connection.php");
$delete_display=mysqli_query($conn,"update question_display set main_question='', question_title='',question_no='',choice_one='',choice_two='',choice_three='',choice_four='',answer=''");
$delete_table=mysqli_query($conn, "update final_questions  set question='', correct_ans=''");
$delete_final=mysqli_query($conn, "delete from table_for_questions");
header("location:admin.php");
}else{
	header("location:admin.php");
}
?>