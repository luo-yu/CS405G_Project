

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
		
			<li><a href="#">Home</a></li>
			<li><a href="#">All Products</a></li>
			<li><a href="#">My Account</a></li>
			<li><a href="#">Sign Up</a></li>
			<li><a href="#">Shopping Cart</a></li>
		</ul>
	
	</div>
	<!--Navigation starts-->
	
	<!--content wrapper starts-->
	<div class="content_wrapper">
	
	<form method="post" action="..\functions\login.php">
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