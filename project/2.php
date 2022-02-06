<?php

$arr=$_POST;

include ('database.php');//include 包含的文件不存在 报错但会继续执行 (include错误不是致命错误)

echo '111';



define("CHELUN",4);


class Car{
    public $color='red';
    public $waiguan;
    const cHELUN=4; //常量必须用const声明 且必须赋值
   //变量的声明 必须用public protected private static 

   public function qidong(){
       echo '<br>','启动', $this->color;
      
   }


}


$obj=new Car;

$obj->qidong();

echo '<br>';
echo $obj->color;

//变量的引用 内部 $this->常量名 外部 对象名->常量名 (备注：调用的变量名没有$)

// //常量的引用方式 类名::常量名 对象名::常量名
// echo '<br>', $obj::cHELUN;

// echo '<br>',Car::cHELUN;

//静态方法的调用 类名::方法名 对象名::方法名/对象名->方法名

class F{
    public $bor='222';
    public const NAME='ZHANG';
    public static function k(){echo '<br>','可爱';}
    public function l(){echo '<br>','脸型 ',F::NAME;}
    public function x(){echo '<br>','性格',$this->bor;}
}

//重写的方法 只能时public和protected 修饰的方法
class C extends F{
    
}

$obj=new F();

$obj->l();

$obj->x();


//$obc::k();
//$obc->k();

die;






?>
















