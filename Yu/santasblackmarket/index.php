
<!--This is the main index page, this is 
for the public to see. The Home Page -->

<!DOCTYPE html>


<?php
// This includes the functions.php under the folder
// named functions. This will let us be able to 
// use the functions defined in the functions.php file
include ("functions/functions.php");
?>

<html lang="en">
<head>
<meta charset="utf-8">
<title>Santa's Black Market - Home</title>

<link rel="stylesheet" href="styles/style.css" media ="all" />
</head>

<body>


<!--Main container starts here -->
<div class="main_wrapper">
	<!--Header starts here-->
	<div class="header_wrapper">
		<img id="logo" src="images/logo.jpg" />
	</div><!--Header ends here-->
	
	
	<!--Navigation starts-->
	<div class="menubar">
	
		<ul id="menu">
		
			<li><a href="index.php">Home</a></li>
			<li><a href="all_products.php">All Products</a></li>
			<li><a href="customer/my_account.php">My Account</a></li>
			<li><a href="#">Sign Up</a></li>
			<li><a href="#">Shopping Cart</a></li>
		</ul>
	
	</div><!--Navigation starts-->
	
	
	
	
	<!--content_wrapper starts-->
	<div class="content_wrapper">
	
		<!--starts shopping_card-->
		<div id="shopping_cart">
			<span style="float:right; font-size: 18px; padding: 5px; line-height:40px;">Welcome Guest!
			<b style="color: yellow;">Shoppoing Cart - </b> Total Items - Total Price: <a href="cart.php" style="color: yellow;">Go to Cart</a>
			</span>
		
		</div><!--ends shopping_card-->
		
		<!--calling the function getItem() inside the functions.php file -->
		<div id="item_box">
			<?php getItem(); ?>
		</div><!--ends item_box -->
	</div><!--content_wrapper ends-->
	
	
	<!--footer starts-->
	<div id="footer">
	
		<h2 style="text-align:center: padding-top: 30px;">&copy; 2014 by Miles and Yu</h2>
	</div><!--Footer ends-->

</div><!--Main container ends here -->

</body>
</html>