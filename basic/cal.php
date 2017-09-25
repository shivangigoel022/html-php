<html>
<body>
<form action="" method="post">
First_number:
<input type="number" name="first"/><br>
Second_number:
<input type="number" name="second"/><br>
Operation:
<input type="radio" name="operation" value="Add"/>Add<br>
<input type="radio" name="operation" value="Subtract"/>Subtract<br>
<input type="radio" name="operation" value="Multiply"/>Multiply<br>
<input type="radio" name="operation" value="Divide"/>Divide<br>
<input type="submit">
<br>
<form>
</body>
</html>
<br>
<br>
<?php
if($_POST){
$first= $_POST['first'];
$second = $_POST['second'];
$operation=$_POST['operation'];

if ($_POST['operation'] == 'Add') {
     echo $first+$second;
    } else if ($_POST['operation'] == 'Subtract') {
     echo $first-$second;
    }
	else if ($_POST['operation'] == 'Multiply') {
     echo $first*$second;
    }
	else if ($_POST['operation'] == 'Divide') {
     echo $first/$second;
 
}

}
?>