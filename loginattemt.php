<?php 


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

<body>
<!-- 	<center>
<form action="login.php" method="post">
	<H1>LOG IN YOUR ACCOUNT</H1>
	STUDENT ID
	<input type="text" name="username" id="username" ><br>

	<br>
		PASSWORD
		<input type="password" name="password" id="password" ><br><br>
			<i>invalid username or password</i><br>
		<input type="submit" name="submit" id="submit">

</form>
</center> -->
	<div class="width">
		<div class="logo">
					<div class="img">
						<img src="images/k.png">
					</div>
				</div>
<form class="form-horizontal center" role="form" action="login.php" method="post">
  <div class="form-group">
    
    <div class="col-sm-10">
      <input type="number" name="username" class="form-control out" id="email" autocomplete="off" placeholder="Enter Student Id">
    </div>
  </div>
  <div class="form-group">
    
    <div class="col-sm-10"> 
      <input type="password" name="password" class="form-control out" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group s"> 
    <span>invalid username or password</span><br>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
   <center>   <button type="submit" class="btn btn-default wi" value="Log in">Log in</button></center>
    </div>
  </div>
</form>
</div>
	
</form>
</body>
<style type="text/css">
body{
	background-image: url(blur.jpg);
}
	
#username{
		margin-top: 35px;
		
		height: 40px;
		font-size: 20px;
        border: .5px solid red;
}

#password{
	
	height: 40px;
	font-size: 20px;
	border: .5px solid red;
}

#submit{
	height: 40px;
	width:120px;
	margin-left: 20px;
	font-size: 30px;
	

}
span{
	color: #fb1818;
	padding: 10px;
	border: 1px solid #fb1818;
}
.logo{
	width: 100%;
    padding: 0px 0px 40px 0px;

}
.img{
	width: 240px;
	height: 240px;
	margin: auto;

}
body{

	margin:0px;
font-family: corbel;
background: url(images/beacharch.jpg);
background-size: cover;

background-repeat: no-repeat;
}
.width{
	width: 450px;
	margin: auto;
	margin-top: 15vh;
	background: rgba(0,0,0,.3);
	padding: 50px;
	box-shadow: 1px 1px 2px rgba(0,0,0,.2), 0 0 25px rgba(0,0,0,.2), 0 0 5px rgba(0,0,0,.2);
}
.center{

	
}
#labl{
	width: 100px;
}
.out:focus{
	outline: none;
	box-shadow: none;

}
.out{
	border-radius: 2px;
}
.wi{
	padding: 5px;
	background-color: rgba(255,255,255,.7);
   border-radius: 2px;
}
.col-sm-10{
	margin: auto;

}
input{
	font-family: "Segoe UI Symbol";
		border: 1px solid #f56565;
}
.s{
	text-align: center;
}
</style>
</html>