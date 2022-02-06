<?php
include './uploads_func.php';

echo '<pre>';
print_r($_FILES);
$infos=uploads('pic','./xxyd');
echo '<pre>';

print_r($infos);





// function upload($pic,$path,$size,$type){
//     $file=$_FILES['$pic'];
//     var_dump($file);



// }



// $file=[];
// foreach ($_FILES['pic']['name'] as $k => $v) {
//     $file['name']=$v;
//     $file['type']=$_FILES['pic']['type'][$k];
//     $file['tmp_name']=$_FILES['pic']['tmp_name'][$k];
//     $file['error']=$_FILES['pic']['error'][$k];
//     $file['size']=$_FILES['pic']['size'][$k];
// }


























?>