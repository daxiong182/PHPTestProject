<?php

define('XDN',666); //常量不受作用范围限制 没有全局和局部的概念
const ll=12;
echo XDN,'<BR>';



// echo 是内部指令 不是函数
echo "hi php";


//php中的八大数据类型 
$a=1;//全局变量
function cs(){
   global $a; //使用global 将局部变量转换为全局变量
   $a=2;
   echo '<br>',$a,"\t",ll;

}

cs();

echo '<br> ',$a;
echo '<br>';
var_dump($a);


echo '<br>',gettype($a);

echo '<br>','----------------------------------------';


//php中声明字符串的三种方式 ‘’ “ ” 定界符 注意：双引号中是可以识别变量的 单引号不可以 {}可以截取字符串中的一段作为一个整体

$c='aa';
$d='dd';

echo'<br>', '$c$d';

echo '<br>',"$c$d";


$s=<<<xdw
lajfdoaijfaf
xdw;





echo '<br>',$s;









?>