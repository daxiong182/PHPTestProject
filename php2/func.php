<?php

//系统函数 自定义函数


//变量的作用范围

$a=2;

function cs(){
    $a=2;
    //定义全局变量
    global $c;
    $c=10;

    $GLOBALS['wa']='myContent';
}

cs();



echo $wa;

//静态变量 在函数结束后不会被释放
function test(){
    static $a=1;
    $a++;
    echo '<br>',$a;
}

test();
test();

echo '<br>';

$arr=[1,9,5,3,3,2,10];

function cc($v1,$v2){
    if($v1>$v2){
        return 1;
    }else{
        return 0;
    }
}

usort($arr,'cc');

print_r($arr);


























?>