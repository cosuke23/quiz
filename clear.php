<?php
include("connection.php");

$sql=mysqli_query($conn,"update question_display set main_question='', question_title='',choice_one='',choice_two='',choice_three='',choice_four='',answer=''");
header("location:admin.php");
?>