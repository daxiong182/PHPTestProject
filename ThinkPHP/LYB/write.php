<?php

//1.接收用户输入的留言数据
$user=$_POST['user']??'';
$content=$_POST['content']??'';

$str=$user.'&^&'.$content.'&^&'.time().'@^@'   ;
$file=fopen('./mysql.txt','a');

//2.写入文件
if(flock($file,LOCK_EX)){
    //写入
    $int=fwrite($file,$str);
    if($int>0){
        echo '<script>alert("留言成功");location="./read.php"</script>';
    }else{
        echo '<script>alert("留言失败");location="./messageBoard.php"</script>';
    }
    //释放
    flock($file,LOCK_UN);
}

//关闭文件
fclose($file);






















?>