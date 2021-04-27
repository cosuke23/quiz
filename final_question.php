<?php
$id=$_POST["id"];
include('connection.php');

$mark=mysqli_query($conn,"SELECT mark from user where id='$id'");
$row=mysqli_fetch_array($mark);


$query = mysqli_query($conn, "SELECT * from question_display");
$result = mysqli_fetch_array($query);
if ($row['mark']=="done") {

$query = mysqli_query($conn, "SELECT* from question_display");
$result = mysqli_fetch_array($query);
$answer = $result['answer'];
$query = mysqli_query($conn, "SELECT * from identification where answer='$answer' or consider='$answer'");
$result = mysqli_fetch_array($query);
$c_answer = $result['consider'];
$type = $result['type'];
$query_answ = mysqli_query($conn, "SELECT * from user where id = '$id' ");
$result_answ = mysqli_fetch_array($query_answ);
$ur_answer = $result_answ['answer'];
if($answer==$ur_answer||$answer==$c_answer){
?>
<?php 
if($type=='easy'){
	?>
<div class="questionaire">
	<span> Your answer is Correct!! :  <?php echo $answer; ?></span>
		</div>
	<?php
}else{
	?>
<div class="questionaire">
	<span> Maligayang Bati Tama ang iyong sagot na :  <?php echo $c_answer; ?></span>
		</div>
	<?php
}
?>
		<?php
	}else{
		?>
		<div class="questionaire">
	<span > Ang tamang sagot ay :  <?php echo $answer; ?></span>
		</div>
		<?php
	}
?>
		
<?php
}else if ($row['mark']=="pending") {
?>
				<div class="questionaire">
	<span > Hintaying makatapos ang lahat ng kalahok</span>

		</div>
<?php	# code...
}else{  
	$qtype=mysqli_query($conn,"SELECT * from question_display where type ='hard' or type ='average'");
$qrow=mysqli_fetch_array($qtype);
$q_no=$qrow['question_no'];
$que_type=$qrow['type'];
$qhard=$qrow['main_question'];
if(!$que_type){
$query = mysqli_query($conn, "SELECT * from question_display");
$result = mysqli_fetch_array($query);
$question = $result['main_question'];
$choice_one = $result['choice_one'];
$choice_two = $result['choice_two'];
$choice_three = $result['choice_three'];
$choice_four = $result['choice_four'];
?>
<div class="questionaire">
	<span><?php echo $question; ?></span>
		</div>
		<div class="choice">
			<div class="choices"><span onclick="pop('<?php echo $choice_one; ?>')"><?php echo $choice_one; ?></span> </div>
		<div class="choices"><span onclick="pop('<?php echo $choice_two; ?>')"><?php echo $choice_two; ?></span></div>
		<div class="choices"><span onclick="pop('<?php echo $choice_three; ?>')"><?php echo $choice_three; ?></span></div>
		<div class="choices"><span onclick="pop('<?php echo $choice_four; ?>')"><?php echo $choice_four; ?></span></div>
		</div>
<?php
}else{
	?>
	<div class="questionaire">
		<form action="question_hard.php" method="POST">
	<span><?php echo $qhard; ?></span>
		</div>
		<div class="choice">
		<div class="choices">
		</div>
		<?php
}
}

?>
