 <?php
 function swap($first, $second)
{
 $temp = $first;
 $first = $second;
 $second = $temp;
 
 echo "First number ".$first;
 echo "<br>";
echo " Second number ".$second."\n";
echo"<br>";
}
 

 $a = "hello";
$b = "welcom";
echo "First number ".$a;
echo "<br>";
echo" Second number ".$b;
 
swap ( $a,$b);
echo "First number ".$a;
echo "<br>";
echo" Second number ".$b;
 

?>