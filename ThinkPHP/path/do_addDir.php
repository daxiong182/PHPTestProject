
<?php

//实现目录创建功能

var_dump($_POST);

//1.拼接完整路径
$newPath=$_POST['path'].'/'.$_POST['name'];


//2.判断目录是否存在
if(file_exists($newPath)){

    echo '<script>alert("'.$_POST['name'].'目录已经存在");location="./tranvers.php?path='.$_POST['path'].'"</script>';

}else{
    if(mkdir($newPath)){
        echo '<script>alert("'.$_POST['name'].'目录创建成功");location="./tranvers.php?path='.$_POST['path'].'"</script>';
    }else{
        echo '<script>alert("'.$_POST['name'].'目录创建失败");location="./tranvers.php?path='.$_POST['path'].'"</script>';
    }
}






































?>


