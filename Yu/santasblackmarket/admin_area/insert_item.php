
<!DOCTYPE html>


<?php

include ("includes/db.php");

?>

<html lang="en">
<head>
<meta charset="utf-8">
<title>Inserting Items</title>
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>

<link rel="stylesheet" href="styles/style.css" media ="all" />
</head>

<body bgcolor="#00CED1">


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

</body>
</html>

<?php
	/* If the submit (a insert) button is clicked
	*/
	if(isset($_POST['insert_post'])){
		
		/*Getting the text data from the fields*/
		$item_name = $_POST['item_name'];
		$item_category = $_POST['item_category'];
		
		$item_price = $_POST['item_price'];
		$item_description = $_POST['item_description'];
		
		/*Getting the image from the field*/
		$item_image = $_FILES['item_image']['name'];
		$item_image_tmp=$_FILES['item_image']['tmp_name'];
		
		/*Upload the file to the admin_area's item_images folder*/
		move_uploaded_file($item_image_tmp, "item_images/$item_image");
		
		/*Insert the new information into the database*/
		$insert_item = "insert into items (item_name,item_category,item_price,item_description,item_image) values ('$item_name','$item_category','$item_price','$item_description','$item_image')";	
		
		$insert_pro=mysqli_query($con, $insert_item);
		
		if($insert_pro){
			echo "<script>alert('Item Has Been Inserted')</script>";
			echo "<script>window.open('insert_item.php','_self')</script>";
		}
		
	}

?>

















