<?php 
if($_POST){
		
		$number = $_POST['number']; 
              

if(($number % 2) == 0){
			echo "You entered an Even number";
		}
		else{
			echo "You entered an Odd number";
		}
		for($i=1;$i<=10;$i++)
		{
			$mul = $number * $i;
        echo "$number * $i = $mul<br>";
		}
		echo sqrt($number);
	
}
	
?>