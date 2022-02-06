<?php


function myCode($fontFamily='',$w=100,$h=40,$num=4){
    //1.创建画布
$img=imagecreatetruecolor($w,$h);
    //2.分配颜色
$backColor=imagecolorallocate($img,mt_rand(200,255),mt_rand(200,255),mt_rand(200,255));
$red=imagecolorallocate($img,255,0,0);
    //3.绘画
      //填充背景色
      imagefill($img,0,0,$backColor);
      imagerectangle($img,0,0,$w-1,$h-1,$red);
    //干扰线
    for($i=0;$i<10;$i++){
        $lineColor=imagecolorallocate($img,mt_rand(150,180),mt_rand(150,180),mt_rand(150,180));
        imageline($img,mt_rand(2,$w-2),mt_rand(2,$h-2),mt_rand(2,$w-2),mt_rand(2,$h-2),$lineColor);
     }
    //告诉浏览器相关信息
    header('Content-type:image/jpeg');
    //5.输出图片到浏览器
    imagejpeg($img);

    //6.释放资源
    imagedestroy($img);



}

































?>