<html>
<body>
<p id="demo"></p>
<p id="demo1">hii students</p>
<button type="button" onclick="document.getElementById('demo1').style.fontSize='35px'">Click Me!</button>
<button type="button" onclick="document.getElementById('demo1').style.color='red'">Click for color</button>
<script>
document.getElementById("demo").innerHTML="Learning center";
</script>
<script>
alert("fill it carefully!");
</script>
<script>

</script>
<form action="" method="post" name="form1" onsubmit="return validate()">
Name:<input type="text" name="name"><br>
marks of 12th:<input type="text" name="marks"><br>
Facilities: <br>
<input type="checkbox" name="travelling" value="travelling">Travelling</input><br>
<input type="checkbox" name="hostel_fees" value="hostel fees">Hostel fees</input><br>
<input type="checkbox" name="mess_fees" value="mess fees">Mess fees</input><br>
<input type="submit">
</form>
<p id="abc"></p>
<script>
function validate(){
	var a=document.forms["form1"]["name"].value;
	if(a==""){
		alert("please fill name");
		return false;
	}
		var x,text;
		x = document.forms["form1"]["marks"].value;
        
    if (isNaN(x)) {
        alert("marks should be numeric");
    }
}
	
</script>
</body>
<html>
<?php
if($_POST){
	$tution=50000;
	$library=2000;
	$id_card=500;
	$exam_fee=1000;
	$other=3000;
	$travelling=5000;
	$hostel_fees=30000;
	$mess=10000;
	$fee=$tution+$library+$id_card+$other+$exam_fee;
	echo "tution fees:".$tution."<br>";
	echo "library:".$library."<br>";
	echo "id card:".$id_card."<br>";
	echo "exam fees:".$exam_fee."<br>";
	echo "other:".$other."<br>";
	/*if(isset($_POST['facilities[]'])){
	if($_POST['facilities[]']=='travelling'){
		$fee +=$travelling;
		echo "travelling fees:".$travelling."<br>";
	}
	if($_POST['facilities[]']=='hostel fees'){
		$fee +=$hostel_fees;
		echo "hostel fees :".$hostel_feel."<br>";
	}
	if($_POST['facilities[]']=='mess fees'){
		$fee +=$mess;
		echo "mess fees:".$mess."<br>";
	}*/
	if(isset($_POST["travelling"])){
		$fee=$fee+$travelling;
	}
	if(isset($_POST["hostel_fees"])){
		$fee=$fee+$hostel_fees;
	}
	if(isset($_POST["mess_fees"])){
		$fee=$fee+$mess;
	}
	
	echo $fee;
	}

?>
	
	
	
	


