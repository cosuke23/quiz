<?php
session_start();

include("connection.php");
if (isset($_SESSION['id'])) {
	

$id = $_SESSION['id'];
$pass = $_SESSION['pass'];
$select = mysqli_query($conn,"SELECT * FROM user where id='$id' and pass='$pass'");
$result = mysqli_fetch_array($select);
$img=$result['pic'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<script type="text/javascript" src="jquery-3.2.1.js"></script>
<script type="text/javascript">
	$(document).ready(function(){




$(".out img").click(function(){
	$(".logout").slideToggle();
})

$(".pic img").on("mouseover", function(){
	$(".cover").show();
	$(".cover").on("mouseover", function(){
		$(".cover").show();
	});

})
$(".cover").on("mouseout", function(){
	$(".cover").hide();
})


$("#update").on("click",function(){
	$(".dis").show();

})

$(".close span").on("click",function(){
	$(".dis").hide();

})

$("#href").click(function(){

	$("#href").attr("href","");
})

	})
</script>
<style type="text/css">
body{
	margin:0px;
font-family: corbel;
background: url(images/think.jpg);
background-size: cover;
/*background: rgb(245,245,245);*/
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
	
	.log{
		position: absolute;
		right: 50px;
		top: 50px;
	}
	.out{
		color: white;
	}
	.main{
		width: 800px;
  margin: auto;
	}
	.sub{
		
	}
	
	.questionaire{
		width: 100%;
	background: rgba(0,0,0,.5);
		margin-top: 30px;
		word-wrap: break-word;
		text-align: center;
		padding: 25px;
color:white;
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		 border-radius: 3px;

	}
	.questionaire span{
		font-size: 25px;
		font-weight: bold;

	}
	.choice{
		margin-top: 10px;
		margin-right: 120px;
		margin-left: 140px;
		
	}
	.choices{
		text-align: center;
		word-wrap: break-word;
	}
	.choices span{
		margin-top: 10px;
		padding: 20px;
background:rgba(0,0,0,.5);
		display: block;
		color: white;
		text-decoration: none;
		
		 font-size: 19px;
	  
	}
	.choices span:hover{
	/*	background: rgba(0,0,0,.7);*/
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
	
.choice a:hover{
	

}

.nameandpic{
	width: 100px;
	height: 100px;
	text-align: center;

}
.level{
	position: absolute;
	width: 100%;
	top: 0px;
}
header{
	width: 100%;
background:rgba(26, 26, 26,.5);
	position: relative;

}
.wi{
	width: 500px;
	margin: auto;
}

.progress{
	text-align: center;
	font-size: 25px;


}
.pic img{
	width: 60px;
	height: 60px;
	border-radius: 100%;
}
.pic{
position: relative;
top: 15px;
}
.name{
position: relative;
top: 12px;
font-size: 13px;
color: white;
}
.logout::after{
content: "";
    position: absolute;
   left: 70%;
    bottom: 100%;
    margin-left: 0px;
    border-width: 7px;
    border-style: solid;
    border-color: transparent transparent white transparent;
}
.logout{
position: absolute;
right: 40px;
top: 160px;
box-shadow: 1px 2px 4px rgba(0, 0, 0, .2);
background: white;
display: none;
}

ul{
	list-style-type: none;
	margin: 0px;
	padding: 0px;
}
ul li a{
	font-size: 13px;
	padding: 15px;
	text-align: center;
	display: block;
	text-decoration: none;
	color: black;
	font-weight: bold;
   
}
ul li a:hover{
	background:rgb(248,248,248);
} 
.log .out img{
		width: 9px;
		height: 9px;
		padding: 5px;
		cursor: pointer;
	}
#cha{
	border-bottom: .2px solid rgba(26,26,26,.3);
}
.cover{
	position: absolute;
	top: 0px;
	left: 20px;
	border-radius: 100%;
	width: 60px;
	height: 60px;
	background: rgba(0,0,0,.5);
	display: none;	
}
.main_cover span{
color: white;
background: rgba(0,0,0,.7);
padding: 4px;
font-size: 14px;
border-radius: 5px;
line-height: 60px;
cursor: pointer;

}
.loader {
	position: absolute;
	top: 50%;
	left: 47%;
  border: 10px solid #f3f3f3;
  border-radius: 50%;
  border-top: 10px solid rgba(0,0,0,.5);;
  width: 50px;
  height: 50px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
.mainloader{
	position: absolute;
	top: 0px;
	height: 100vh;
	width: 100%;
	background-color: rgba(0,0,0,.4);
	z-index: 3;
	display: none;
}
.dis{
	width: 100%;
	height: 100vh;
	background-color: rgba(0,0,0,.8);
	position: absolute;
	z-index: 5;
	top: 0px;
    display: none;
}
.main_dis{
	width: 40%;
	height: 100vh;

	position: relative;
	left: 30%;
	}
	.form{
		background-color: rgba(255,255,255,.8);
		padding: 20px;
		position: relative;
		top: 250px;
	}
	.inputs{

		padding: 20px;
		text-align: center;
	}
	.file{
  padding: 10px;
	}
	.submit{
padding: 10px;

	}
	.inputs input{
		padding: 10px;
		border: none;
      
	}
	.close{
		display: block;
		text-align: right;
	}
	.close span{
		font-weight: bolder;
		color: rgb(100,100,100);
		padding: 10px;
		cursor: pointer;
	}
	.close span:hover{
		color: black;
	}
	h1{
		color: white;
	}
</style>
<body>
	<div class="dis">
		<div class="main_dis">
			<div class="form">
				<div class="close">
					<span>x</span>
				</div>
				<form action="upload.php" method="POST" enctype="multipart/form-data">
					<div class="inputs"> 
						<div class="file">
					<input type="file" name="fileToUpload">
					</div>
					<div class="submit">
					<input type="submit" name="su" value="Upload" style="	background:rgba(0,0,0,.9);
		color: white;">
				</div>
                     </div>

				</form>
			</div>
			
		</div>

     </div>
	<div class="mainloader">
		<div class="loader"></div>
	</div>
	<input type="hidden" id="hidden" value="<?php echo $result['level'] ?>">
	<div class="logos">
	<div class="logo"><h1><span>Q</span><span>U</span><span>i</span><span>z</span><label>.bee</label> </h1></div>
</div>
<header>
	<div class="profile">
			<div class="level">
		<div class="wi">
			<div class="progress">
				<h1>QUESTION</h1>
				
				</div>
			</div>
		</div>
		<div class="nameandpic">
		<div class="pic">
			<img src="<?php echo $img ?>">
			<div class="cover">
				<div class="main_cover">
					<span id="update">update</span>
				</div>
			</div>
		</div>
		<div class="name">
			<span><?php  echo $result['fname']; ?></span>
		</div>
		</div>
	
		<div class="log">
			<div class="out">
				<img src="images/log.png">
			</div>
		</div>
	</div>
</header>
<div class="logout">
	<div class="main_logut">
		<ul>
			<li><a href="#" id="cha">Change<br> Password</a></li>
			<li><a href="logout.php">Log out</a></li>
			
		</ul>
	</div>
</div>
<div class="main">
<div class="sub">
	<div class="question">
	<?php
include("final_question.php")
	?>
		</div>
		
</div>
</div>
</body>
<script type="text/javascript">
	function pop(choi){
		var choice = choi;

		$.ajax({
			url:"execute.php",
			method:"post",
			data:{
				choice:choice
			},
		
		})

	}
	

</script>
</html>
<?php
}else{
	header("location:index.php");
}
?>
