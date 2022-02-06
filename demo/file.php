<?php


$f=fopen('data','w');


fwrite($f,'Hello php');

fclose($f);


echo 'OK';


//直接获取文件内容
echo '<br>', file_get_contents('data');



























?>