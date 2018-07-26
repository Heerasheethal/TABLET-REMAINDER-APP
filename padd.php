<?php
   	include("connect.php");
   	
   	$link=Connection();

	
	$name=$_GET['name'];
	$phno=$_GET['phno'];
	$age=$_GET['age'];
	$address=$_GET['address'];
	$minterval=$_GET['minterval'];
	$mt=$_GET['mt'];
	$at=$_GET['at'];
	$nt=$_GET['nt'];
	
	
	$query = "update patient set name='$name',phno='$phno',age='$age',address='$address',minterval='$minterval',mt='$mt',at='$at',nt='$nt'"; 

   	mysqli_query($link,$query)  or die("Error in query: $query. ".mysqli_error());;
	mysqli_close($link);

?>
