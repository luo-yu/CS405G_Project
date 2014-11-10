
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Santa's Black Market - Home</title>

<link rel="stylesheet" href="../styles/style.css" media ="all" />
</head>

<body>

<?php 
include "staffSecurity.php";
?>


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
		
		<ul id="menu">
		<!--
			<li><a href="../functions/redirect.php?link=users">Home</a></li>
			<li><a href="../functions/redirect.php?link=userpdt">All Products</a></li>
			<li><a href="../functions/redirect.php?link=acct" >My Account</a></li>
			<li><a href="../functions/redirect.php?link=cart" >Shopping Cart</a></li>
			-->
			
			<li><a href="../functions/redirect.php?link=inv" >Check Inventory</a></li>
			<li><a href="../functions/redirect.php?link=order" >Check Orders</a></li>
			<li><a href="../index.php">Log-Out</a></li>
		</ul>
	
	
	</div>
	<!--Navigation starts-->
	
	<!--content wrapper starts-->
	<div class="content_wrapper">
	Staff Options:
	<br>
	<a href="insert_item.php">Add Item</a>
	</div>
	<!--content wrapper ends-->

</div>
<!--Main container ends here -->

</body>
</html>