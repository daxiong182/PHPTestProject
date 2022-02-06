<?php


class a{

 static $obj=null;
 //单例模式 禁止外部new 只能调用 instance()
   final private function __construct()
   {
       
   }
 //单例模式 禁止克隆
   final private function __clone()
   {
       
   }
   //单例模式的生产方法
   static function instance(){
       if(self::$obj===null){
        self::$obj=new a;
       }
       return self::$obj;
       
    }

}


$a=a::instance();

$b=a::instance();

// $c=new a();


if($a===$b){
    echo '<br>',1;
}else{
    echo 0;
}



class b extends a{
  
}
























?>