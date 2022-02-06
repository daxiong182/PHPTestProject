<?php


$str='Lm!On@key_XXyd';

//1.定义函数
//2.接收参数
//3.遍历字符串

function translate(string $str){
    //定义一个返回的变量
    $newStr='';

    $str1=chunk_split($str,1,'-');
    
    $arr=explode('-',$str1);
   
    array_pop($arr);

    foreach ($arr as $k => $v) {
        $ascii=ord($v);

        if($ascii>=97&&$ascii<=122){

        $ascii-=32;

        }elseif($ascii>=65&&$ascii<=90){

        $ascii+=32;

        }
        $newStr .= chr($ascii);

    }

    return $newStr;


}



$new =translate($str);


echo $new;























?>