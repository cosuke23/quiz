<?php 


?>
<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

<body>
<!-- <div class="form">
<form action="login.php" method="post">
	<H1>LOG IN YOUR ACCOUNT</H1>
	STUDENT ID
	<input type="text" name="username" id="username" ><br><br>
		PASSWORD
		<input type="password" name="password" id="password" ><br><br>
		<input type="submit" name="submit" id="submit">
</form>
</div>
	
	
</form> -->
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
  <div class="form-group"> 
    
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
     <center> <button type="submit" class="btn btn-default wi">Log in</button> </center>
    </div>
  </div>
</form>
</div>
</body>
<style type="text/css">
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
	background: rgba(0,0,0,.5);
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
}
</style>
</html>