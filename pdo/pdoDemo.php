<?php

//单态类 目的是产生唯一的对象
class A{
    private static $a=null;

    private function __construct(){

    }

   static function makeA(){
       if(self::$a==null){
           self::$a=new self();
       }
        return self::$a;
    }

}

print_r(A::makeA());






















?>