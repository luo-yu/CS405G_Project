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
    <th align="center">Order ID</th>
	<th align="center">Item Name</th>
	<th align="center">Quantity</th>
    <th align="center">Total</th>
    <th align="right">Customer Name</th>
  
    <th align="center">Shipping Address</th>
	<th align="center">Billing Address</th>
	<th align="center">Ship this Order</a></th>
  
  </tr></thead>
<tbody>';

// Make the query:
$q = 'SELECT I.item_id, I.item_name, C.quantity, O.order_id, O.total_price,U.name,O.order_date, O.shipping_address, O.billing_address FROM user as U,  places as P, orders as O, contains as C, items as I WHERE U.user_id = P.user_id AND P.order_id = O.order_id AND C.order_id = O.order_id AND C.item_id = I.item_id';

$r = mysqli_query($connection, $q);
while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {
	echo '<tr>
	 <td align="center"><a href="view_order.php?item_id=' . $row['item_id'] . '">' . $row['item_id'] . '</a></td>
    <td align="center"><a href="view_order.php?order_id=' . $row['order_id'] . '">' . $row['order_id'] . '</a></td>
	
	<td align="center">' . $row['item_name'] .'</td>
	<td align="center">' . $row['quantity'] .'</td>
	
    <td align="center">$' . $row['total_price'] .'</td>
    <td align="right"><a href="view_customer.php?user_id=' . $row['user_id'] . '">' . htmlspecialchars( $row['name']) .'</a></td>
    
    <td align="center">' . $row['shipping_address'] .'</td>
    <td align="center">' . $row['billing_address'] .'</td>
    
	<td align="center"><a href="delete_record.php?action=delete&id=' . $row['order_id'] . '">Ship</a></td>
  </tr>';
 
}

echo '</tbody></table>';


?>

<script src="/js/jquery.dataTables.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript"> 
// Enable Datatables:
$(function() { 
    $("#orders").dataTable();

}); 
</script>
