<?php

function filter_nv($v){

    if($v['sex'] =='女'){
        return false;
    }else{
        return true;
    }

}






function age($v){
    if($v['sex']=='女'){
        $v['age']+=2;
        return true;
    }else{
        return false;
    }
    
}

$people=[
    ["name"=>'张三','age'=>20,'sex'=>'男'],
    ["name"=>'李四','age'=>20,'sex'=>'女'],
    ["name"=>'张三','age'=>20,'sex'=>'男'],
];

$newArr=array_filter($people,'age');

echo '<pre>';

print_r($newArr);



























?>