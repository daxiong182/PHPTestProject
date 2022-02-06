<?php
include 'space.php';
include 'spaces.php';

//使用use导入　函数需要加function 常量需要加const 导入类时不需要加关键字　

//通过命名空间引入函数
use function lmonkey\test;

test();


echo __NAMESPACE__;

























?>