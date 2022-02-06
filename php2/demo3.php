<?php

$str="1,2,3,4,5";
$arr=explode(",",$str);//将字符串 分割成数组


echo '<pre>';
print_r($arr);


$str2=implode('-',$arr);
echo '<br>';

print_r($str2);

echo '<br>','------------------------------------------';

$arrs=[1,2,3,4,5];

unset($arrs[0]); //php中删除数组元素 unset()

echo '<br>';

print_r($arrs);

echo '<br>',count($arrs);//count() 统计数组中有多少个元素

// foreach ($arrs as $key => $value) {
//     $arrs[$key]=$value+1;
// }
rsort($arrs);//翻转数组

echo '<br>','---------------------------------------------------------','<br>';


print_r($arrs);


echo '<br>','---------------------------------------------------------','<br>';


echo max($arrs);//输出数组中的最大值 min() 输出数组中的最小值


echo '<br>','---------------------------------------------------------','<br>';

//合并数组 如果两个数组有相同的键名 后面的将覆盖前面的
$arr2=[3,4,5,6,'a'=>100];

$arr3=[9,3,5,'a'=>99];

// $arr4=array_merge($arr2,$arr3);

// print_r($arr4);

echo '<br>','---------------------------------------------------------','<br>';



// $arr4=array_diff($arr2,$arr3);//差集
// $arr4=array_intersect($arr,$arr2);//交集


// print_r($arr4);


echo '<br>','----------------------打乱一个数组 影响原数组-----------------------------------','<br>';

$arr5=[1,2,3,2,5,9,1];

// $arr6=array_unique($arr5);//数组去重后返回一个新数组
shuffle($arr5); //打乱一个数组

print_r($arr5);

// print_r($arr6);

echo '<br>','---------------------------------------------------------','<br>';


$arr7=['小航','小莉','小朱'];

 $index=array_rand($arr7); //随机数组 返回的是一个索引值 传第二参数时返回的是一个数组

print_r($arr7[$index]);

$arr9=array_rand($arr7,2);// 传第二参数时返回的是一个数组

echo '<br>';

print_r($arr7[$arr9[0]]);


$file=fopen('text','w');//打开一个文件 不存在就创建







?>