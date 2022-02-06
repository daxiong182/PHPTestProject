<?php

if(empty($_GET['id'])){
    die('id is empty');
}

require_once 'functions.php';

$conn=connectDb();
$id=intval($_GET['id']);

mysqli_query($conn,"DELETE FROM users where id=$id");

if(mysqli_errno($conn)){
    die("Fail to delete user with id $id");
}else{
    header("Location:allusers.php");
}























?>