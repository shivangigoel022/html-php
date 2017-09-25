
<!doctype>
<html>
<body>
<P style="font-size:30px">LOGIN</p>
<form action="" method="post">
Username:<input type="text" name="username1">
password:<input type="password" name="password1">
<input type="submit" name="login" value="login" >
</form>

<?php
if($_POST){
$username1=$_POST['username1'];
$password1=$_POST['password1'];
session_start();
if(isset($_POST['login'])){
	if($username1==$_SESSION['username'] and $password1==$_SESSION['password']){
		header('location:welcom.php');
	}
	else{
		
		header('location:q3a.php');
		
	}
}
}

/*session_start();
if(isset($_SESSION['username'])){
if(isset($_SESSION['password'])){
echo "welcom to session example,".$_SESSION['username'];

}
else{
	echo "invalid user or password";
}
}
?>*/
?>
</body>
</html>