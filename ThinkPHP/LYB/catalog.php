<?php

/*********** php中目录相关操作 *************/

//创建目录
if(!file_exists('./xxyd')){
    mkdir('./xxyd');
}


//判断是否为目录
is_dir('./xxyd');

//删除目录 只能删除空目录
//  rmdir('./xxyd');


 //判断目录是否存在
$result=file_exists('./xxyd');
 
echo $result;

//dirname() 返回路径中的目录部分

//basename()返回文件中的文件名部分

//pathinfo()返回路径信息

echo '<br>';

$path=basename('./LYB/catalog.php');

echo $path;


//打开目录
$path2=opendir('./xxyd');

//读取目录 参数是opendir打开成功后返回的资源
$dir=readdir($path2);
echo $dir;

//关闭目录
closedir($path2);


































?>