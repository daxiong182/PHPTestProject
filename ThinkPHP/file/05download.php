<?php

//声明要下载的文件类型
header('Content-type:application/pdf');
$name='美女。jpg';
$newName=iconv('utf-8','gbk',$name);
//对下载文件进行描述
header('Content-Disposition:attachment;filename="downloaded.pdf"');
header('Content-type:text/html;charset=utf-8');
//读取下载文件
readfile('original.pdf');





























?>