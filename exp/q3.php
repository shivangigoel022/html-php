<!doctype>
<html>
<body>
<form action="" method="post">
firstname:<input type="text" name="fname"><br>
subject:<input type="text" name="sub"><br>
date:<input type="date" name="date"><br>
stuid:<input type="text" name="stuid"><br>
stu_name:<input type="text" name="sname"><br>
rating:<input type="number" name="rat"><br>
comment:<input type="textarea" name="area"/><br>
<input type="submit" name="submit">
</form>
<?php
if($_POST){
$fname=$_POST['fname'];
$sub=$_POST['sub'];
$date=$_POST['date'];
$stuid=$_POST['stuid'];
$sname=$_POST['sname'];
$rat=$_POST['rat'];
$area=$_POST['area'];
class feedback{
	public $fname,$sub,$dat,$stuid,$sname,$rat,$area;
	function feedback($f,$s,$d,$stuid,$sn,$r,$a){
		$this->fname=$f;
		$this->sub=$s;
		$this->dat=$d;
		$this->stuid=$stuid;
		$this->sname=$sn;
		$this->rat=$r;
		$this->area=$a;
//	echo $this->fname,$this->sub,$this->dat,$this->stuid,$this->sname,$this->rat,$this->area;
	}  
	function get(){
	$file=fopen('exr1.txt',"a")or die('cannt find file');
	
	fwrite($file,$this->fname." ".$this->sub." ".$this->dat."  ".$this->stuid."  ".$this->sname."  ".$this->rat."  ".$this->area."     ");
	fclose($file);
	}

}
$obj=new feedback($fname,$sub,$date,$stuid,$sname,$rat,$area);
$obj->get();
}
?>