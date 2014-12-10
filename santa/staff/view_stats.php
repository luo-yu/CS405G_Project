<?php require_once("../../includes/db_connection.php");

	session_start();
	//Redirect to login if user is not logged in
	if(isset($_SESSION['user_level']) && ($_SESSION['user_level'] == 51)){
		echo "Manager Logged In";
	}
	else{
		header("Location: http://www.cs.uky.edu/~ylu236/santa/staff/staff.php"); 
	}

 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Santa's Black Market| Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name ="description" content ="Santa's Black Market">
<meta name="keywords" content="">
<link rel="stylesheet" href="../css/main.css" type="text/css">
<link rel="shortcut icon" href="../images/favicon.ico?v=2" type="image/x-icon" />
</head>
<body>
<div id="wrapper">
	<div id="maincontent">		
	<div id="header">
		<div id="logo" class="left">
			<a href="staff.php"><img src="../images/logo.png" alt="SweetsComplete.Com"/></a>
		</div>
		<div class="right marT10">
			<b>
			<a href="../logout.php" >Log out</a> 
			</b>
		</div>
		<ul class="topmenu">
		<li><a href="staff.php">Home</a></li>	
		<li><a href="insert_item.php">Insert</a></li>
		<li><a href ="view_items.php">View Inventory</a></li>
		<li><a href ="view_orders.php">View Orders</a></li>
		<br>
		<li><a href ="view_stats.php">Stats-Admin Only</a></li>
		<li><a href ="promotion.php">Promote-Admin Only</a></li>
		</ul>
		<br>
		<div class="banner"><p></p></div>
		<br class="clear"/>
	</div> <!-- header -->
	</div>
</div>
</body>
</html>



<?php



// This file allows the administrator to view statistics


// Set the page title and include the header:
$page_title = 'View All Stats';

// The header file begins the session.

// Require the database connection:
require("../../includes/db_connection.php");


//Query last week's total revenue for each item 
echo '<h3>View Statistics</h3><table border="0" width="100%" cellspacing="4" cellpadding="4" id="orders">
<thead>
	<h2 align="center"><strong>Last Week\'s Total Revenue</strong></h2>
</thead>
<tbody>';

$q = "SELECT SUM(O.total_price) AS total_revenue FROM items I, contains C, orders O WHERE O.order_id = C.order_id AND C.item_id = I.item_id AND order_date BETWEEN timestamp(DATE_SUB(NOW(), INTERVAL 1 WEEK)) AND   timestamp(NOW())";

$r = mysqli_query($connection, $q);
while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {
	echo '<tr>
        <td align="center">$' . $row['total_revenue'] .'</td>
  </tr>';
 
}
echo '</tbody></table>';





//Query Last Month's Total Revenue
echo '<table border="0" width="100%" cellspacing="4" cellpadding="4" id="orders">
<thead>
	<h2 align="center"><strong>Last Month\'s Total Revenue</strong></h2>
  </thead>
<tbody>';



// Make the query: This query total revenue
$q = "SELECT SUM(O.total_price) AS total_revenue FROM items I, contains C, orders O WHERE O.order_id = C.order_id AND C.item_id = I.item_id AND order_date BETWEEN timestamp(DATE_SUB(NOW(), INTERVAL 1 MONTH)) AND   timestamp(NOW())";

$r = mysqli_query($connection, $q);
while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {
	echo '<tr>

        <td align="center">$' . $row['total_revenue'] .'</td>
  </tr>';
 
}
echo '</tbody></table>';



//Query Last year's total revenue;

echo '<table border="0" width="100%" cellspacing="4" cellpadding="4" id="orders">
<thead>
	<h2 align="center"><strong>Last Year\'s Total Revenue</strong></h2>
</thead>
<tbody>';



// Make the query: This query total revenue for each items
$q = "SELECT SUM(O.total_price) AS total_revenue FROM items I, contains C, orders O WHERE O.order_id = C.order_id AND C.item_id = I.item_id AND order_date BETWEEN timestamp(DATE_SUB(NOW(), INTERVAL 1 YEAR)) AND   timestamp(NOW())";

$r = mysqli_query($connection, $q);
while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {
	echo '<tr>
        <td align="center">$' . $row['total_revenue'] .'</td>
  </tr>';
 
}

echo '</tbody></table>';


//Query total number of items sold Last Year
echo '<table border="0" width="100%" cellspacing="4" cellpadding="4" id="orders">
<thead>
	<h2 align="center"><strong>Total Number of Items Sold Last Year</strong></h2>

	</thead>
<tbody>';

$q = "SELECT SUM(C.quantity) AS total_quantity FROM items I, contains C, orders O WHERE O.order_id = C.order_id AND C.item_id = I.item_id AND order_date BETWEEN timestamp(DATE_SUB(NOW(), INTERVAL 1 YEAR)) AND timestamp(NOW())";

$r = mysqli_query($connection, $q);
while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {
	echo '<tr>
		
        <td align="center">' . $row['total_quantity'] .'</td>
  </tr>';
 
}

echo '</tbody></table>';

//Query total number of items sold Last Month
echo '<table border="0" width="100%" cellspacing="4" cellpadding="4" id="orders">
<thead>
	<h2 align="center"><strong>Total Number of Items Sold Last Month</strong></h2>

	</thead>
<tbody>';

$q = "SELECT SUM(C.quantity) AS total_quantity FROM items I, contains C, orders O WHERE O.order_id = C.order_id AND C.item_id = I.item_id AND order_date BETWEEN timestamp(DATE_SUB(NOW(), INTERVAL 1 MONTH)) AND timestamp(NOW())";

$r = mysqli_query($connection, $q);
while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {
	echo '<tr>
		
        <td align="center">' . $row['total_quantity'] .'</td>
  </tr>';
 
}

echo '</tbody></table>';

//Query Total number of items sold Last Week
echo '<table border="0" width="100%" cellspacing="4" cellpadding="4" id="orders">
<thead>
	<h2 align="center"><strong>Total Number of Items Sold Last Week</strong></h2>

	</thead>
<tbody>';

$q = "SELECT SUM(C.quantity) AS total_quantity FROM items I, contains C, orders O WHERE O.order_id = C.order_id AND C.item_id = I.item_id AND order_date BETWEEN timestamp(DATE_SUB(NOW(), INTERVAL 1 WEEK)) AND timestamp(NOW())";

$r = mysqli_query($connection, $q);
while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {
	echo '<tr>
		
        <td align="center">' . $row['total_quantity'] .'</td>
  </tr>';
 
}

echo '</tbody></table>';


//Display total quantity sold for each item during last week
echo '<table border="0" width="100%" cellspacing="4" cellpadding="4" id="orders">
<thead>
	<h2 align="center"><strong>Total Number of Items Sold Last Week</strong></h2>
	<tr>
		<td align="center"><strong>Item ID</strong></td>
		<td align="center"><strong>Item Name</strong></td>
		<td align="center"><strong>Total Number of items sold Last Week</strong></td>
	
	</tr>
	</thead>
<tbody>';

$q = "SELECT I.item_id, I.item_name, SUM(C.quantity) AS total_quantity FROM items I, contains C, orders O WHERE O.order_id = C.order_id AND C.item_id = I.item_id AND order_date BETWEEN timestamp(DATE_SUB(NOW(), INTERVAL 1 WEEK)) AND timestamp(NOW()) GROUP BY I.item_id";

$r = mysqli_query($connection, $q);
while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {
	echo '<tr>
		<td align="center">' . $row['item_id'] .'</td>
		<td align="center">' . $row['item_name'] .'</td>
        <td align="center">' . $row['total_quantity'] .'</td>
  </tr>';
 
}

echo '</tbody></table>';


//Display total quantity sold for each item during last Month
echo '<table border="0" width="100%" cellspacing="4" cellpadding="4" id="orders">
<thead>
	<h2 align="center"><strong>Total Number of Items Sold Last Month</strong></h2>
	<tr>
		<td align="center"><strong>Item ID</strong></td>
		<td align="center"><strong>Item Name</strong></td>
		<td align="center"><strong>Total Number of items sold Last Week</strong></td>
	
	</tr>
	</thead>
<tbody>';

$q = "SELECT I.item_id, I.item_name, SUM(C.quantity) AS total_quantity FROM items I, contains C, orders O WHERE O.order_id = C.order_id AND C.item_id = I.item_id AND order_date BETWEEN timestamp(DATE_SUB(NOW(), INTERVAL 1 MONTH)) AND timestamp(NOW()) GROUP BY I.item_id";

$r = mysqli_query($connection, $q);
while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {
	echo '<tr>
		<td align="center">' . $row['item_id'] .'</td>
		<td align="center">' . $row['item_name'] .'</td>
        <td align="center">' . $row['total_quantity'] .'</td>
  </tr>';
 
}

echo '</tbody></table>';



//Display total quantity sold for each item during last year
echo '<table border="0" width="100%" cellspacing="4" cellpadding="4" id="orders">
<thead>
	<h2 align="center"><strong>Total Number of Items Sold Last Year</strong></h2>
	<tr>
		<td align="center"><strong>Item ID</strong></td>
		<td align="center"><strong>Item Name</strong></td>
		<td align="center"><strong>Total Number of items sold Last Week</strong></td>
	
	</tr>
	</thead>
<tbody>';

$q = "SELECT I.item_id, I.item_name, SUM(C.quantity) AS total_quantity FROM items I, contains C, orders O WHERE O.order_id = C.order_id AND C.item_id = I.item_id AND order_date BETWEEN timestamp(DATE_SUB(NOW(), INTERVAL 1 YEAR)) AND timestamp(NOW()) GROUP BY I.item_id";

$r = mysqli_query($connection, $q);
while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {
	echo '<tr>
		<td align="center">' . $row['item_id'] .'</td>
		<td align="center">' . $row['item_name'] .'</td>
        <td align="center">' . $row['total_quantity'] .'</td>
  </tr>';
 
}

echo '</tbody></table>';




//Display this year's top popular item
echo '<table border="0" width="100%" cellspacing="4" cellpadding="4" id="orders">
<thead>
	<h2 align="center"><strong>Last Year\'s Most Popular Items/strong></h2>
	<tr>
		<td align="center"><strong>Item ID</strong></td>
		<td align="center"><strong>Quantity Sold Last Year</strong></td>
	
	</tr>
	</thead>
<tbody>';

$q = "select distinct item_id, quantity from contains where quantity = (select MAX(quantity) from contains)";

$r = mysqli_query($connection, $q);
while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {
	echo '<tr>
		<td align="center">' . $row['item_id'] .'</td>
        <td align="center">' . $row['quantity'] .'</td>
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
/script>
