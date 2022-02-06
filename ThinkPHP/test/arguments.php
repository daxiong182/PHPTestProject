<?php



//可变长度参数

function sum($a,$b){
    $args=func_get_args();
    var_dump($args);
    return $a+$b;

}



$result=sum(10,20,30,540);

echo '<br>';

var_dump($result);


//实现在数组的开头插入一个或多个参数





































?>