<?php
   	include("connect.php");
   	
   	$link=Connection();

	
	$p1=$_GET['p1'];
	$p2=$_GET['p2'];
	$p3=$_GET['p3'];
	$t1=$_GET['t1'];
	$t2=$_GET['t2'];
	$t3=$_GET['t3'];
	$balance1=$_GET['balance1'];
	$balance2=$_GET['balance2'];
	$balance3=$_GET['balance3'];
	

	$query = "update medical set p1='$p1',p2='$p2',p3='$p3',t1='$t1',t2='$t2',t3='$t3',balance1='$balance1',balance2='$balance2',balance3='$balance3'"; 

   	mysqli_query($link,$query)  or die("Error in query: $query. ".mysqli_error());;
	mysqli_close($link);

?>
