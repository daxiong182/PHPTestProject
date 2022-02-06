<?php


/** 正则表达式的定界符 */

$str=$_POST['str'];

// $pattern='/go?gle/'; ? + *
// $pattern='/abc|def/'; // \b单词边界 ，空格 & ！等特殊字符可以作为词边界
// $pattern='/^[a-zA-Z]{3,5}:\/\/(?:[0-9A-Za-z]+(-[0-9a-zA-Z]+)?\.)+[A-Za-z]{2,}$/';
//$pattern='/./'表示匹配所有 除了换行
//$pattern='/.*?/' 非贪婪模式 .*? 匹配任意 只匹配一次
//正则表达式中的模式修正符 i忽略大小写 x忽略正则中的空白 s让.元字符可以匹配\n  m将文本视为多行处理 S加速匹配 U改变贪婪模式


$result=preg_match($pattern,$str,$match);//匹配到了返回1 否则返回0


if($result){
    echo '匹配成功';
}else{
    echo '匹配失败';
}
























?>