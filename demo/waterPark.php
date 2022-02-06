<?php



$img=imagecreatefromjpeg('2.jpeg');

imagestring($img,2,5,5,'daxiong.com',imagecolorallocate($img,0,255,0));

header('Content-type:image/png');

imagejpeg($img);

























?>

