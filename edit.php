<?php 
include("connection.php");
$question_title = $_POST["question_title"];
$question       = $_POST["question"];
$choice_one    = $_POST["choice_one"];
$choice_two    = $_POST["choice_two"];
$choice_three    = $_POST["choice_three"];
$choice_four    = $_POST["choice_four"];
$correct   = $_POST["correct"];
$question_number=$_POST['number'];

// echo $question." ".$question_title." ". $choice_one." ". $choice_two." ". $choice_three." ". $choice_four." ".$correct. " ".$number." ".$bool;
if ($correct == $choice_one or $correct == $choice_two or $correct == $choice_three or $correct == $choice_four){

if (isset($_POST['bool'])) {
	
$sql=mysqli_query($conn,"UPDATE question_display set main_question='$question', question_title='$question_title',choice_one='$choice_one',choice_two='$choice_two',choice_three='$choice_three',choice_four='$choice_four',answer='$correct'");

// $sql3=mysqli_query($conn,"update table_for_questions set main_question='$question', question_title='$question_title',choice_one='$choice_one',choice_two='$choice_two',choice_three='$choice_three',choice_four='$choice_four',answer='$correct' where question_no='$question_number'");

$sql2=mysqli_query($conn,"UPDATE final_questions set question='$question',correct_ans='$correct'");
header("location:admin.php");

}else{

$sql4=mysqli_query($conn,"UPDATE table_for_questions set main_question='$question', question_title='$question_title',choice_one='$choice_one',choice_two='$choice_two',choice_three='$choice_three',choice_four='$choice_four',answer='$correct'where question_no='$question_number'");

// $sql5=mysqli_query($conn,"update question_display set main_question='$question', question_title='$question_title',choice_one='$choice_one',choice_two='$choice_two',choice_three='$choice_three',choice_four='$choice_four',answer='$correct'where question_no='$question_number'");
header("location:admin.php");
}
}else{

header("location:admin.php?errors=true&&display=true&&update=true&&question=$question&&choice_one=$choice_one&&choice_two=$choice_two&&choice_three=$choice_three&&choice_four=$choice_four&&correct=$correct&&title=$question_title&&no=$question_number");
}
 ?>

