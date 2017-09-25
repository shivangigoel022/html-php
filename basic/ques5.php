<html>
<body>
<form action="" method="post">
marks:<input type="text" name="marks">
<input type="submit"/>
</form>
</body>
</html>
<?php
if($_POST){
$marks=$_POST['marks'];
$arr=explode(" ",$marks);
function avg($arr){
	$total=0;
	foreach($arr as $i){
		$total +=$i; 
	}
	$average=$total/sizeof($arr);
	echo $average;
}
$average=avg($arr);
}
?>


