<?php

$file1=fopen("aa.txt","w");//Open the file into write mode


$file2=fopen("bb.txt","w+"); 

fwrite($file1,"hii php fghjnkml");


echo copy("aa.txt","bb.txt");//Copy the content of aa.txt into bb.txt


echo"<br>";


echo fread($file2,filesize("bb.txt"))."<br>";//Display the content of bb.txt
$a=file("bb.txt")or die("qwdefghnj");
foreach($a as $b){
	echo $b;
}

?>