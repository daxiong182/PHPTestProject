<?php


//boolean float int string


$str='boolean float int string';

// $str=ucwords($str);//把字符串里的每一个单词 首字母转换为大写
// $str=ucfirst($str); //把字符串里的第一个单词 首字母转换为大写

$index=strpos($str,'a');

echo strlen($str);


echo '<br>',$str;


echo '<br>','首次出现的位置：',$index;




// $st=strstr($str,'s');//截取 从字符出现的位置到结尾



$st=strtr($str,'string','hahaha'); //将目标字符 替换为指定字符 多余的保留 不够的截取发

echo '<br>',$st;
























?>