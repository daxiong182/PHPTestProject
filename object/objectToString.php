<?php

class Plane{
    //成员属性
    public $head='鸡头';

    //魔术方法　串行化时自动触发
    function __sleep(){

    }

    //成员方法 反串行化时自动触发
    function __wakeup()
    {
        
    }

    //修改克隆后的部分属性
    function __clone()
    {
    $this->head='机头啊';
    }






}


$fj=new Plane();

$newPlane=clone $fj;

var_dump($newPlane);




























?>


