<?php

$name=$_POST['name'];
$age=$_POST['age'];

if(!$_POST['name']){

    die('user name not define');
}

if(!$_POST['age']){

    die('user age not define');
}

require_once 'functions.php';

$conn=connectDb();
$age=intval($age);


mysqli_query($conn,"INSERT INTO users(name,age)VALUES('$name',$age)");

if(mysqli_errno($conn)){
    echo mysqli_errno($conn);
}else{
    header("Location:allusers.php");
}

























?>