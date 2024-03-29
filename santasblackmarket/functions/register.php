<?php


$unsafe_name = $_POST["name"];
$unsafe_password = $_POST["password"];
$unsafe_email = $_POST["email"];


//user entered data in all fields for registration? 
if( ($unsafe_name&&$unsafe_password)&&$unsafe_email){
	
//if so, connect
include 'sqlConnect.php';

//guard against bad input/sql injection:	//perhaps we can use PDO here in the future
$safe_name= mysqli_real_escape_string($link, $unsafe_name);
$safe_email= mysqli_real_escape_string($link, $unsafe_email);
$safe_password= mysqli_real_escape_string($link, $unsafe_password);

//input new user into database;
$sql="INSERT INTO user (name, email, password)
VALUES ('$safe_name', '$safe_email', '$safe_password')";

//redirect if failure for some reason
if (!mysqli_query($link,$sql)){
    header('Refresh: 3; URL=http://localhost/SantasBlackMarket/pages/registerScreen.php');
	echo "Registration FAILED.  Please choose different registration information.  Redirecting...";
}
//otherwise it was a successful registration, redirect to users homepage
else{
	header('Refresh: 3; URL=http://localhost/SantasBlackMarket/pages/users.php');
	echo "Registration successful. Redirecting...";
}

}
//user did not enter info into all fields for our user table:
else{
    header('Refresh: 3; URL=http://localhost/SantasBlackMarket/pages/registerScreen.php');
	echo "Registration FAILED.  Please enter ALL registration information.  Redirecting...";
}

?>