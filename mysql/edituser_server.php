<?php


require_once 'functions.php';

$conn=connectDb();

if(empty( $_POST['id'])) {
    die('id is empty');
}

if(empty($_POST['name'])){
    die('name is empty');
}

if(empty($_POST['age'])){
    die('age is empty');
}

$id=intval($_POST['id']);
$name=$_POST['name'];
$age=intval($_POST['age']);

mysqli_query($conn,"UPDATE users SET name='$name', age=$age where id=$id");


if(mysqli_errno($conn)){
    echo mysqli_error($conn);
}else{
    header('Location:allusers.php');
}
























?>