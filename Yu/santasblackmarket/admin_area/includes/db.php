<?php 
$con = mysqli_connect("localhost","yu","","santasblackmarket");

//mysqli connection error check
if(mysqli_connect_error()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
