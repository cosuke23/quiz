
<?php
session_start();
if (isset($_SESSION['admin_id'])) {
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<script type="text/javascript">
	
</script>
<script type="text/javascript" src="jquery-3.2.1.js"></script>
<style type="text/css">
body{
	margin: 0px;
	background: url(images/think.jpg);
    overflow-y: hidden;
    font-family: corbel;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;

}
h1 span:first-child{
		background: rgba(26, 26, 26,.7);
		color: pink;
		margin: 2px;
		padding:5px;
	}
	h1 span:nth-child(2){
		background:rgb(179, 0, 0);
		color: pink;
		margin: 2px;
		position: relative;
		bottom: 10px; 
		padding:5px;
	}
		h1 span:nth-last-of-type(5){
		background: pink;
		color: green;
		margin: 2px;

		position: relative;
		bottom: 10px; 
		padding:5px;	
	}
		h1 span:nth-last-of-type(6){
		background: green;
		color: pink;
		margin: 2px;
		padding:5px;
	
	}
	h1 span:nth-last-of-type(4){
			background: yellow;
		color: pink;
		margin: 2px;
		padding:5px;
		}	h1 span:nth-last-of-type(2){
		background: rgb(26, 117, 255);
		color: pink;
		margin: 2px;
		padding:5px;
	}
	h1 span:nth-last-of-type(3){
	
		background:rgb(179, 0, 0);
		color: pink;
		margin: 2px;
		position: relative;
		bottom: 10px; 
		padding:5px;
	}
	h1 span:last-of-type{
	background: rgb(0, 204, 0);
		color: white;
		margin: 2px;
		padding:5px;
		position: relative;
		bottom: 10px; 
	}
	h1 span{
	text-shadow: 3px 3px 5px rgba(0,0,0,.8);
}
h1 label{
	display: inline;
	background: pink;
	padding: 5px;
	color: rgb(50,50,50);
}

}
	.input input{
		width: 100%;
		height: 36px;
     background:#404040;
     border: none;
     color: white;
     padding-left: 10px;
     border-radius: 2px;
	}
	.search input:focus{
		outline: none;
	}
	.search{
		/*margin-right: 300px;
		margin-left: 300px;*/
		margin: auto;
		width: 680px;
		padding: 10px;

	}
	header{
		background:rgba(26, 26, 26,.8);
	}
	.input{
width: 100%;
		display: inline-block;
	}
	.main{
position: absolute;
height: 100%;
		overflow: scroll;
		width: 100%;
	}
.sulod{
width: 1200px;
margin: auto;
margin-top: 50px;


}
tbody{
background: white;
	}
	table{
			width: 100%;
		}
		table, td{

border-collapse: collapse;
		}

tr.hover{
	border: solid rgb(245, 245, 245);
}

			td{
				
				
				text-align: center;
		
			}
			th{
			text-align: center;
	padding-top: 20px;
	padding-bottom: 20px;
	background:rgba(26, 26, 26,.5);
	color:rgb(242, 242, 242);	

			}
			.question{
				width: 180px;
word-wrap: break-word;
max-width: 180px;
height: auto;
text-align: center;
}
.choices{
	width: 140px;
	word-wrap: break-word;
	max-width: 140px;
	text-align: center;
}
.correct{
	width: 120px;
	word-wrap: break-word;
	max-width: 120px;
	text-align: center;
}
.logos a{
text-decoration: none;
color: white;
padding: 5px;
margin-top: 5px;
float: left;
margin-left: 10px;
border-radius: 2px;
}
.logos span{
	text-decoration: none;
color: white;
padding: 5px;
margin-top: 5px;
float: left;
margin-left: 10px;
border-radius: 2px;
cursor: default;
}
.edit{
background: rgb(116, 69, 255);
}
.delete{
background:rgb(179, 0, 0);
}
.answer{
background:pink;
}
.log{
text-align: left;
padding: 10px;
}
.display{
background: rgb(0, 204, 0);
}
.add_delete{
	position: fixed;
	left: 20px;
	bottom: 50px;
}
.add img{
	background: rgb(26, 117, 255);
   width: 30px;
   height: 30px;
   border-radius: 100%;
   padding: 10px;
}
.add img:hover{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.del a img{
	width: 30px;
	height: 30px;
	border-radius: 100%;
	padding: 10px;
	background:rgb(179, 0, 0);

}
.del a img:hover{
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.modal_content{
width: 100%;
height: 100%;
background: rgba(0,0,0,.5);
position: fixed;
top: 0px;
display: none;
 

}
.modal{
	width: 1200px;
	margin: auto;
    
}
.main_modal{
	margin-right: 300px;
	margin-left: 300px;
	margin-top: 20px;
  display: none;
background: rgba(255,255,255,1);
border-top-left-radius: 5px;
border-top-right-radius: 5px;
	position: relative;
}
.inputs{
	padding: 20px;
	padding-right: 40px;
}
.inputs input[type=text]{
	width: 100%;
	height: 40px;
	margin: 5px;
	border: none;
	border: 1px solid pink;
	border-radius: 5px;
	padding-left: 10px;
}
.inputs input{
	outline:none;
}
.logos a:hover{
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.logos span:hover{
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.title_{
	width: 100px;
word-wrap: break-word;
max-width: 100px;
height: auto;
text-align: center;
}
h2{
	text-align: left;
	color: green;
	background: pink;
	margin: 0px;
	padding: 20px;
	border-top-left-radius: 5px;
border-top-right-radius: 5px;
}
[type=submit]{
	border: none;
	background: rgb(26, 117, 255);
	color: white;	
	padding: 10px;
	margin: 5px;
	border-radius: 5px;
	cursor: pointer;
}
.close{
position: absolute;
top: 0px;
right: 5px;
}
.close span{
color: white;
font-size: 25px;
cursor: default;
font-weight: bold;
}
.close span:hover{
	color: black;
}
.final_question{
	
	width: 1200px;	
	margin: auto;
	margin-top: 10px;

}
.heads span{
	margin: 0px;
	color: white;

	padding: 10px;
display: inline-block;
	border-bottom:2px solid rgba(20,20,20,.4); 
}
.heads{
background:pink;
width: 1246px;
   text-align: center;
   border-top-left-radius: 5px;
   border-top-right-radius: 5px;
}
.header{		
		background:green;
	}
	.table{
width: 379px;
margin: auto;
	}
	ul li{
		display: inline-block;
		list-style-type: none;
	}
	ul{
		padding: 0px;
		margin: 0px;
	cursor: pointer;
	}
	ul li a{
		padding: 20px;
		text-decoration: none;
		color: #b3b3b3;	
		display: inline-block;
		
	}
	ul li a:hover{
		color: white;
	}
</style>
<body>
<div class="menu"><div class="logos">
	<div class="logo"><h1><span>I</span><span>C</span><span>C</span><span>-</span><span>Q</span><span>U</span><span>i</span><span>z</span><label>.beehhh</label> </h1></div>
</div>
<div class="header">
	<div class="table">
	<div class="main_table">
		<ul><li><a href="admin.php" target="_blank">Questions </a></li>
		<li><a href="user.php"  target="_blank">Users</a></li>
	<li><a href="result.php"  target="_blank">Results</a></li></ul>
	</div>
	</div>
</div>

<div class="main">

<div class="final_question">
	<div class="heads"><span>Displayed Question </span></div>
<?php
include("display_hard.php");
?>
</div>


	<div class="sulod">
		<div class="heads"><span>Question Lists</span></div>
	<table>

		<thead>
		<tr><th style="width: 100px;">Question no</th>
			<th style="width: 100px;">Question Type</th>
			  <th style="width:80px;">Question title</th>
			  <th style="width: 100px;">Questions</th>
			   <th style="width:100px;">Correct answer</th>
			  <th><center>Action</center></th>
			</tr>
			</thead>
			<?php

$select = mysqli_query($conn,"SELECT * from identification order by question_no DESC");
       while ($result=mysqli_fetch_array($select)) {
    ?>
<tr class="hover">
	<td><div class="correct"><?php echo $result['id']; ?></div></td>
	<td><div class="correct"><?php echo $result['type']; ?></div></td>
	<td><div class="correct"><?php echo $result['question_title']; ?></div></td>
<td><div class="correct"><?php echo $result['question']; ?></div></td>
<td><div class="correct"><?php echo $result['answer']; ?></div></td>
<td class="log"><div class="logos">
	<a class="edit" href="admin.php?update=true&&question=<?php echo $result['main_question']; ?>">edit</a>
		<a href="delete.php?no=<?php echo $result['question_no']; ?>" class="delete">delete</a>
		<a href="dispaly_hq.php?type=<?php echo $result['type']; ?>&&question=<?php echo $result['question']; ?>&&title=<?php echo $result['question_title']; ?>&correct=<?php echo $result['answer']; ?>&&no=<?php echo $result['id']; ?>" class="display" style=" margin-bottom: 5px;">display</a>
</div></td>
			</tr>
    <?php

       }
			?>
			
	</table>
	<div style="height: 150px;"></div>
	</div>

</div>


</div>
<div class="add_delete">
	<div class="add"><img src="images/add.png"></div>
	<div class="del"><a href="deleteallquestion.php"><img src="images/delete.png"></a></div>
</div>
<!-- modal -->
<div class="modal_content">
<div class="modal">
	
	<div class="main_modal">
		<div class="close">
		<span>x</span>
	</div>
	<style type="text/css">
	.error_div{
margin: 5px;
display: none;
	}
		.error_div span{
	
    font-size: 15px;
    display: block;
    padding: 20px;
    text-align: center;
    color: red;

		}
		.update{
			margin-top: 5px;
		
		}
		
		.main_update{
			width: 600px;
			margin: auto;
			background: pink;
			border-radius: 5px;
		}
		.main_update h2{
			padding: 10px;
		}
		.main_update .error_div span{
			padding: 5px;
		}
		.inputs a{
			padding: 7px;
				background:rgb(179, 0, 0);
			color: white;
			border-radius: 5px;
			text-decoration: none;
		}
		.inputs label{
			font-size: 13px;
		}
	</style>
		<form action="submit_hard.php" method="POST">
			<h2>Add Questions</h2>
			<div class="inputs">
				<input type="text" name="type" value="hard"  required>
				<input type="text" name="question_title" placeholder="Question title..." required>
				<textarea name="question" style="width: 550px"></textarea>
				<input type="text" name="correct"  placeholder="Exact answer" required>
				<div class="error_div">

				</div>
				<input type="submit" name="submit" value="save">
			</div>
		</form>
	</div>

</div>
<?php
if (isset($_GET['update'])) {
	$question=$_GET['question'];
$choice_one=$_GET['choice_one'];
$choice_two=$_GET['choice_two'];
$choice_three=$_GET['choice_three'];
$choice_four=$_GET['choice_four'];
$correct=$_GET['correct'];
$title=$_GET['title'];
$num = $_GET['no'];


?>
<script type="text/javascript">
	$(".modal_content").fadeIn(500);
	$(".update").fadeIn(500)
</script>
<?php
}else{
	?>
<script type="text/javascript">
	$(".modal_content").fadeOut(500);
	$(".update").fadeOut(500)
</script>
<?php
}
?>
<div class="update">
	<div class="main_update">
		<form action="edit.php" method="POST">
			<h2>Update Questions</h2>
			<div class="inputs">
				<input type="hidden" name="number" value="<?php  echo $num; ?>">
<?php
if (isset($_GET['display'])) {
	$bool = $_GET['display'];
?>
<input type="hidden" name="bool" value="<?php echo $bool; ?>">
<?php
}
?>
				
<label>Question title</label>
				<input type="text" name="question_title" value="<?php echo $title  ?>" required>
				<label>Question</label>
				<input type="text" name="question"  value="<?php echo $question  ?>" required>
				<input type="submit" name="submit" value="save"><a href="admin.php">close</a>
			</div>
		</form>
	</div>
</div>
</div>
</body>
<script type="text/javascript">
$(document).ready(function(){
	$('.add').on("click", function(){
		$(".modal_content").fadeIn(500);
		$(".main_modal").slideDown(300);
		$(".update").css("display","none");

	
	})

	// $(".modal").click(function(){
	// 	$(".modal_content").fadeOut(1000);
	// 	$(".main_modal").slideUp(700);
	// })
	$(".close span").click(function(){
		$(".modal_content").fadeOut(500);
		$(".main_modal").slideUp(300);
	})


})
</script>
</html>
<?php
if (isset($_GET['error'])) {
		
		?>
       <script type="text/javascript">
       $(".modal_content").fadeIn(500);
		$(".main_modal").slideDown(300);
		$(".error_div").css("display","block");
		$("[name=correct]").css("border",".5px solid red");
		$(".update").css("display","none");
       </script>
		<?php
	}
	if (isset($_GET['errors'])) {
		?>
       <script type="text/javascript">
       $(".modal_content").fadeIn(500);
		$(".update").css("display","block");
		$(".error_div").css("display","block");
		$("[name=correct]").css("border",".5px solid red");
       </script>
		<?php
	}
}else{
header("location:mainadmin.php");
}
?>