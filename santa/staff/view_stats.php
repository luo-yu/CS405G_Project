<?php

// This file allows the administrator to view a single order


// Set the page title and include the header:
$page_title = 'View All Orders';

// The header file begins the session.

// Require the database connection:
require("../../includes/db_connection.php");
echo '<h3>View Statistics</h3><table border="0" width="100%" cellspacing="4" cellpadding="4" id="orders">
<thead>
	<h2 align="center"><strong>Last two weeks\'s Sales</strong></h2>

	<tr>
	
    
	<th align="center">Order ID</th>
	<th align="center">Order Date</th>
	
    <th align="center">Total</th>
	


  
  </tr></thead>
<tbody>';



// Make the query:
$q = "SELECT * from orders where order_date >DATE_SUB(now(), interval 2 week) order by order_date";

$r = mysqli_query($connection, $q);
while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {
	echo '<tr>
	
	<td align="center">' . $row['order_id'] .'</td>	
	<td align="center">' . $row['order_date'] .'</td>
    <td align="center">$' . $row['total_price'] .'</td>
   
   
    
	
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
