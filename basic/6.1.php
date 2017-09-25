<?php
$l=fopen("studentdetails.txt","r") or die ('cannot find the file');
echo fread($l, filesize("studentdetails.txt"));
fclose($l);

?>