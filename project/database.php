<?php

$conn=mysqli_connect('localhost','root','root','liuyan');

if(!$conn){
    die('数据库链接失败');
}

mysqli_query($conn,'set names utf8');























?>