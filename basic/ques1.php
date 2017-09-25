<!DOCTYPE html>
<html>
<head>
	<title>experiment 3 4a</title>
</head>
<body>

<?php 
if ($_GET) {
$name=$_GET['name'];
$roll=$_GET['roll'];
$age=$_GET['age'];
$address=$_GET['address'];

$var=fopen('studentdetail.txt','w');
fwrite($var, $roll.":".$name.":".$age.":".$address);
fclose($var);
$var2=file("studentdetail.txt");
foreach ($var2 as $key) {
	echo $key;

}
copy('studentdetail.txt', 'name2.txt');
if($address=='banglore'){

	echo $roll.":".$name;
}
}
else{
	echo '<form action="" method="GET">
	<label>Enter your Roll.no</label>
	<input type="text" name="roll" /><br><br><br>
	<label>Enter your name</label>
	<input type="text" name="name" /><br><br><br>
	<label>Enter your age</label>
	<input type="text" name="age" /><br><br><br>
	<label>Enter your address</label>
	<input type="text" name="address" /><br><br><br>
	<input type="submit" value="submit" />
</form>';
}
?>
</body>
</html>
