<?php
session_start();
if (isset($_SESSION['admin_id'])) {
	

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
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

li{
	list-style-type: none;
	font-size: 30px;
	padding: 15px;
	display: block;
	text-align: center;
    color: rgb(255,255,255);
    font-family: corbel;
}
ul{
	padding: 0px;
	margin: 0px;
}
.main_table{

}
.header{
	background:pink;
}
.winner_loser{
	width: 100%;
	height: 530px;
}
.marginall{
	height: 100%;
	width: 1000px;
	margin: auto;
	margin-top: 10px;
}
.winner{

	width: 400px;
	height: 100%;
	float: left;
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
}
.loser{
background:rgba(26, 26, 26,.5);
	width: 400px;
	height: 100%;
	float: right;
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
}
.head_winner{
		background: red;
	color: white;
}
.head_loser{
	background: rgba(26, 26, 26,.7);
	color: white;
}
.head{
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
}
.head h1{
	text-align: center;
	display: block;
	padding: 15px;
	margin: 0px;
}
.main_winner{
background: white;
height: 460px;
overflow-y: scroll;
}
::-webkit-scrollbar{

width:15px;
}
::-webkit-scrollbar-thumb{
	background:#BBB;
border:solid 2px #FFF;
border-radius: 10px;

}
</style>
<body>
<div class="main">
	<div class="logos">
	<div class="logo"><h1><span>I</span><span>C</span><span>C</span><span>-</span><span>Q</span><span>U</span><span>i</span><span>z</span><label>.beehhh</label> </h1></div>
</div>
<div class="header">
	<div class="table">
	<div class="main_table">
		<ul>
	<li>Results</li>
		</ul>
	</div>
	</div>
</div>
</div>
<div class="winner_loser">
	<div class="marginall">
		<div class="winner">
			<div class="head_winner head">
				<h1>Winners</h1>
			</div>
				<div class="main_winner">
					<?php
include("winner.php");
                  ?>
				</div>
		</div>
		<div class="loser">
			<div class="head_loser head">
				<h1 style="border-bottom: 1px solid rgba(255,255,255,.2)">Losers</h1>
					<div class="main_loser">
					<?php
include("loser.php");
                  ?>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php
}else{
	header("location:mainadmin.php");
}
?>