<?php

echo date('Y-m-d H:i:s');


echo '<br>';

//验证日期是否合法

if(checkdate(02,29,1980)){
    echo '日期合法';
}else{
    echo '日期不合法';
}


echo '<br>';

//计算 距离 2022年8月1日还有多少天 strtotime("") 计算指定日期的时间戳

$timeFuture=strtotime('2022-08-30 00:00:00');

echo $timeFuture;

echo '<br>';

echo time();

echo '<br>';

echo ($timeFuture-time())/60/60/24;


echo '<br>','----------------------------------------','<br>';


echo mktime(date('H')+2); //mktime()可以输出指定要求的时间戳


echo '<br>','------------------输出微妙----------------------','<br>';


echo microtime();



echo '<br>','------------------输出微妙2----------------------','<br>';


echo microtime();



























?>