<?php


//接口的定义：如果一个类中的方法都是抽象方法　且不存在常量以外的成员属性　

//单例模式

//trait

trait DemoTrait{
    public $pro=true;
    public $pro2=1;

    function say(){
        echo '我在说话';
    }

}


class Demo_class{
    use DemoTrait;
}


$one=new Demo_class();

$one->say();

//匿名类　某个类只使用一次

echo '<br>'.'<hr>';

$person=new class{

};

var_dump($person);

//__autoload(){}在php7.2之后已经弃用了　现用

spl_autoload_register(function($className){
    include_once $className.'.class.php';
})

























?>