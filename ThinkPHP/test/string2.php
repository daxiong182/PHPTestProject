<?php

//定义一个字符串变量
$str='☆牛叉任务☆';
// var_dump($str);
echo '<br>';
echo '<br>';
//ltrim() 删除字符串左侧的空白(不给参数) 或左侧给定字符
// $newStr=ltrim($str);
// var_dump($newStr);

//trim() 删除字符串两侧空白(不给参数) 或给定参数
// $newStr=trim($str,'☆');
// var_dump($newStr);


$str2='学习园地';

$newStr=str_replace('园','lfsd',$str2);

var_dump($newStr);


echo '<br>';
echo '<br>';

$str3="草\n离离原上草\n一岁一枯荣";

echo nl2br($str3);

echo '<br>';
echo '<br>';

$str4='ABCDEFG';
$new=str_shuffle($str4);
var_dump($new);
echo '<br>';
echo '<br>';

//substr_count()统计查找字符串的出现次数
$count=substr_count($str4,'A');

echo $count;

echo '<br>';
echo '<br>';


//strrchr()返回一个字符串在另一个字符串中最后一次出现的位置到结束的字符串

$str5='alfdao.jpg';

$newStr3=strrchr($str5,'.');

echo $newStr3;


echo '<br>';
echo '<br>';
//strpos() 寻找字符串中某字符最先出现的位置

$count2=strpos($str5,'.');

echo $count2;

//strrpos() 寻找字符串中某字符最后出现的位置











?>