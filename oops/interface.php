<?php

interface Diannao{
    const xdw=666;//接口中只有常量 没有变量
    function tongxin();//接口中的方法都是抽象方法 不用abstructe修饰 接口必须重写
    function tongdian();
}



class jianpan implements Diannao{
    function tongxin()
    {
        echo '键盘已链接 开始通信';
    }

    function tongdian()
    {
        echo '键盘已链接 开始通电';
    }
}



$obj=new jianpan();

$obj->tongdian();




























?>