<?php
// mysqli_connect('localhost','user','password','dbname');

 

function pdo(){
    $dsn='mysql:dbname=daxiong;host=127.0.0.1';
    $user='root';
    $password='root';
    try {
    
        $pdo=new PDO($dsn,$user,$password);
    
    } catch (PDOException $e) {
        
        echo 'Connection failed: '.$e->getMessage();
    
    }

    return $pdo;
}


























?>













