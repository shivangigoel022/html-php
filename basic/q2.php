<html>
<body>
<form style="align:center;font-size:30px" action="" method="post">
Name: <input type="text" name="name"><br>
Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <br>
  <input type="submit">
  </form>
  </body>
  </html>
  
  
  <?php
  if($_POST){
  $name=$_POST['name'];
  $gender=$_POST['gender'];
   //list($fname,$mname,$lname)=split(' ',$name,3);
   $list=explode(" ",$name);
  echo "first name:$list[0]; middlename:$list[1];last name:$list[2]";
   echo "<br>";
  $vowel=0;
  for($i=0;$i<strlen($name);$i++)
{
if($name{$i}=="a" || $name{$i}=="e" || $name{$i}=="i" || $name{$i}=="o" || $name{$i}=="u")
{
$vowel++;
}
}

echo "Total Vowels = ".$vowel."<br/>";
echo substr_count($name, ' ')."<br>";
$name= strtoupper( $name);
echo $name."<br>";
if($gender=='male'){
	echo "	Mr.".$name;
  }
  else{
	  echo " Ms.".$name."<br>";
  }
  }
  ?>