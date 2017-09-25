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
