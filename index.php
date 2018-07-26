<?php

	include("connect.php"); 	
	
	$link=Connection();

	$result=mysqli_query($link, "SELECT * FROM medical");
	$result1=mysqli_query($link, "SELECT * FROM patient");
	$result2=mysqli_query($link, "SELECT * FROM caretaker");
?>

<html>
   <head>
      <title>Pill Tracker</title>
      <meta http-equiv="refresh" content="10">
   </head>
<body>
   <h1>Pill Tracker</h1>

   <table border="1" cellspacing="1" cellpadding="1">
		<tr>
			
			<td>&nbsp;Last Update&nbsp;</td>
			<td>&nbsp;p1&nbsp;</td>
			<td>&nbsp;p2&nbsp;</td>
			<td>&nbsp;p3&nbsp;</td>
			<td>&nbsp;t1&nbsp;</td>
			<td>&nbsp;t2&nbsp;</td>
			<td>&nbsp;t3&nbsp;</td>
			<td>&nbsp;balance1&nbsp;</td>
			<td>&nbsp;balance2&nbsp;</td>
			<td>&nbsp;balance3&nbsp;</td>
		</tr>
		
<?php  

  if($result!==FALSE){
		     while($row = mysqli_fetch_array($result)) {
			 		
		            $lastupdate=$row["lastupdate"];
				    $p1=$row["p1"];
				    $p2=$row["p2"];
					$p3=$row["p3"];
					$t1=$row["t1"];
				    $t2=$row["t2"];
					$t3=$row["t3"];
					$balance1=$row["balance1"];
				    $balance2=$row["balance2"];
					$balance3=$row["balance3"];
				    	 

?><tr>
			
			<td>&nbsp; <?php echo $lastupdate ?>&nbsp;</td>
			<td>&nbsp;<?php echo $p1 ?>&nbsp;</td>
			<td>&nbsp; <?php echo $p2 ?>&nbsp;</td>
			<td>&nbsp;<?php echo $p3 ?>&nbsp;</td>
			<td>&nbsp;<?php echo $t1 ?>&nbsp;</td>
			<td>&nbsp; <?php echo $t2 ?>&nbsp;</td>
			<td>&nbsp;<?php echo $t3 ?>&nbsp;</td>
			<td>&nbsp;<?php echo $balance1 ?>&nbsp;</td>
			<td>&nbsp; <?php echo $balance2 ?>&nbsp;</td>
			<td>&nbsp;<?php echo $balance3 ?>&nbsp;</td>
			</tr>
			<?php   
			
			    }
		     mysqli_free_result($result);
		     
			 
		  }
	
			?>
		
    
   </table>
   
   
   <br>
<br>
<br>
<br>
<h3>Patient Details</h3>
<table border="1" cellspacing="1" cellpadding="1">
		<tr>
			
			<td>&nbsp;name&nbsp;</td>
			<td>&nbsp;phno&nbsp;</td>
			<td>&nbsp;age&nbsp;</td>
			<td>&nbsp;address&nbsp;</td>
			<td>&nbsp;M interval&nbsp;</td>
			<td>&nbsp;Morning Tablet&nbsp;</td>
			<td>&nbsp;Afternoon Tablet&nbsp;</td>
			<td>&nbsp;Night Tablet&nbsp;</td>
			
		</tr>
		
<?php  

  if($result1!==FALSE){
		     while($row = mysqli_fetch_array($result1)) {
			 		$name=$row["name"];
		            $phno=$row["phno"];
				    $age=$row["age"];
				    $address=$row["address"];
					$minterval=$row["minterval"];
					$mt=$row["mt"];
					$at=$row["at"];
				    $nt=$row["nt"];
								    	 

?><tr>
			<td>&nbsp; <?php echo $name ?>&nbsp;</td>
			<td>&nbsp; <?php echo $phno ?>&nbsp;</td>
			<td>&nbsp;<?php echo $age ?>&nbsp;</td>
			<td>&nbsp; <?php echo $address ?>&nbsp;</td>
			<td>&nbsp; <?php echo $minterval ?>&nbsp;</td>
			<td>&nbsp;<?php echo $mt ?>&nbsp;</td>
			<td>&nbsp;<?php echo $at ?>&nbsp;</td>
			<td>&nbsp; <?php echo $nt ?>&nbsp;</td>
			
			</tr>
			<?php   
			
			    }
		     mysqli_free_result($result1);
		     
			 
		  }
	
			?>
		
    
   </table>
  <br>
<br>
<br>
<br>
<h3>Caretaker Details</h3>
<table border="1" cellspacing="1" cellpadding="1">
		<tr>
			
			<td>&nbsp;name&nbsp;</td>
			<td>&nbsp;phno&nbsp;</td>
			
			
			
		</tr>
		
<?php  

  if($result2!==FALSE){
		     while($row = mysqli_fetch_array($result2)) {
			 		$name=$row["name"];
		            $phno=$row["phno"];
				   
				   
								    	 

?><tr>
			<td>&nbsp; <?php echo $name ?>&nbsp;</td>
			<td>&nbsp; <?php echo $phno ?>&nbsp;</td>
			
			
			
			</tr>
			<?php   
			
			    }
		     mysqli_free_result($result2);
		     
			 
		  }
	
			?>
		
    
   </table>
</body>
</html>
