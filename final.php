
<style type="text/css">
.list{
	width: 100%;
  background: white;
}
.image_name{
	width: 90%;
	margin: auto;
	height: 60px;
	padding: 5px;
	border-bottom: .5px solid rgba(25,25,25,.5);

}
.img img{
	width: 60px;
	height: 60px;
	border-radius: 100%;
}
.img{
	width: 18%;
	height: 60px;
	display: inline-block;
	
}
.name{
width: 75%;
display: inline-block;
position: relative;
bottom: 25px;
text-align: left;
padding: 10px;

left: 0px;
border-radius: 5px;
}

</style>
<?php
include("connection.php");

$query = mysqli_query($conn,"SELECT * from winner order by counting desc ");

?>

<?php
$count=1; 
while($row=mysqli_fetch_array($query)){ 
	?>
<div class="list" style=""> 
	<div class="image_name" style="width: 100%;">

<label>
				<div  style="word-wrap: break-word;color: red"><?php echo $count; ?></div>
			</label>		
		<div class="img" style="width: 45%;">

			<img src="images/<?php echo $row['pic']; ?>" style="float: right; ">
		</div>
		<div class="name" style="width: 45%;">
			<label>
				<div  style="word-wrap: break-word;color: red"><?php echo $name=$row['fname']; ?></div>
			</label>
			<label>
				<div  style="word-wrap: break-word;color: red"> Score:<?php echo $row['counting']; ?></div>
			</label>
		</div>			
	</div>

<?php
$count ++;
}


?>	
	
</div>
