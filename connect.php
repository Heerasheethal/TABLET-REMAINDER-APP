<?php

	function Connection(){
	// localhost, username, password, databasename
	$connection = mysqli_connect("localhost","pec","OP@8,.PM","panimalar")or die ("Error , check your server connection.");

	
		if (!$connection) {
	    	die('MySQL ERROR: ' . mysqli_connect_error());
		}
		
		
		return $connection;
	}
?>
