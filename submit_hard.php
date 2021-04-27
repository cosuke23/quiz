<?php

include("connection.php");

$type = $_POST["type"];
$question_title = $_POST["question_title"];
$question       = $_POST["question"];
$correct   = $_POST["correct"];
$type   = $_POST["type"];



$sql=mysqli_query($conn,"INSERT into identification (question_title,question,type,answer) VALUES ('$question_title', '$question','$type', '$correct')");
header("location:hard.php?quiz_type=$type");
if (!$sql) {
echo $conn->error;
}

else{

header("location:hard.php?quiz_type=$type");

}
?>