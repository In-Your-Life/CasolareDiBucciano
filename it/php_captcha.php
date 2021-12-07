<?php
session_start();
$RandomStr = md5(microtime());
$ResultStr = substr($RandomStr,0,5);
$NewImage =@imagecreate(100, 40);
$LineColor = imagecolorallocate($NewImage,233,239,239);
$TextColor = imagecolorallocate($NewImage, 0, 0, 0);
imageline($NewImage,1,1,40,40,$LineColor);
imageline($NewImage,1,100,60,0,$LineColor);
imagestring($NewImage, 5, 20, 10, $ResultStr, $TextColor); 
$_SESSION['key'] = $ResultStr;
header("Content-type: image/jpeg");
imagejpeg($NewImage);
?>