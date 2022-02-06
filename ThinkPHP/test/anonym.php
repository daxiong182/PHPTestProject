<?php


$anony=function(){
    echo '我是匿名函数';
};

//php中的匿名函数是Object类型的
var_dump($anony);


//变量函数
function father(){
    $pph='痔疮手术';
    $son=function () use($pph){
        echo $pph;
    };
    //调用用内部函数
    $son();
}


echo '<br>';
echo '<br>';



//匿名回调
function js($jia){
    $no1=5;
    $no2=7;

    echo $jia($no1,$no2);

}


function jia($no1,$no2){
    return $no1+$no2;
}

js('jia');



































?>