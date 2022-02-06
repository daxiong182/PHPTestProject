<?php

//1.创建基于调色板的画布
$img=imagecreatetruecolor(500,500);

//2.设置颜色
$red=imagecolorallocate($img,255,255,250);
$gray=imagecolorallocate($img,0,0,0);
$green=imagecolorallocate($img,0,255,0);


//3.填充图片 要填充的图片 x y 颜色
$res=imagefill($img,0,0,$red);

imagerectangle(  $img,  100,  100,  200,  200,  $gray);

imagefttext($img,20,0,60,60,$green,'./font.ttf','大熊加11油');


//4.设置内容格式
header('Content-type:image/jpeg');

//显示图片
imagejpeg($img);

//2.释放资源
imagedestroy($img)





























?>