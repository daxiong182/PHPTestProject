<?php




include './Upload.class.php';


$upload=new Upload('pic','./lmonkey/xxyd');


//多文件上传
$result=$upload->do_upload(true);
var_dump($result);


















?>