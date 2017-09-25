<html>
<body>
<form action="" method="post">
elements:<input type="text" name="marks">
<input type="submit"/>
</form>
</body>
</html>
<?php
if($_POST){
$elements=$_POST['marks'];
$arr=explode(" ",$elements);
function oddeven_sort($arr){
	sort($arr);
	for($i=0;$i<sizeof($arr);$i++){
		if($arr[$i]%2==0)
			$arr1[]=$arr[$i];
	}
	for($i=0;$i<sizeof($arr);$i++){
		if($arr[$i]%2!=0)
		$arr1[]=$arr[$i];
	}

	return $arr1;
}
$arr=oddeven_sort($arr);
echo "sorted array is <br>";
         foreach($arr as $value){
			 print $value."<br>";
			 }
}
?>
