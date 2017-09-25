<html>
<body>
<form action="" method="post">
coach_no:<input type="number" name="first"/>
<input type="submit"/>
</form>
</body>
</html>


<?php
if($_POST){
$first=$_POST['first'];
if($first%8==1 || $first%8==4){
	echo "your seat is lower berth";
}
if($first%8==2 || $first%8==5){
	echo "your seat is middle berth";
}
if($first%8==3 || $first%8==6){
	echo "your seat is upper berth";
}
if($first%8==0){
	echo "your seat is side upper";
}
if($first%8==7){
	echo "your seat is side lower";
}
}
?>