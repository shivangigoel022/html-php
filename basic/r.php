<!DOCTYPE HTML>
<html>  
<head>
<style>
body{background-image:url("mac.jpg");}
form{text-align:center;}
</style>
</head>

<body>
<h1 style="color:green;text-align:center;font-size:50px"><b><i>REGISTRATION</i></b></h1><hr><br><br><br>
<form style="align:center;font-size:30px" action="result.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <br>
  Mobile:<input type="number" name="mobile"><br>
  comments:</br>
<textarea name="comments" rows="10" cols="40"></textarea></p>
  <input type="submit" name="submit" value="Submit"> 
</form>

</body>
</html>