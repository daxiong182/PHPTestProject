<?php

  
echo htmlspecialchars( $_GET['strs']);

//htmlspecialchars() 将特殊字符转换为html实体 防止注入执行

$str='<a href="https://www.lmonkey.com">lmon\'</a>';

$newStr=htmlspecialchars($str);

echo '<br>';
echo '<br>';

echo $newStr;

echo '<br>';
echo '<br>';

echo chr(71);

echo ord('M');




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>html</title>
</head>
<body>
 

<form action="" method="get">
    <input type="text" name='strs' >
    <input type="submit" value='提交'> 
</form>





</body>
</html>

<?php


/** 手动实现大小写转换 */
function myStrToUpper(string $str){
    $newStr='';
    $len=strlen($str);

    //2.遍历字符
    for($i=0;$i<$len;$i++){
        //3.得到每个字符的ASCII
        $ascii=ord(substr($str,$i,1));
        //4.将每个字符的ASCII值-32 转化为大写字符的ASCII
        if($ascii>=97&&$ascii<=122){
            $ascii-=32;
        }
        // 5.转换为字符
        $newStr .= chr($ascii);

    }

    return $newStr;


}

$str2='abc';

$Up=myStrToUpper($str2);

echo $Up;




echo '<br>';
echo '<br>';


$str3='ABCDEFGHIJKLMNOPQRSTUVWXYZ';

var_dump(explode('-',chunk_split($str3,2,'-')))









?>