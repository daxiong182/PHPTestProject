


<?php

$str='Hello PHP';

//获取一个字符在字符串中的索引位置
echo strpos($str,'PH');

//截取字符串
$str1=substr($str,2,3);

echo '<br>'.$str1;

//字符串的分割
$result=str_split($str,2);
echo '<br>';

//php中输出数组使用 print_r
print_r($result);


$strs='Hello PHP Java C#';

$result1=explode(' ',$strs);

echo '<br>';

print_r($result1);






















?>