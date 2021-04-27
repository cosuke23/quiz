		<?php
		$qhard='what';
		$q_no=27;
		?>
		<form action="question_hard.php" method="POST">
	<span><?php echo $qhard; ?></span>
			<input type="text" name="question" value="<?php echo $qhard ?>" hidden> 
			<input type="text" name="q_no" value="<?php echo $q_no ?>" hidden>
			<input type="text" name="answer">
				<input type="submit" name="submit" value="save">
		</form>
