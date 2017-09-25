<html>
<body>
<form action="" method="POST" name="form1" onsubmit="return check()" >
Name:<br>
<input type="text" name="name1" ><br>
Email:<br>
<input type="text" name="mail" ><br>
Contact:<br>
<input type="text" name="no" ><br>
<input type="submit"   ><br>
</form>


<script >
function check()
{
	var name = document.form1.name1.value;
	if(name=="")
	{
		alert("name cannot be blank");
		return false;
	}

	var ph=document.form1.no.value;
	 if(isNaN(ph) || ph=="")
	{
		alert("contact cannot be alphanumeric or blank");
		return false;
	}

	var email=document.form1.mail.value;
	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
	 if(atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
	{
		alert("please enter a valid email id");
		return false;
	}

	else
	{
		alert("success");
		return true;
	}
}
</script>


</body>
</html>
