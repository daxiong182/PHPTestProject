<?php


set_error_handler('doError');


$conn=mysqli_connect('localhost','root','root','daxiong');

echo '<pre>';
print_r($conn);
echo $c;


//php中错误的三个级别 error warning notice 

error_reporting(E_ALL ^ E_NOTICE);



function doError($error_no,$error_str,$error_file,$error_line){
    var_dump(func_get_args());
}

























?>