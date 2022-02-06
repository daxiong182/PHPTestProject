<?php

/** php中文件相关操作 */

//创建文件 touch()
$res=touch('./mytxt');
echo $res;


//拷贝文件 如果目标文件存在则会覆盖 copy()
$res2=copy('./mytxt','../think/aa.txt');


//移动文件 rename()
$res3=rename('./mytxt','./b.txt');



//删除文件 unlink()
$res4=unlink('./b.txt');


//判断是否为文件（也有可能是文件夹）
$res5=is_file('./file.php');

echo $res5;

//判断文件是否存在

$res6=file_exists('./file.php');

echo $res6;


























?>