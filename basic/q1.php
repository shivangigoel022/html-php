<?php
$numbers=array("3","6","1","10","8");
$largest  = $numbers[0];
		$smallest = $numbers[0];
		
		
	
		foreach($numbers as $num){
			
			
			if($num > $largest){
				$largest = $num;
			}
			else if($num < $smallest){
				$smallest = $num;
			}
			
		}
				
 
		echo "Largest Number is: $largest <br />";
		echo "Smallest Number is: $smallest";
 
	
	
	
 
?>