<?php

//1.遍历目录的功能
function bianli($path){
    $info=[];
    $dir=opendir($path);

    while($name=readdir($dir)){
        if($name!='.'&&$name!='..'){
            $info[]=$path.'/'.$name;
        }
    }

    closedir($dir);
    return $info;

}


//2.统计文件大小
function dirSize($path){
    $dirsize=0;

    $dir=opendir($path);

    while($name=readdir($dir)){
        if($name!='.'&&$name!='..'){
            $newpath=$path.'./'.$name;
            if(is_dir($newpath)){
                $dirsize+=dirSize($newpath);
            }else{
                $dirsize+=filesize($newpath);
            }
        }
    }
    closedir($dir);
    return $dirsize;
}

//3.单位转换
function toSize($size){
    if($size>pow(1024,3)){
        $dw='GB';
        $size=round($size/pow(1024,3),2);
    }elseif($size>pow(1024,2)){
        $dw='MB';
        $size=round($size/pow(1024,2),2);
    }elseif($size>pow(1024,1)){
        $dw='kB';
        $size=round($size/pow(1024,1),2);
    }else{
        $dw='byte';
    }
    return $size.$dw;
}

//4.删除目录
function delDir($path){
    $dir=opendir($path);
    while($name=readdir($dir)){
        if($name!='.'&&$name!='..'){
            $newpath=$path.'/'.$name;
            if(is_dir($newpath)){
                delDir($newpath);
        }else{
            unlink($newpath);
        }
    }
}

closedir($dir);
rmdir($path);

}


























?>