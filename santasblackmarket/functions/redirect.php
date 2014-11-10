<?php

session_start();

 //user redirects:
if(($_GET['link']) == "users"){
	header("location: /SantasBlackMarket/pages/users.php");
    exit();
 }

elseif(($_GET['link'])== "userpdt"){
 	header("location: /SantasBlackMarket/pages/userProducts.php ");
	exit();
 }

elseif(($_GET['link'])== "acct"){
 	header("location: /SantasBlackMarket/pages/myAccount.php ");
	exit();
 }
elseif(($_GET['link']) == "cart" ){
 	header("location: /SantasBlackMarket/pages/shoppingCart.php ");
	exit();
 }
 elseif(($_GET['link']) == "allpdctg" ){
 	header("location: /SantasBlackMarket/pages/allProducts.php ");
	exit();
 }
 
//staff redirects:
elseif(($_GET['link'])== "order"){
 	header("location: /SantasBlackMarket/pages/orders.php ");
	exit();
 } 
 elseif(($_GET['link'])== "inv"){
 	header("location: /SantasBlackMarket/pages/inventory.php ");
	exit();
 } 
 
 
 
 
else{
 	header("location: /SantasBlackMarket/pages/loginScreen.php ");
	exit();
 }
 
 
?>