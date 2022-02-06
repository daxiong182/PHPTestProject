<?php

$phone='153890878411';

$zz="/^1[0-9]{10}$/";

$a=preg_match($zz,$phone);

var_dump($a);

// 正则 email
$str='ss@163.com';

$z2="/^\w+@[a-zA-Z0-9]+\.[a-zA-Z0-9]{2,4}$/";

$check=preg_match($z2,$str);

echo '<br>';

var_dump($check);

echo '<br>';

//正则 url
$url='http://www.xuduowei.com';

$z3="/^https?:\/\/\w+\.+\w+/";

if(preg_match($z3,$url)){
    echo "正确";
}else{
    echo "网址错误";
}

echo '<br>';

//真实姓名及汉字长度的验证
$z4="/^[^u4E00-u9FA5]{4,10}$/";

$str2="张三";

if(preg_match($z4,$str2)){
    echo '姓名匹配正确';
}else{
    echo '姓名匹配错误';
}

echo '<br>';
//正则替换
echo preg_replace("/[293]/",'*',"15398072",1); //最后一个参数表示替换多少次

echo '<br>';

$str3='张三#李四#大六,小李';

$arr=explode("#",$str3);

print_r($arr);

echo '<br>';

$arr2=preg_split("/[#,]/",$str3);

print_r($arr2);




































?>



