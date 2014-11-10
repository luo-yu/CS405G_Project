<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Inserting Items</title>

<link rel="stylesheet" href="styles/style.css" media ="all" />
</head>

<body bgcolor="#00CED1">

<?php 
include "staffSecurity.php";
?>


	<form action="insert_item.php" method="post" enctype="multipart/form-data">
		<table align="center" width="750" border="2" bgcolor="FFCCFF">
			
			<!-- Insert new Items by admins-->
			<tr align="center">
				<td colspan ="7"><h2>Insert New Item Here</h2></td>
			</tr>
			
			
			<tr>
				<td align="right"><b>Item Name: </b> </td>
				<td><input type="text" name="item_name" /></td>
			</tr>
			
			<tr>
				<td align="right"><b>Category: </b> </td>
				<td><input type="text" name="category" /></td>
			</tr>
			
			<tr>
				<td align="right"><b>Item image: </b> </td>
				<td><input type="text" name="category" /></td>
			</tr>
			
			<tr>
				<td align="right"><b>Price:</b> </td>
				<td><input type="text" name="item_name" /></td>
			</tr>
			
			<tr>
				<td align="right"><b>Description:</b> </td>
				<td><input type="text" name="item_name" /></td>
			</tr>
			
			
			
			
			<tr align ="center">
				<td colspan="8"><input type="submit" name="insert_post" value ="Insert Now" /></td>
			</tr>
				
		</table>
	</form>

</body>
</html>