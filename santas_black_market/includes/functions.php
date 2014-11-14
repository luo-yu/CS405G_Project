<?php

	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed.");
		}
		else{
			echo "Hey, your database query is success";
		}
	}
	
?>
