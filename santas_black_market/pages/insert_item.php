<?php require_once("../../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/layouts/header.php"); ?>

<div id="main">
  <div id="navigation">
	
		<a href="admin.php">&laquo; Main menu</a>
</ br>		
		<a href="index.php">+ Add a subject</a>
  </div>
  <div id="page">
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




    <ul>
    </ul>
  </div>
</div>


<!--Tried to use link to apply styles, but it does not seem to work on multi
lab. but it seems to work with embed style
-->
<style>

html { height: 100%; width: 100%; }
body {
  width: 100%; height: 100%; 
  margin: 0; padding: 0; border: 0;
  font-family: Verdana, Arial, Helvetica, sans-serif; 
  font-size: 13px; line-height: 15px;
  background: #EEE4B9;
}
img { border: none; }
a { color: #8D0D19; }
a:hover { color: #1A446C; }
	
#header { 
	height: 70px; 
	margin: 0; padding: 0; text-align: left; 
  background: #1A446C; color: #D4E6F4;
}
#header h1 { padding: 1em; margin: 0; }
#main { 
	height: 600px; width: 100%; 
	margin: 0; padding: 0; 
	background: #EEE4B9;
}
#footer { 
	clear: both;
	height: 2em; margin: 0; padding: 1em; 
	text-align: center; 
  background: #1A446C;  color: #D4E6F4;
}

/* Navigation */
#navigation { 
	float: left;
	width: 150px; height: 100%; 
	margin: 0; padding: 0 2em; 
	color: #D4E6F4; background: #8D0D19;
}
#navigation a { color: #D4E6F4; text-decoration: none; }
#navigation a:hover { color: #FFFFFF; }
ul.subjects { 
	margin: 1em 0; padding-left: 0; list-style: none;
}
ul.pages { padding-left: 2em; list-style: square; }
.selected { font-weight: bold; }

/* Page Content */
#page { 
	float: left; height: 100%;
	padding-left: 2em; vertical-align: top; 
	background: #EEE4B9;
}
#page h2 { color: #8D0D19; margin-top: 1em;}
#page h3 { color: #8D0D19; }


</style>


<?php

	//Logic to insert item to database

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
		move_uploaded_file($item_image_tmp, "http://www.cs.uky.edu/~ylu236/santas_black_market/public/item_images/$item_image");
		
		/*Insert the new information into the database*/
		$insert_item = "insert into items (item_name,item_category,item_price,item_description,item_image) values ('$item_name','$item_category','$item_price','$item_description','$item_image')";	
		
		$insert_pro=mysqli_query($connection, $insert_item);
		
		if($insert_pro){
			echo "<script>alert('Item Has Been Inserted')</script>";
			echo "<script>window.open('insert_item.php','_self')</script>";
		}
		
	}
?>


<?php include("../includes/layouts/footer.php"); ?>
