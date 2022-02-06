<?php

header('Content-type:text/html;charset=utf8');

$config=[
    'host'=>'127.0.0.1',
    'user'=>'root',
    'password'=>'root',
    'database'=>'daxiong',
    'charset'=>'utf8'
];

$dsn=sprintf("mysql:host=%s;dbname=%s;charset=%s",
$config['host'],
$config['database'],
$config['charset']
);


try{
   $pdo= new PDO($dsn,$config['user'],$config['password'],
   [PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING]);
   $pdo->query('select*from article');

}catch(PDOException $e){
   
    die($e->getMessage());
}

   












?>