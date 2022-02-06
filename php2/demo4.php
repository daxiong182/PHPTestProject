<?php

// echo "<meta http-equiv='refresh' content='1' url=''>";
// 日期倒计时案例

$endtime="2022-03-15 00:00:00";

$btime=time();//当前时间的时间戳
$etime=strtotime($endtime);//指定时间的时间戳
$chatime=$etime-$btime;

$day0=$chatime/3600/24;
$day=floor($day0);

$xiaoshi0=($day0-$day)*24;
$xiaoshi=floor($xiaoshi0);


$fen0=($xiaoshi0-$xiaoshi)*60;
$fen=floor($fen0);


$miao0=($fen0-$fen)*60;
$miao=floor($miao0);


echo '距离'.$endtime.'还有'.$day.'天'.$xiaoshi.'小时'.$miao.'秒';

















































?>