<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("./includes/functions.php"); ?>
<?php include("./includes/layouts/header.php"); ?>

<div id="main">

  <div id="navigation">
	<ul>
                        <li><a href="http://cs.uky.edu/~ylu236/santas_black_market/index.php">Home</a></li>
                        <li><a href="http://cs.uky.edu/~ylu236/santas_black_market/pages/allProducts.php?link=allpdctg">All Products</a></li>
                        <li><a href="http://cs.uky.edu/~ylu236/santas_black_market/pages/registerScreen.php">Register</a></li>
                        <li><a href="http://cs.uky.edu/~ylu236/santas_black_market/pages/loginScreen.php">Log-In</a></li>
	</ul>

    &nbsp;
  </div>
  <div id="page">
    <h2 color: #d4e6f4;>Santa's Black Market</h2>
	
	

        <!-- item box -->
	<div>
  		<?php 
		$get_pro="
		SELECT * 
		FROM items";
		//executing the query
		$run_pro=mysqli_query($connection, $get_pro);
		
		
		while($row_pro= mysqli_fetch_array($run_pro)){
			$item_id = $row_pro['item_id'];
			$item_name = $row_pro['item_name'];
			$item_category = $row_pro['item_category'];
			$item_price = $row_pro['item_price'];
			$item_image = $row_pro['item_image'];
		
			echo "
				<div id='single_item'>
					
						<h3>$item_name</h3>
						
						<img src='http://cs.uky.edu/~ylu236/santas_black_market/item_images/$item_image' width ='180' height ='180' />
						
						<p><b> $$item_price </b></p>
						
						<a href='details.php?pro_id=$item_id' style ='float:left;'>Details</a>
						
						
						<a href='index.php?pro_id=$item_id'><button style='float:right'/>Add to Cart</a>
				
				</div>
			
			
			";
	}//end while
		
		
		?>

	 </div><!--end item box -->


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



<?php include("../includes/layouts/footer.php"); ?>
