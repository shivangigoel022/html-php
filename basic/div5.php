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
echo "numbers divisible by 5 are";
echo "<br>";
for($i=$first;$i<=$second;$i++)
if($i%5==0){
echo $i;
echo "<br>";
}

}
?>


