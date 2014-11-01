<?php


$user_name = $_POST["username"];
$password = $_POST["password"];
$dbpassword = '';
$dbusername = '';

//did they enter the pswd and email?
if($user_name&&$password){

//if so, connect
include 'sqlConnect.php';

//query their info
$query = mysqli_query($link, "SELECT * FROM user WHERE 
email='$user_name' AND password='$password'");

$numrows = mysqli_num_rows($query);


//check for log in status, perform check on the the row [status]
if ($numrows!=0)
{
	$row = mysqli_fetch_array($query);
	/*
	hey judy if you read this, here i used a delay on purpose so that the user has some sort of confirmation that his/her log-in was successful.  
	going straight to the new user page was almost instantaneous, and leaves the user wondering if the login was successful, so i put a delay in on purpose.
	*/


	//if admin, then redirect to admin home screen:
	if((int)$row['user_level'] == 2){
	header('Refresh: 3; URL=http://localhost/SantasBlackMarket/logged/admin.php');
	echo "Log in successful. Redirecting...";
	}
	
	//if staff, then redirect to staff home screen:
	if( (int)$row['user_level'] == 1){
	header('Refresh: 3; URL=http://localhost/SantasBlackMarket/logged/staff.php');
	echo "Log in successful. Redirecting...";
	}	
	
	

	//if user, then redirect to users home screen:
	if((int)$row['user_level'] === 0){
	header('Refresh: 3; URL=http://localhost/SantasBlackMarket/logged/users.php');
	echo "Log in successful. Redirecting...";
	}
	

	
} 
//otherwise there was no user with the specified log in info
else{
    header('Refresh: 5; URL=http://localhost/SantasBlackMarket/login.php');
	echo "LOG IN FAILED.  Re-enter your email and password. Redirecting to login screen...";
	
}
}
?>