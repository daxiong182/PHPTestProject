<?php


//php中数组的相关操作
$fiveTiger=array('关羽','张飞');

//输出内容和类型
var_dump($fiveTiger);

//echo 只能输出标量类型的数据
echo '<pre>';

//仅能输出内容
print_r($fiveTiger);


//删除常量
$name='nihao';
unset($name);

// echo $name; undefined

//删除数组元素
unset($fiveTiger[0]);//如果下标很大 删除后任然会保留大索引 往后排

print_r($fiveTiger);

echo '<hr>';

//清空数组 不删除类型
$fiveTiger=array();

echo '<br>';

print_r($fiveTiger);

//删除数组 包括其中所有值和类型

echo '<hr>';

$arr3=array(1,2,3);


unset($arr3);

// print_r($arr3);
echo '<br>';

echo '---------------- 遍历数组 --------------------------';


echo '<br>';

//统计数组的长度

$len=count($arr4=[1,2,3,4]);

echo $len;


$arr5=[
    ['id'=>'1','name'=>'小黑','sex'=>1,'age'=>18],
    ['id'=>'2','name'=>'小白','sex'=>1,'age'=>18],
    ['id'=>'3','name'=>'小丑','sex'=>1,'age'=>18],
    ['id'=>'4','name'=>'小小','sex'=>1,'age'=>18],
    ['id'=>'5','name'=>'小明','sex'=>1,'age'=>18],
];

echo '<br>';

echo '<table border="1" align="center" width="800">';
echo '<tr>';
echo '<th>编号</th>';
echo '<th>姓名</th>';
echo '<th>性别</th>';
echo '<th>年龄</th>';
echo '</tr>';

$lens=count($arr5);

for($i=0;$i<$lens;$i++){

    echo '<tr>';

    echo '<td align="center">'.$arr5[$i]['id'].'</td>';
    echo '<td align="center">'.$arr5[$i]['name'].'</td>';
    echo '<td align="center">'.$arr5[$i]['sex'].'</td>';
    echo '<td align="center">'.$arr5[$i]['age'].'</td>';

    echo '</tr>';


}



echo "</table>";
echo '<br>';

echo '---------------------------- 冒泡 ------------------------------------';


$arr6=array(2,4,1,7,2);

$len2=count($arr6);

$tmp='';

for($i=0;$i<$len2-1;$i++){
    for($j=0;$j<$len2-$i-1;$j++){
        if($arr6[$j]>$arr6[$j+1]){
            $tmp=$arr6[$j];
            $arr6[$j]=$arr6[$j+1];
            $arr6[$j+1]=$tmp;
        }
    }
};


print_r($arr6);


echo '<br>';

// foreach 遍历数组

echo '------------------------------- froeach ---------------------------------';


$arr8=['id'=>1,'name'=>'小妹','sex'=>0];


foreach ($arr8 as $key => $value) {
    echo $key.'  ';
    echo $value.'<br>';
}











?>






