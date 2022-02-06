<?php

if(isset($_GET['path'])&&!empty($_GET['path'])){
    var_dump($_GET['path']);

    if(is_dir($_GET['path'])){
        include './global_func.php';

        delDir($_GET['path']);

        echo '<script>alert("删除'.basename($_GET['path']).'目录成功");location="./tranvers.php?path='.dirname($_GET['path']).'"</script>';

    }else{
        unlink($_GET['path']);

        echo '<script>alert("删除'.basename($_GET['path']).'文件成功");location="./tranvers.php?path='.dirname($_GET['path']).'"</script>';

    }

}









?>