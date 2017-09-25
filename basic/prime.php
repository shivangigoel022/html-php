<html>
<body>
<form action="" method="post">
First:<input type="number" name="first"/>
Second:<input type="number" name="second"/>
<input type="submit"/>
</form>
</body>
</html>


<?php
if($_POST){
$first=$_POST['first'];
$second=$_POST['second'];
echo "prime numbers are";
echo "<br>";
$flag=1;
for($i=$first;$i<=$second;$i++){
	for($j=2;$j<=$i;$j++){
		if($i%$j==0)
		{
			break;
			$flag=0;
		}
	}
		if($flag==1)
			echo $i,"<br>";
			
}
}
			?>