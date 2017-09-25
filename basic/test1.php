<?php
if($_POST){
$myfile = fopen("studentdetails.txt","r") or die("unable to open a file");
$fileContent = fread(($myfile),filesize("studentdetails.txt"));
echo $fileContent,"\n " ;
$arr1= explode("\n",$fileContent);
foreach ($arr1 as $row) {
	$arr = explode("\n",$row);
	

for($i=0;$i<count($arr);$i++)
	{

		if(trim($arr[$i])=="bangalore")
		{
			echo $arr[$i-2],"\n  ";
		}
	}
}

fclose($myfile);
}


$file=fopen("studentdetails.txt","r")or die("cannot find file");
$files = fread(($file),filesize("studentdetails.txt"));
$arr=explode(":",$files);
foreach($arr as $a){
if($a==='banglore'){
echo 'found';
}
}

?>
