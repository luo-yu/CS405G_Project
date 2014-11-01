<?php

$email = $_POST["username"];
$password = $_POST["password"];


//did they enter the pswd and email?
if($email&&$password){

//if so, connect
include 'sqlConnect.php';

//query their email/username
$query = mysqli_query($link, "SELECT * FROM user WHERE 
email='$email'"); // AND password='$password'");


$numrows = mysqli_num_rows($query);


//check for log in status, perform check on the the row [status]
if ($numrows!=0)
{
	$row = mysqli_fetch_array($query);
	
	//check to see if user entered in correct password:
	if ($row['password'] == $password){

		/*
		hey judy if you read this, here i used a delay on purpose so that the user has some sort of confirmation that his/her log-in was successful.  
		going straight to the new user page was almost instantaneous, and leaves the user wondering if the login was successful, so i put a delay in on purpose.
		*/

		//if admin, then redirect to admin home screen:
		if((int)$row['user_level'] == 2){
		//include redirectAdminIndex.php;	//can use this instead of below for possible future mvc design
		header('Refresh: 2; URL=http://localhost/SantasBlackMarket/pages/admin.php');
		echo "Log in successful. Redirecting...";
		}
		
		//if staff, then redirect to staff home screen:
		if( (int)$row['user_level'] == 1){
		//include redirectStaffIndex.php;	//can use this instead of below for possible future mvc design
		header('Refresh: 2; URL=http://localhost/SantasBlackMarket/pages/staff.php');
		echo "Log in successful. Redirecting...";
		}	
		
		
		//if user, then redirect to users home screen:
		if((int)$row['user_level'] === 0){
		//include redirectUsersIndex.php;	//can use this instead of below for possible future mvc design
		header('Refresh: 2; URL=http://localhost/SantasBlackMarket/pages/users.php');
		echo "Log in successful. Redirecting...";
		}
	}
	//user in our system, but entered in wrong password:
	else{
		header('Refresh: 5; URL=http://localhost/SantasBlackMarket/pages/loginScreen.php');
		echo "LOG IN FAILED.  Incorrect password.  Please re-enter your email and password. Redirecting to login screen in 5 seconds...";
	}
} 
//otherwise there was no user with the specified log in info, or the user entered his email name incorrectly
else{

	
	header("Location: ../pages/error.php");
	exit();
	/*
	echo "LOG IN FAILED";
	echo "<br>";
	
	echo "You have entered an incorrect email, or you are not yet a registered customer."
	echo "<br>";
	
	//echo "If you have not yet registered, please 
	
	//you entered email incorrectly, try again? = login
	
	//you are in in the system, therefore register
	*/
	
	

}
}
?>