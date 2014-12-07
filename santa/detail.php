<?php require_once("../includes/db_connection.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Santa's Black Market | Detail</title>
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
			<a href="login.php" >Login</a> 
			</b>
			<br />
			Welcome Guest		</div>
		<ul class="topmenu">
		<li><a href="index.php">Home</a></li>
		
		<li><a href="products.php">Products</a></li>
		
		</ul>
		<br>
		<div class="banner"><p></p></div>
		<br class="clear"/>
	</div> <!-- header -->
		
	<div class="content">	
	<br/>

<?php
		
		/* get product id selected by the customer
		and match to the item_id in the database. Display 
		the item_discription (which was not displayed on the home page*/	
		if(isset($_GET['pro_id'])){
			$product_id = $_GET['pro_id'];
			
			$get_pro="
				SELECT * 
				FROM items
				WHERE item_id = '$product_id'";
				
				
			//executing the query
			$run_pro=mysqli_query($connection, $get_pro);
		
		
		while($row_pro= mysqli_fetch_array($run_pro)){
			$item_id = $row_pro['item_id'];
			$item_name = $row_pro['item_name'];
			
			$item_price = $row_pro['item_price'];
			$item_image = $row_pro['item_image'];
			$item_description = $row_pro['item_description'];
		
			echo "
				<div id='single_item'>
					
						<h3>$item_name</h3>
						
						<img src='item_images/$item_image' width ='400' height ='300' />
						
						<p><b> $$item_price </b></p>
						
						
						<p>$item_description</p>
						
						
						<a href='".$_SERVER['HTTP_REFERER']."' products.php style ='float:left;'>Go Back</a>
						
						
						<a href='added.php?pro_id=$item_id'><button style='float:right'/>Add to Cart</a>  
						
				
				</div>
			
			
			"; 			
		}//end while
		}//end if
	?>
	
<br class="clear-all"/>
</div><!-- content -->
	
	</div><!-- maincontent -->

	<div id="footer">
		
	</div><!-- footer -->
	
</div><!-- wrapper -->

</body>
</html>

