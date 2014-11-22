<?php 
	session_start();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Santa's Black Market| Checkout</title>
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

<?php



//Is the user visiting the checkout page for the first time, i.e. they are coming from cart.php
if (!( $_SERVER['REQUEST_METHOD'] == 'POST' )){	
	//Acquire user information for the order:
	echo "Your total is ".$_SESSION['checkout_total']."<br>";
	echo '<form action="checkout.php" method="post" >'.'<br>';
	echo "Please enter your email";
	echo "<input type='text' name='email'>"."<br>";
	echo "Please enter your billing address";
	echo "<input type='text' name='billing_address'>"."<br>";
	echo "Please enter your shipping address";
	echo "<input type='text' name='shipping_address'>"."<br>";
	echo '<input type="submit" name="make_order">'."<br>";
	echo "</form>";
}

//Did the user already input ALL their info on checkout.php? Then report the order detials and put the info into sql, i.e. make the order:
else if (( $_SERVER['REQUEST_METHOD'] == 'POST' )
&& isset($_POST['make_order']) 
&& isset($_POST['email']) && ($_POST['email'] != '')
&& isset($_POST['billing_address']) && ($_POST['billing_address'] != '')
&& isset($_POST['shipping_address']) && ($_POST['shipping_address'] != '')
){

	//make the order in sql:
	
	//report the user info back to user:
	echo "your email : ".$_POST['email']."<br>";
	echo "your total is :".$_SESSION['checkout_total']."<br>";
	echo "your billing_address : ".$_POST['billing_address']."<br>";
	echo "your shipping_address : ".$_POST['shipping_address']."<br>";
	
	//make db connection
	require ('../includes/db_connection.php');
	
	//get price into float format:
	$order_price = floatval($_SESSION['checkout_total'];
	//get string value for the addresses:
	$order_bill_addr = (string)($_POST['billing_address']);
	$order_ship_addr = (string)($_POST['shipping_address']);
	//the order is placed at the current time:
	$order_date = date('Y-m-d h:i:s', (mktime(0, 0, 0, date("m")  , date("d"), date("Y"))));
	
	//now we are ready to create the order in sql:
	$order_query = "INSERT into ORDER (price,date,shipping_address,billing_address) 
					values ('$order_price','$order_date','$order_ship_addr','$order_bill_addr ')";
	
	$order_to_sql = mysqli_query($connection, $order_query);
	
	//did the query go through? then lets check and output the results:
	if ($order_to_sql){
		$check_order = "SELECT * 
						FROM order
						WHERE shipping_address = '$order_ship_addr'";
						
		$test = mysqli_query($connection, $check_order);
		while ($row_test = mysqli_fetch_array($test)){
			
			echo "<br>"."The amount of $".$row_test['price']." will be billed to ".$row_test['billing_address']."<br>";
			
		}		
	}
	
	//failure of query:
	else{
		echo "Your order has not shipped";
	}
}


//error: the user did not fill out all the info, they must re-do
else{
	echo "Please fill out all information before submitting the order.";
		//Acquire user information for the order:
	echo "Your total is ".$_SESSION['checkout_total']."<br>";
	echo '<form action="checkout.php" method="post" >'.'<br>';
	echo "Please enter your email";
	echo "<input type='text' name='email'>"."<br>";
	echo "Please enter your billing address";
	echo "<input type='text' name='billing_address'>"."<br>";
	echo "Please enter your shipping address";
	echo "<input type='text' name='shipping_address'>"."<br>";
	echo '<input type="submit" name="make_order">'."<br>";
	echo "</form>";
}

/*

*/


	//get the username
	
	/*PLACES*/
	
	

	/*ORDER */
		
	//total
	
		
	//send username to sql	
	
	//sql current date
	
	//sql auto increment date
	
	//fill in billing address
	
	//fill in shipping address
	
	
	/* CONTAINS */
	
	//get product(s) from last page
	//get their quantities
	
	//send to sql

?>
	
	
	
	
	
	
	
	
	
	
	
	
<h2>Thank you for your order. Your order number is 1906.</h2>

<h3>The shopping cart has been emptied ready for your next 
transaction.</h3>





</div><!-- content -->
	
	</div><!-- maincontent -->

	
	
	
	
	
	
	
	
	
	
	


	<div id="footer">
		
	</div><!-- footer -->
	
</div><!-- wrapper -->

</body>
</html>