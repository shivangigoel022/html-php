<!doctype>
<html>
<body>
<p style="font-size:30px">SIGN up</p>
<form action="" method="post">
Username:<input type="text" name="username">
password:<input type="password" name="password">
<input type="submit" name="login" value="login" >
</form>

<?php
if($_POST){
$username=$_POST['username'];
$password=$_POST['password'];
session_start();
$_SESSION['username']=$username;
$_SESSION['password']=$password;
echo "set";


}

?>
</body>
</html>