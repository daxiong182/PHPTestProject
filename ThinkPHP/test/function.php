<?php

echo '--------------------------- 函数 ----------------------------------------';
echo '<br>';
echo '<br>';
echo '<br>';




echo '<table border="1" align="center" width="800">';
for($tr=0;$tr<10;$tr++){
    echo '</tr>';
     for($td=0;$td<10;$td++){
         echo '<td>'.$tr.$td.'</td>';
     }
     echo '</tr>';
    }

echo '</table>';

 echo '<br>';
//什么是函数
say();
function say(){
    echo '哥哥 我好爱你哟';
}

echo '<br>';
echo '------------------------------------------------------------------=--------------------------------------------';
echo '<br>';
function demo(){
    $str='2G/3G/4G/有什么区别<br/>';
    $str1='区别就是<br/>';
    $str2='没有区别<br/>';
    return $str2;
}

echo demo();

echo '<br>';

echo '-----------------------------------------------------';

echo '<br>';

//普通变量在函数内部无法使用
$ces='嫦娥上月球为什么带玉兔,因为玉兔喜欢吃胡萝卜';

//global 声明全局变量时禁止赋值 只能在函数内部声明 global有两个作用 1.在函数内部引用外部变量 2.在函数内部声明全局变量

$va='slafdjoa';

function ce(){
    global $ces;
    echo $ces;
    $ces='hahah';
}


ce();

echo $ces.'lll  ';

echo '<br>';

function prints(){
    echo $GLOBALS['va'];
    
}

prints();

echo '<br>';
//php中的类型转换
$str='1';
$result=settype($str,'int');
var_dump($result);
































?>












