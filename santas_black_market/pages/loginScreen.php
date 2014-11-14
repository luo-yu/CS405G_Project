

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
			<li><a href="../includes/redirect.php?link=allpdctg">All Products</a></li>
			<li><a href="../pages/registerScreen.php">Register</a></li>
			<li><a href="../pages/loginScreen.php">Log-In</a></li>
		</ul>
	
	</div>
	<!--Navigation starts-->
	
	<!--content wrapper starts-->
	<div class="content_wrapper">
	
	<p>Please log in below.</p>
	<br>
	
	
	<form method="post" action="..\includes\login.php">
   	 Email:     
    	<br>
   	 <input type="text" name="username">
   	 <br>
   	 Password:     
   	 <br>
    	<input type="text" name="password">
    	<br>
    	<input type="submit" value="Log In" name="submit"> 
	</form>







	</div>
	<!--content wrapper ends-->

</div>
<!--Main container ends here -->

</body>
</html>