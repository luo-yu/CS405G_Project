<?php 
session_start();

/*

Need a different php file for the staff html files so that users cannot access certain admin or staff features.
*/
if( basename($_SERVER['HTTP_REFERER']) == "login.php" or 
	   basename($_SERVER['HTTP_REFERER']) == "loginScreen.php" or 
			basename($_SERVER['HTTP_REFERER']) == "staff.php" or
			basename($_SERVER['HTTP_REFERER']) == "inventory.php"or
			basename($_SERVER['HTTP_REFERER']) == "orders.php" 
			){
				echo $_SESSION['type']." Logged In ";
			}


else{
	header("location: /SantasBlackMarket/pages/loginScreen.php ");
	exit();		

}

?>