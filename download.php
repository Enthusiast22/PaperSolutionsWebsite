<?php 
$file ="ps/".$_GET['file'].".pdf";
header("content-disposition: attachment; filename=" . urlencode($file));

$fb = fopen($file, "r");

while(!feof($fb)){
    echo fread($fb, 1000);
    flush();
}

fclose($fb);
?>