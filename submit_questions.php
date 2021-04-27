<?php

include("connection.php");

$type = $_POST["type"];
$question_title = $_POST["question_title"];
$question       = $_POST["question"];
$choice_one    = $_POST["choice_one"];
$choice_two    = $_POST["choice_two"];
$choice_three    = $_POST["choice_three"];
$choice_four    = $_POST["choice_four"];
$correct   = $_POST["correct"];
$type   = $_POST["type"];

if ($correct == $choice_one or $correct == $choice_two or $correct == $choice_three or $correct == $choice_four){


$sql=mysqli_query($conn,"INSERT into table_for_questions (question_title,main_question,type,choice_one,choice_two,choice_three,choice_four,answer) VALUES ('$question_title', '$question','$type', '$choice_one', '$choice_two', '$choice_three', '$choice_four', '$correct')");
header("location:admin.php?quiz_type=$type");
if (!$sql) {
echo $conn->error;
}

}else{
	?>
<script type="text/javascript">
	window.alert('Student Inserted');
	window.location('admin.php');
header("location:admin.php?error=display");
</script>
<?php
}
?> 