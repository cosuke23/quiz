		<div class="log">
			<div class="out">
				<a href="logout.php"><img src=""></a>
			</div>
		</div>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<script type="text/javascript" src="jquery-3.2.1.js"></script>
<style type="text/css">
body{
	margin:0px;
}
	.out{
width: 479px;
background-size: 5000px; 		
	}
	.logos{
		
	}
	
	.header{		
		background:green;
	}
	.table{
width: 479px;
margin: auto;
	}
	body{
		background: url(images/think.jpg);
		background-size: cover;
background-attachment: fixed;
font-family: corbel;
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
	.search{
		width: 450px;
		position: relative;
		top: 100px;
		margin: auto;
		
      border-radius: 5px;
	}
	#search{
		width: 100%;
		height: 30px;
		background: rgba(26, 26, 26,.2);
		border: none;
		color: white;
		padding: 5px;
        font-family: corbel;
        font-size: 15px;
        border-radius: 3px;
	}
	#search:focus{
outline: none;
background: rgba(255,255,255,.1);
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

	.main{
		position: relative;
	}
	.login{
		width: 100%;
		height: 100%;
		position: fixed;
		background: green;
		z-index: 1;
		display: none;
	}
.form{
	width: 300px;
background: white;
	margin: auto;
	margin-top: 50px;
	padding: 20px;
	padding-right: 40px;
	border-radius: 4px;
}
.form form [type=text],[type=password]{
	width: 100%;
	height: 35px;
    padding-left: 20px;
    font-size: 16px;
    border: none;
    border: 1px solid gray;
   border-radius: 3px;
   font-family: corbel;
}
.inputs label{
display: block;
text-align: center;
color: rgb(38, 38, 38);
margin-bottom: 20px;
font-weight: bold;
}
.image img{
	width: 200px;
	height: 200px;
	border-radius: 100%;

}
.image{
	text-align: center;
	margin-bottom: 30px;
	margin-top: 30px;
}
input{
	outline: none;
}
#button{
background: rgb(0,204,0);
padding: 10px 15px 10px 15px;
border: 0px;
font-weight: bold;
color: white;
border-radius: 3px;
cursor: pointer;
font-family: corbel;
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
</style>
<body>
<div class="main">
<div class="logos">
	<div class="logo"><h1><span>I</span><span>C</span><span>C</span><span>-</span><span>Q</span><span>U</span><span>i</span><span>z</span><label>.bee</label> </h1></div>
</div>
<div class="login">
	<div class="modal">
		<div class="form">
		<form action="" method="POST">
			<div class="image">
				<img src="images/icc2.jpeg">
			</div>
			<div class="inputs">
			<input type="text" id="username" placeholder="Username.." name="username">
			<label>Username</label>
			<input type="password" id="password" placeholder="Password.." name="password">
			<label>Password</label>
<center><input type="submit" id="button" value="log in" name="log"></center>
			</div>
		</form>
		</div>
	</div>
</div>
<div class="header">
	<div class="table">
	<div class="main_table">
		<ul><li><a href="main_admin.php" target="_blank">Questions</a></li>
		<li><a href="user.php" target="_blank">Users</a></li>
	    <li><a href="result.php" target="_blank">Results</a></li>
	    <li><a href="final_result.php" target="_blank">Final Results</a></li></ul>
	</div>
	</div>
</div>
<div class="search">
	<div class="main_search">
		<div class="input"><input type="text" name="seacr" id="search" placeholder="search.."></div>
		<div></div>
	</div>
</div>
</div>
</body>
</html>
<?php

include("connection.php");

if (isset($_SESSION['admin_id'])) {
?>
<script type="text/javascript">
		$(".login").css("display","none");
</script>
<?php
}else{
?>
<script type="text/javascript">
	$(".login").css("display","block");
</script>
<?php
}

if (isset($_POST['log'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$query = mysqli_query($conn,"SELECT * from admin where username ='$username' and password='$password'");

$row = mysqli_fetch_array($query);
if ($row<=0) {
$error = "Invalid Username or Password";
}else{
session_start();
$_SESSION['admin_id']=$row['id'];
?>
<script type="text/javascript">
	window.location.href='main_admin.php';
</script>
<?php
}
}

?>