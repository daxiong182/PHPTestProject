<?php

//常量和变量的使用需要$符 函数可以直接声明
function traceHello(){
    echo 'Hello PHP','</br>';
    echo 'Hello World'.'<br>';
}

// traceHello();


//将函数赋值给一个变量
$func='traceHello';
$func();


function sayHello($name){
    // echo 'Hello'.$name.'<br>'; php的""中可以写 $变量
    echo "a=$name";

};

sayHello('ZhangSan');

sayHello('LiShi');


 







?>