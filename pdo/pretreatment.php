<?php

require_once './init.php';

//PDO异常处理

try {
    $pdo=pdo();
    // $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
     $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('数据库链接失败： '.$e->getMessage());
}


$sql='insert into stuus values(null,"jike",8,19)';
$res=$pdo->exec($sql);

if($res){

    echo 'OK';

}else{

    // echo $pdo->errorCode();
    // print_r($pdo->errorInfo());


}































?>


