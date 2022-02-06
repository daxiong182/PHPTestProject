<?php

$file=fopen('./f.txt','r');

//读取文件  加读取锁
// $res=flock($file,LOCK_SH);
// var_dump($res);

//释放锁 
// $res2=flock($file,LOCK_UN);

if(flock($file,LOCK_SH)){
    while(!feof($file)){
        $con=fread($file,1);
        echo $con;
    }
    //释放锁
    flock($file,LOCK_UN);
}

var_dump($res2);


fclose($file);



























?>