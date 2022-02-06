<?php

$arr=array('800a'=>'c','a','b');






//1.如果传入的不是数组 则返回null
function my_unshift(&$arr){
    //1.如果传入的不是数组 则返回null
    if(!is_array($arr)){
        return null;
    }
    //2.接收用户传入的所有实参值
    $args=func_get_args();
    //转接原数组
    $array=$arr;

   //3.清空原数组
    $arr=array();

   //4.接收并添加参数 过滤掉第一个参数
    foreach ($args as $key => $value) {
        if($key!=0){
            $arr[]=$value;
        }
    }
    //5.将原数组的数据再次存入到$arr这个变量中
    foreach ($array as $k=>$v) {
        if(is_numeric($k)){
            $arr[]=$v;
        }else{
            $arr[$k]=$v;
        }

    }
    return count($arr);

}



my_unshift($arr,'ccccc');

var_dump($arr);


function my_filter(array $arr,$func='' ){
    
    $array=array();

    if($func==''){
        //如果用户没有传入参数 过滤掉元素为false的数组
        foreach ($arr as $k =>$v) {
            //数据类型转换
            $new=(bool)$v;
            if($new){
                $array[$k]=$v;
            }
        }

    }else{
        foreach ($arr as $k => $v) {
            if($func($v)){
                $array[$k]=$v;
            }
        }


    }

    return  $array;
    
    
}

$arr2=array(1,2,3);

//my_map() 对数组中的每一个元素执行回调
function my_map($func,array $arr){
    //定义返回数组
    $array=array();
    //遍历数组 将数组中的每一个元素放入到回调函数中
    foreach ($arr as $v ) {
        $array[]=$func($v);

    }
    return $array;

}


$arr3=my_map(function($v){
    return $v*2;
},$arr2);


var_dump($arr3)


























?>