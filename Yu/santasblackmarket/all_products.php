
<!--same as the index page, not sure if we want to keep it or now -->
<!DOCTYPE html>


<?php

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
	
	</div>
	<!--Header ends here-->
	
	
	<!--Navigation starts-->
	<div class="menubar">
	
		<ul id="menu">
		
			<li><a href="index.php">Home</a></li>
			<li><a href="all_products.php">All Products</a></li>
			<li><a href="customer/my_account.php">My Account</a></li>
			<li><a href="#">Sign Up</a></li>
			<li><a href="#">Shopping Cart</a></li>
		</ul>
	
	</div>
	<!--Navigation starts-->
	
	
	
	
	<!--content_wrapper starts-->
	<div class="content_wrapper">
	
		<!--starts shopping_card-->
		<div id="shopping_cart">
			<span style="float:right; font-size: 18px; padding: 5px; line-height:40px;">Welcome Guest! <b style="color: yellow;">Shoppoing Cart - </b> Total Items - Total Price: <a href="cart.php" style="color: yellow;">Go to Cart</a>
			</span>
		
		</div>
		<!--ends shopping_card-->
		
		<div id="item_box">
		
		<?php 
		$get_pro="
		SELECT * 
		FROM items";
		//executing the query
		$run_pro=mysqli_query($con, $get_pro);
		
		
		while($row_pro= mysqli_fetch_array($run_pro)){
			$item_id = $row_pro['item_id'];
			$item_name = $row_pro['item_name'];
			$item_category = $row_pro['item_category'];
			$item_price = $row_pro['item_price'];
			$item_image = $row_pro['item_image'];
		
			echo "
				<div id='single_item'>
					
						<h3>$item_name</h3>
						
						<img src='admin_area/item_images/$item_image' width ='180' height ='180' />
						
						<p><b> $$item_price </b></p>
						
						<a href='details.php?pro_id=$item_id' style ='float:left;'>Details</a>
						
						
						<a href='index.php?pro_id=$item_id'><button style='float:right'/>Add to Cart</a>
				
				</div>
			
			
			";
	}//end while
		
		
		?>
		
		</div>
	</div>
	<!--content_wrapper ends-->
	
	
	<!--footer starts-->
	<div id="footer">
	
		<h2 style="text-align:center: padding-top: 30px;">&copy; 2014 by Miles and Yu</h2>
	</div>
	<!--Footer ends-->

</div>
<!--Main container ends here -->

</body>
</html>