<?php
include("connection.php");
?>
<table>

		<thead>
		<tr>
			  <th style="width:100px;">Question title</th>
			  <th style="width: 180px;">Questions</th>
			   <th style="width:120px;">Correct answer</th>
			  <th><center>Action</center></th>
			</tr>
			</thead>
			<?php
		//	$num=rand(0,10);
		//	$no=$num;

		//	$no=$_POST['que_no'];
		//	if($no ==0 ){

$select = mysqli_query($conn,"SELECT * from final_questions ");
		//	}else{
//$select = mysqli_query($conn,"SELECT * from question_display where question_no = $no");
		//	}

       while ($result=mysqli_fetch_array($select)) {
    ?>
<tr class="hover">

				<td><div class="title_"><?php echo $result['id']; ?></div></td>
<td><div class="correct"><?php echo $result['question']; ?></div></td>	
<td><div class="correct"><?php echo $result['correct_ans']; ?></div></td>
<td class="log"><div class="logos">
	<a href="answer.php?type=<?php echo $type ?>" class="answer">View Answer</a>
	<a class="edit" href="admin.php?display=true&&update=true&&question=<?php echo $result['main_question']; ?>&&choice_one=<?php echo $result['choice_one']; ?>&&choice_two=<?php echo $result['choice_two']; ?>&&choice_three=<?php echo $result['choice_three']; ?>&&choice_four=<?php echo $result['choice_four']; ?>&&correct=<?php echo $result['answer'];?>&&title=<?php echo $result['question_title'];?>&&no=<?php echo $result['question_no']; ?>">edit</a>
		<a href="clear.php" class="delete">clear</a>
		
</div></td>
			</tr>
    <?php

       }
			?>
			
	</table>