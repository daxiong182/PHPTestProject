<?php



date_default_timezone_set('PRC');

echo time();
echo '<br>';

echo date('Y-m-d H:i:s');


echo '<BR>';
echo PHP_INT_MAX;



echo '<br>';

$timeUnix=mktime(25,130,70,17,35,2022);
$date=date('Y-m-d H:i:s',$timeUnix);

var_dump($date);


//strtotime() 将符合指定格式的字符串转换为时间戳

$unix=strtotime('-3 week  -2 day ');


$date3=date('Y-m-d H:i:s',$unix);


echo $date3;

echo '<br>';


$time3=microtime(true);

echo $time3;

echo '<br>';
echo '<br>';

























?>