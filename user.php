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
		color: white;
		margin: 2px;
		padding:5px;
	}
	h1 span:nth-child(2){
		background:rgb(179, 0, 0);
		color: white;
		margin: 2px;
		position: relative;
		bottom: 10px; 
		padding:5px;
	}
	h1 span:nth-last-of-type(2){
		background: rgb(26, 117, 255);
		color: white;
		margin: 2px;
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
	background: white;
	padding: 5px;
	color: rgb(50,50,50);
}

::-webkit-scrollbar{

width:15px;
}
::-webkit-scrollbar-thumb{
 background:#404040;


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
		background:rgba(26, 26, 26,.5);
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
		top: 0px;
		bottom: 0px;
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
		background:rgba(26, 26, 26,.5);
border-collapse: collapse;
		}

tr.hover{
	border: 2px solid rgb(245, 245, 245);
}

			td{
				
				
				text-align: center;
		
	padding: 10px;
			}
			th{
			text-align: center;
	padding-top: 20px;
	padding-bottom: 20px;
	background:green;
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
background: rgb(26, 117, 255);
}
.delete{
background:rgb(179, 0, 0);
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
	box-shadow: 3px 3px 3px 3px rgba(0,0,0,.3);
}
.inputs{
	padding: 20px;
	padding-right: 40px;
}
.inputs input[type=text], [type=number]{
	width: 100%;
	height: 40px;
	margin: 5px;
	border: none;
	border: 1px solid grey;
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
	color: white;
	background: rgb(26, 117, 255);
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
background:rgba(26, 26, 26,.5);
   text-align: center;
   border-top-left-radius: 5px;
   border-top-right-radius: 5px;
}
.header{		
		background:rgba(26, 26, 26,.5);
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
			background: white;
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
		.title_ img{
			width: 180px;
			height: 180px;
		}

</style>
<body>
	<div class="main">
	<div class="sulod">
		
	<table>

		<thead>
		<tr>
			  <th>Image</th>
			  <th style="width: 180px;">Full name</th>
			  <th style="width:140px;">Course</th>
			  <th style="width:140px;">Year</th>
			  <th style="width:140px;">Id</th>
			  <th style="width:140px;">Pass</th>
			
			  <th style="width:100px;"><center>Action</center></th>
			</tr>
			</thead>
			<?php
$select = mysqli_query($conn,"SELECT * from user");
       while ($result=mysqli_fetch_array($select)) {
    ?>
<tr class="hover">

				<td><div class="title_"><img src="images/<?php echo $result['pic']; ?>"></div></td>
				<td><div class="question"><?php echo $result['fname'] . " " . $result['lname']; ?></div></td>
<td><div class="choices"><?php echo $result['course']; ?></div></td>
<td><div class="choices"><?php echo $result['year']; ?></div></td>
<td><div class="choices"><?php echo $result['id']; ?></div></td>
<td><div class="choices"><?php echo $result['pass']; ?></div></td>

<td class="log"><div class="logos">

		<a href="delete_user.php?no=<?php echo $result['id']; ?>" class="delete">delete</a>
</div></td>
			</tr>
    <?php

       }
			?>
			
	</table>
	<div style="height: 150px;"></div>
	</div>

</div>


<div class="add_delete">
	<div class="add"><img src="images/add.png"></div>
	<div class="del"><a href="deleteall.php"><img src="images/delete.png"></a></div>
</div>

<div class="modal">
<div class="main_modal">
		<div class="close">
		<span>x</span>
	</div>
	
		<form action="submit_user.php" method="POST">
			<h2>Add user</h2>
			<div class="inputs">
				<select name="team" required>
					<option value="none">Choose a team</option>
					<option value="A">Team A</option>
					<option value="B">Team B</option>
					<option value="C">Team C</option>
					<option value="D">Team D</option>
					<option value="D">Team E</option>
					<option value="D">Team F</option>
					<option value="D">Team G</option>
					<option value="D">Team H</option>
					<option value="D">Team I</option>
				</select>
				<input type="number" name="id" placeholder="student ID" required autocomplete="off">
				<input type="text" name="fname"  placeholder="Firstname" required>
					<input type="text" name="lname"  value="Lastname" required>
				<input type="text" name="course"  value="Course" >
				<input type="text" name="year" value="Year" >
				<input type="text" name="password" placeholder="Password" required>
				<input type="submit" name="submit" value="save">
			</div>
		</form>
	</div>
</div>

<!-- 	<center>
	<form action="tae.php" method="post">
	<H1>USER'S DATA </H1>
	ID
<input type="number" name="id" ><br><br>
Firstname
<input type="text" name="fname" ><br><br>
Lastname
<input type="text" name="lname" ><br><br>
Course
<input type="text" name="course" ><br><br>
Username
<input type="text" name="username" ><br><br>
Password
<input type="text" name="password" ><br><br>
<input type="submit" name="submit" value="submit">
</form>
</center> -->

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
}else{
	header("location:mainadmin.php");
}

 ?>
