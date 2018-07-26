<?php
	include("connect.php"); 	
	
	$link=Connection();
  	$result=mysqli_query($link,"SELECT * FROM medical");
	$result1=mysqli_query($link,"SELECT * FROM patient");
	
	  if($result!==FALSE && result1!==FALSE){
		     if($row = mysqli_fetch_array($result)) {
		        $p1=$row["p1"];
				$p2=$row["p2"];
				$p3=$row["p3"];
				$t1=$row["t1"];
				$t2=$row["t2"];
				$t3=$row["t3"];
				$balance1=$row["balance1"];
				$balance2=$row["balance2"];
				$balance3=$row["balance3"];
				
				
			
		     }
		     mysqli_free_result($result);
			 
			 
			 if($row1 = mysqli_fetch_array($result1)) {
			 
			 	$minterval=$row1["minterval"];
				$mt=$row1["mt"];
				$at=$row1["at"];
				$nt=$row1["nt"];
		     }
		    
			 mysqli_free_result($result1);
			 
			 
		     mysqli_close($link);
		  }
	

echo $p1.",".$p2.",".$p3.",".$t1.",".$t2.",".$t3.",".$balance1.",".$balance2.",".$balance3.",".$minterval.",".$mt.",".$at.",".$nt.",";

 /* $a=1;
  $b=2;
  $c=3;
  $d=4;
  $e=5;
   echo $a.",".$b.",".$c.",".$d.",".$e."!";
*/

?>
