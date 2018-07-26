<?php
   	include("connect.php");
   	
   	$link=Connection();

	
	$name=$_GET['name'];
	$phno=$_GET['phno'];



	$query = "update caretaker set name='$name',phno='$phno'"; 

   	mysqli_query($link,$query)  or die("Error in query: $query. ".mysqli_error());;
	mysqli_close($link);

?>
