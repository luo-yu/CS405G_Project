<?php 
session_start();
require("../../includes/db_connection.php");

/*if (!isset($_GET['id1']) || !isset($GET['id2']))
{
    echo 'No ID was given...';
    exit;
}
*/
$order_id = (int)($_GET['id']);
echo "order ID = " . $order_id;



$update_orders = "UPDATE orders SET shipped = 1 WHERE order_id=$order_id";
mysqli_query($connection, $update_orders);



$connection->close();

?>
