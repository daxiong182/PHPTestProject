<?php

class People{
    
/**
 * @param $age 年龄
 * @param $name 姓名
 */
    public function __construct($age,$name,$sex){
     $this->_age=$age;
     $this->_name=$name;
     $this->_sex=$sex;
     People::$num++;
     //static 静态变量和 常量 方法 都可以通过 Man::xxx 访问。
    if(People::$num>People::MAX_MAN_NUM){
        throw new Exception('不能创建更多的人了');
    }

    }

    public function getAge()
    {
        return $this->_age;
    }

    public function getName()
    {
        return $this->_name;
    }
    public function getSex()
    {
        return $this->_sex;
    }
    private static $num=0;
    private const MAX_MAN_NUM=200;
    //类方法 也称为静态方法 静态方法 通常是用来描述图纸属性的
    public static function sayHello(){
        echo 'Hello Man';
    }
    public function eat(){
        return '爱吃红烧猪蹄';
    }

    private $_age,$_name;

}

























?>