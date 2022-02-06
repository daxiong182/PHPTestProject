<?php

//定义一个数组 
$arrs=array('a','wawa'=>'b',123,'true','mm');

$array=array();


//系统函数
// $result=array_pop($arrs);

// echo $result;

//实现自定义数组方法
function my_pop(array &$arr){
    
    //如果传入一个空数组 则返回null
    if(empty($arr)){
        return null;
    }

    foreach ($arr as $key => $value) {
        
    }

 unset($arr[$key]);

 return $value;


}


function my_shift(&$arr){

    if(!is_array($arr)){
        return '传入的参数不是数组';
    }

    if(empty($arr)){
        return null;
    }
    $num=1;
    $array=array();
    //遍历数组实现删除数组中的第一个元素
    foreach ($arr as $key => $value) {
        //3.1第一次遍历进来就要删除
        if($num==1){
            unset($arr[$key]);
            return $value;
        }else{
        $array[$key]=$value;
        }

        $num++;
    }

    $arr=$array;
    

}


print_r(my_shift($arrs));

echo '<br>';

print_r($arrs);



































?>