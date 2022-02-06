<?php


//判断文件是否可读

// $results=is_writable('./file.php');
// echo $results;

//返回文件创建的时间戳
// $time=filectime('./file.php');
// echo date('Y-m-d H:i:s',$time);


//打开文件
// $file=fopen('./f.txt','r');

//读取文件 
// $content=fread($file,1024);

//读取一行文件

//     $content2=fgets($file);
//     echo $content2;
//     echo '<br>';
//     echo '<br>';

// $content='';
//判断指针是否到了结尾处
// while(!feof($file)):

// $content .=fread($file,1);


// endwhile;

// echo $content;

// fclose($file);


//打开 读取 关闭一气呵成
// $res=file_get_contents('./f.txt');

// echo $res;



/*******  文件写入操作   ********/

//1.打开
$file=fopen('./c.txt','w');

//2.写入
$int=fwrite($file,'娃哈哈');
echo $int;

//3.关闭文件
fclose($file);














?>