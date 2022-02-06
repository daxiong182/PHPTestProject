<?php

//从数组中取出一段 array_slice($arr,start,number,boolean) boolean=true 截取后的数组保留原来的下标


$arr=array('a','b','c','d','e','f','g');

$newArr=array_slice($arr,3,3,true);

echo'<pre>';

print_r($newArr);

echo '<br>';

//php中向上取整 ceil()
echo ceil(1.2);



























?>