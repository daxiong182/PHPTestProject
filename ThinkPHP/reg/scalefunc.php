<?php


function thumb($srcImage,$path,$w,$h,$pre='s_'){

$suffix=ltrim(strrchr($srcImage,'.'),'.');

if($suffix=='jpg'){
    $suffix='jpeg';
}

$func='imagecreatefrom'.$suffix;

$img=$func($srcImage);

$width=imagesx($img);
$height=imagesy($img);

if($width>$height){
    $dh=$h;
    $dw=$width*($h/$height);
}else{
    $dw=$w;
    $dh=$height*($w/$width);
}

$newImg=imagecreatetruecolor($dw,$dh);

imagecopyresampled($newImg,$img,0,0,0,0,$dw,$dh,$width,$height);
    //6.处理图片保存路径
    if(!file_exists($path)){
        mkdir($path);
    }
    $newPath=rtrim($path,'/').'/';
    $path=$newPath.$pre.basename($srcImage);

    //7.保存图片
    $img_func='image'.$suffix;
    $result = $img_func($newImg,$path);

    //8.释放资源
    imagedestroy($img);
    imagedestroy($newImg);
    return $result;

}





















?>