<?php


$str='<font>adsfg</font><input type="text"/>';

echo $str;

function demo($str){
    //定义正则
    $pattern=array(
        '/</S',
        '/>/S',
    );

    $replace=array('&lt;','&gt;');

    return preg_replace($pattern,$replace,$str);

}

echo '<hr/>';

echo demo($str);

echo '<hr/>';

$str='<font>ldfaoij</font>ihj';
$str2=htmlspecialchars($str);

$pattern='/<.*?>(.*?)<\/.*?>/S';

echo preg_replace($pattern,'\1',$str2);











?>




