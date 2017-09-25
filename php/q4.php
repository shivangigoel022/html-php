<html>
<head>
<title>
</title>
<body>
<form method="post" action="" >
<h1>Innovative learning centre</h1>
<label>rollno</label>
<input type="text" name="roll"/><br>
<label>name</label>
<input type="text" name="name"/><br>
<label>age</label>
<input type="text" name="age"/><br>
<label>address</label>
<input type="text" name="address"/><br>

<label>course name:</label><br>
<input type="text" name="detail"/><br>
<input type="radio" name="time" value="1"/>1 yr<br>
<input type="radio" name="time" value="2"/>2 yr<br>
<input type="radio" name="time" value="3"/>3 yr<br>
<input type="radio" name="time" value="4"/>4 yr<br>
<input type="submit" name="submit"/>
</form>
</body>
</html>
<?php
if($_POST){
$n=$_POST['name'];
$age=$_POST['age'];
$add=$_POST['address'];
$r=$_POST['roll'];
$file=fopen("student_detail.txt","a+") or die('cant find');
$f=$r.":".$n.":".$age.":".$add;
 file_put_contents("student_detail.txt",$f);
fwrite($file,$f);
echo"<br>You enetered for course:";
$v=$_POST['detail'];
 $time=$_POST['time'];
 echo $v."<br>"."Duration=".$time;
 }
?>

