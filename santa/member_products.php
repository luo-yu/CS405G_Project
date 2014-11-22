<?php require_once("../includes/db_connection.php"); ?>
<!DOCTYPE HTML>
<!-- this file has the overall look and feel of the website -->
<html>
<head>
<title>Santa's Black Market | Member Products</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name ="description" content ="Sweets Complete">
<meta name="keywords" content="">
<link rel="stylesheet" href="css/main.css" type="text/css">
<link rel="shortcut icon" href="images/favicon.ico?v=2" type="image/x-icon" />
</head>
<body>

<div id="wrapper">
	<div id="maincontent">
		
	<div id="header">
		<div id="logo" class="left">
			<a href="index.php"><img src="images/logo.png" alt="SweetsComplete.Com"/></a>
		</div>
		<div class="right marT10">
			<b>
			<a href="index.php" >Log out</a> |<a href="members.php" class="active.php" >Our Members</a> |<a href="cart.php" >Shopping Cart</a>
			</b>
			<br />
			Welcome Guest		</div>
		<ul class="topmenu">
		<li><a href="members.php">Home</a></li>
		<li><a href="member_products.php">Products</a></li>
	
		</ul>
		<br>
		<div class="banner"><p></p></div>
		<br class="clear"/>
	</div> <!-- header -->
		
	<div class="content">

<div id="leftnav">
	<div class="search">

		<form name="search" method="get" action="search.php" id="search">
			<input type="text" value="keywords" name="keyword" class="s0" />
			<br />
			<select name="title" class="s2">
			<option value="00000019"> Toys</option><option value="00000034">Games</option></select>
			<br />
			<input type="submit" name="search" value="Search Products" class="button marT5" />
			<input type="hidden" name="page" value="search" />
		</form>
		<br /><br />
		
		<h3>About Us</h3><br/>
		<p class="width180">
		
		<h1>Santa actually does not sell his stuff</h1>
		</p>
	</div>
</div><!-- leftnav -->


<div id="rightnav">

<div class="product-list">
		<h2>Our Products</h2>
		
		<div id="item_box">
		
		<?php 
		//Display all the products in the item table
		$get_product="
		SELECT * 
		FROM items";
		//executing the query
		$run_pro=mysqli_query($connection, $get_product);
		
		/*
		The temporary variables are connected to the field name
		in the table items. The name inside of the [] is the field name
		From the table items
		*/
		while($row_pro= mysqli_fetch_array($run_pro)){
			$item_id = $row_pro['item_id'];
			$item_name = $row_pro['item_name'];
			$item_category = $row_pro['item_category'];
			$item_price = $row_pro['item_price'];
			$item_image = $row_pro['item_image'];
		
			/*
			Displays the table onto the page by include html code inside the 
			php code using quotes
			*/
			echo "
				<div id='single_item'>
					
						<h3>$item_name</h3>
						
						<img src='item_images/$item_image' width ='180' height ='180' />
						
						<p><b> $$item_price </b></p>
						
						
						<a href='detail.php?pro_id=$item_id'>Details</a>
						
						
						<a href='added.php?pro_id=$item_id'><button/>Add to Cart</a>
				
				</div>
			
			
			";
	}//end while
		
		
		?>
		
		</div>
		
		
		
	</div><!-- product-list -->
	
	
</div><!-- rightnav -->

<br class="clear-all"/>
</div><!-- content -->
	
	</div><!-- maincontent -->

	<div id="footer">
		
	</div><!-- footer -->
	
</div><!-- wrapper -->

</body>
</html>

