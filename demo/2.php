<?php

// include './1.php';

// use daxiong\Hello;

require './1.php';//require 引入的文件没有的话一定会报错阻塞 include不会阻塞 
require 'classs.php';

sayHello();

echo '<br>';

$hs=new \daxiong\Hello();

$hs->sayHello();
 




















?>