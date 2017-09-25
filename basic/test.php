<!doctype>
<html>
<body>
<p style="color:red">* required field</p><br>
<form action="" method="POST">
Name:<input type="text" name="name"><font style="color:red">*</font><br>
Email:<input type="email" name="email"><font style="color:red">*</font><br>
Comment:<input type="textarea" name="comment"><br>
Gender:
male<input type="radio" name="gender" value="male"/>
female:<input type="radio" name="gender" value="female"/>
others:<input type="radio" name="gender" value="other"/><br>
Food:<select name="food">
<option value="chips">chips</option>
<option value="ice cream">ice cream</option>
<option value="biscuit">biscuit</option>
<option value="pizza">pizza</option>
</select><br>
Drinks:<input list="drinks" name="drinks">
<datalist id="drinks">
<option value="soft drinks">
<option value="mocktail">
<option value="cocktail">
<option value="water">
</datalist><br>
browser:
crome:<input type="checkbox" name="1" value="google crome">
firebox:<input type="checkbox" name="2" value="firefox"><br>
<input type="submit" name="submit">
</body>
</html>

<?php
if($_POST){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$comment=$_POST['comment'];
	$gender=$_POST['gender'];
	$food=$_POST['food'];
	$drinks=$_POST['drinks'];
	$browser=$_POST['browser'];
	if(empty($_POST['$name'])){
		$nameerr="name is required";
		echo $nameerr;
	}/*else{
		$name=$_POST['name'];
	}*/
	if(empty($_POST['$email'])){
		$emailerr="email is required";
		echo $name;
	}/*else{
		$email=$_POST['email'];
	}*/
	echo $name."<br>";
	echo $email."<br>";
	echo $comment."<br>";
	echo $gender."<br>";
	echo $food."<br>";
	echo $drinks."<br>";
	echo $browser."<br>";
}
	?>
	
	


