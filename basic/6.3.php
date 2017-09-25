<html>
<head>
<title>
</title>
</head><body>
<form method="post" action="" enctype="multipart/form-data">
<h1>updload</h1><br>
<input type="file" name="file"/><br>
<input type="submit" name="upload"/><br>
</body>
</form>
<html>

<?php
if(isset($_FILES['file'])){
$files=$_FILES['file'];
print_r($files);
echo "<br><h2>now we will read this array</h2>";
$name=$files['name'];
$error=$files['error'];

echo "<br>name=".$name."<br>error=".$error;
//var_dump($files); exit;
/*echo "move=".move_uploaded_file($files['tmp_name'],"Uploads/".$files['name']);*/
}

?>