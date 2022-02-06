<?php

require_once 'config.php';


function connectDb(){

    $conn= mysqli_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PW,MYSQL_DB);
    
    if(!$conn){
        die('Can not connect db');
    }
    return $conn;
    
}



























?>