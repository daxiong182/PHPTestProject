<?php

require_once 'People.php';


class Man extends People{
    public function __construct($age,$name){
        parent::__construct($age,$name,'男');
    }
    
    //继承后方法的重写
    public function eat(){
        //parent::eat();

        echo 'Man '.$this->getName().'喜欢 beautiful girl';

    }

}

$m=new Man(10,'赵四');

// echo $m->sayHello();

echo '<br>',$m->eat();



























?>