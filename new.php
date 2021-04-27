<?php

$conn = mysqli_connect('localhost','root','','quiz');

$query=mysqli_query($conn, "SELECT * from progress ORDER BY place");

while ($row=mysqli_fetch_array($query)) {
if ($row['place']==1) {
$place = 3;
$selectfirst = mysqli_query($conn, "SELECT number from progress where place=".$row['place']."");
$num = mysqli_fetch_array($selectfirst);
$finale = $num['number'] + $place;
$updatefirst=mysqli_query($conn, "UPDATE progress set number='$finale' where place = ".$row['place']."");
}
if ($row['place']==2) {
$place = 2;
$updatesecond=mysqli_query($conn, "UPDATE progress set number='$place' where place = ".$row['place']."");
}
if ($row['place']==3) {
$place = 1;
$updatethird=mysqli_query($conn, "UPDATE progress set number='$place' where place = ".$row['place']."");
}
echo $row['name']. $row['place']. "<br>";
}

?>