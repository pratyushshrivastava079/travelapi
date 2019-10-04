<?php 


	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		echo "this is the post request";

	}elseif($_SERVER['REQUEST_METHOD'] == 'GET'){

		echo "this is the get method";
		
	}

?>