<?php

// This file allows the administrator to view every order.


// Set the page title and include the header:
$page_title = 'View All Orders';

// The header file begins the session.

// Require the database connection:
//require(MYSQL);
require("../../includes/db_connection.php");
echo '<h3>View Orders</h3><table border="0" width="100%" cellspacing="4" cellpadding="4" id="orders">
<thead>
	<tr>
	<th align="center">Item ID</th>
    <th align="center">Item Name</th>
	<th align="center">Item Category</th>
	<th align="center">Item Price</th>
	<th align="center">Inventory</th>
	<th align="center">Update Inventory</th>  
  </tr></thead>
<tbody>';

// Make the query:
$q = "SELECT * from items";

$r = mysqli_query($connection, $q);
while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {
	echo '<tr>
	 <td align="center">'. $row['item_id'] . '</td>
   
	<td align="center">' . $row['item_name'] .'</td>
	<td align="center">' . $row['item_category'] .'</td>
	
    <td align="center">$' . $row['item_price'] .'</td>
   <td align="center">' . $row['inventory'] .'</td>
    <td align="center"><a href="update_inventory.php?id=' . $row['item_id'] . '">Update Inventory</a></td>
  
  </tr>';
 
}

echo '</tbody></table>';
//Delete row with item_id and order id from contains table, 
//update item quantity in items table

?>

<script src="/js/jquery.dataTables.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript"> 
// Enable Datatables:
$(function() { 
    $("#orders").dataTable();

}); 
</script>
