<?php

$img=imagecreatefromjpeg('./01.jpg');

$width=imagesx($img);

$height=imagesy($img);

$waterImg=imagecreatefromjpeg('./02.jpg');

$w=imagesx($waterImg);
$h=imagesy($waterImg);


imagecopyresampled($img,$waterImg,0,0,0,0,$width,$height,$w,$h);

header('Content-type:image/jpeg');

imagejpeg($img);

imagedestroy($img);
imagedestroy($waterImg);



















?>