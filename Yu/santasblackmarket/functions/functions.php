


<?php

$con=mysqli_connect("localhost","yu","","santasblackmarket");


//mysqli connection error check, if the database is not connected,
// an error message will be generated
if(mysqli_connect_error()){
	echo "The connection was not established: " . mysqli_connect_error();
}



/*Function to get the items*/
function getItem(){
	


	global $con;
	
	$get_pro="
		SELECT * 
		FROM items";
	//executing the query
	$run_pro=mysqli_query($con, $get_pro);
	
	
	while($row_pro= mysqli_fetch_array($run_pro)){
		$item_id = $row_pro['item_id'];
		$item_name = $row_pro['item_name'];
		$item_category = $row_pro['item_category'];
		$item_price = $row_pro['item_price'];
		$item_image = $row_pro['item_image'];
	
		echo "
			<div id='single_item'>
				
					<h3>$item_name</h3>
					
					<img src='admin_area/item_images/$item_image' width ='180' height ='180' />
					
					<p><b> Price: $$item_price </b></p>
					
					<a href='details.php?pro_id=$item_id' style ='float:left;'>Details</a>
					
					
					<a href='index.php?pro_id=$item_id'><button style='float:right'/>Add to Cart</a>
			
			</div>
		
		
		";
	}//end while
}

?>