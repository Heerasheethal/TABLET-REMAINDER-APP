<?php
   	include("connect.php");
   	
   	$link=Connection();

	
	$p1=$_POST['p1'];
	$p2=$_POST['p2'];
	$p3=$_POST['p3'];
	$t1=$_POST['t1'];
	$t2=$_POST['t2'];
	$t3=$_POST['t3'];
	$balance1=$_POST['balance1'];
	$balance2=$_POST['balance2'];
	$balance3=$_POST['balance3'];
	

	$query = "update medical set p1='$p1',p2='$p2',p3='$p3',t1='$t1',t2='$t2',t3='$t3',balance1='$balance1',balance2='$balance2',balance3='$balance3'"; 

   	mysqli_query($link,$query)  or die("Error in query: $query. ".mysqli_error());;
	mysqli_close($link);

?>
