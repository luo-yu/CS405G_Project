

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Santa's Black Market - Home</title>

<link rel="stylesheet" href="../styles/style.css" media ="all" />
</head>

<body>


<!--Main container starts here -->
<div class="main_wrapper">
	<!--Header starts here-->
	<div class="header_wrapper">
		<img id="logo" src="../images/logo.jpg" />
	
	</div>
	<!--Header ends here-->
	
	
	<!--Navigation starts-->
	<div class="menubar">
	
		<ul id="menu">
			<li><a href="../index.php">Home</a></li>
			<li><a href="../functions/redirect.php?link=allpdctg">All Products</a></li>
			<li><a href="../pages/registerScreen.php">Register</a></li>
			<li><a href="../pages/loginScreen.php">Log-In</a></li>
		</ul>
	
	</div>
	<!--Navigation starts-->
	
	<!--content wrapper starts-->
	<div class="content_wrapper">
	
	<form method="post" action="..\functions\register.php">
	
   	 Please enter your first and last name:     
    	<br>
   	 <input type="text" name="name">
	    <br>
   	 Please enter your email address:     
    	<br>
   	 <input type="text" name="email">
		<br>
   	  Please choose a password:     
    	<br>
   	 <input type="text" name="password">
   	    <br>

  
    <input type="submit" value="Register" name="submit"> 
	</form>







	</div>
	<!--content wrapper ends-->

</div>
<!--Main container ends here -->

</body>
</html>