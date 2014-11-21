<?php require_once("../includes/db_connection.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Santa's Black Market| Home</title>
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
			<a href="login.php" >Login</a> |<a href="members.php" >Our Members</a> |<a href="cart.php" >Shopping Cart</a>
			</b>
		</div>
		<ul class="topmenu">
		<li><a href="index.php">Home</a></li>
		<li><a href="products.php">Products</a></li>
		
		</ul>
		<br>
		<div class="banner"><p></p></div>
		<br class="clear"/>
	</div> <!-- header -->
		
	<div class="content">
		
	<div class="product-list">
		
		
		
		<!--Script for the text area box-->
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>

<form action="insert_item.php" method="post" enctype="multipart/form-data">
	
		<table align="center" width="750" border="2" bgcolor="FFCCFF">
			
			<!-- Insert new Items by admins-->
			<tr align="center">
				<td colspan ="7"><h2>Insert New Item Here</h2></td>
			</tr>
			
			
			<tr>
				<td align="right"><b>Item Name: </b> </td>
				<td><input type="text" name="item_name" size ="60" required/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Category: </b> </td>
				<td><select name="item_category">
					<option value="">- Select -</option>
					<option value="Toys">Toys</option>
					<option value="Games">Games</option>
				</select></td>
				
				

			</tr>
			
			<tr>
				<td align="right"><b>Item image: </b> </td>
				<td><input type="file" name="item_image" required /></td>
			</tr>
			
			<tr>
				<td align="right"><b>Price:</b> </td>
				<td><input type="text" name="item_price" required /></td>
			</tr>
			
			<tr>
				<td align="right"><b>Description:</b> </td>
				<td><textarea name="item_description" cols="20" rows="10"></textarea></td>
			</tr>
			
			
			
			<tr align ="center">
				<td colspan="7"><input type="submit" name="insert_post" value ="Insert Item Now" /></td>
			</tr>
				
		</table>
	</form>



		
		
		
		
		
		
		
		
		
	</div><!-- product-list -->
	
	<br class="clear-all"/>
</div><!-- content -->
	
	</div><!-- maincontent -->

	<div id="footer">
	
	</div><!-- footer -->
	
</div><!-- wrapper -->

</body>
</html>
