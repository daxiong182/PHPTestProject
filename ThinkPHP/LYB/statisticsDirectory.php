<?php

$dirNum=0;
$fileNum=0;

//1.打开目录
$dir=opendir('./xxyd');


//2.读取目录
// $name=readdir($dir);


//3.判断是否为目录
while($name=readdir($dir)){
    if(is_dir('./xxyd/'.$name)){
        $dirNum++;
        echo './xxyd/'.$name."是目录".'<br/>';
    }else{
        $fileNum++;
        echo './xxyd/'.$name."是文件".'<br/>';
    }
}



//4.关闭目录
closedir($dir);
echo $dirNum;
echo '<br>';

echo $fileNum;



function num($path,&$dirNum,&$fileNum){
    $dir=opendir($path);
    while($name=readdir($dir)){
        if($name!='.' && $name!='..'){
            $newPath=$path.'/'.$name;
            if(is_dir($newPath)){
                num($newPath,$dirNum,$fileNum);
                $dirNum++;
            }else{
                $fileNum++;
            }
        }
    }
    closedir($dir);

}

$dirNums=0;
$fileNums=0;

// num('./xxyd',$dirNums,$fileNums);



//rmdir() 只能删除空目录 手写实现删除嵌套目录
function delDir($path){
    //1.打开目录
    $dir=opendir($path);
    //2.读取目录
    while($name=readdir($dir)){
        if($name!='.'&&$name!='..'){
            //3.拼接完整路径
            $newPath=$path.'/'.$name;
            //4.判断是文件还是目录
            if(is_dir($newPath)){
                delDir($newPath);
            }else{
                unlink($newPath);
                echo '删除文件'.$newPath.'成功<br/>';
            }
        }
    }
    closedir($dir);
    rmdir($path);
    echo '删除目录'.$path.'成功<br/>';

}


// delDir('./xxyd');

//统计目录的大小 注意：目录本身是没有大小的 目录的大小是其中文件的大小
function dirSize($path){
    //定义一个目录的大小
    $dirsize=0;

    $dir=opendir($path);

    //2.读取目录
    while($name=readdir($dir)){
        if($name!='.'&&$name!='..'){
            $newPath=$path.'/'.$name;
            //判断是文件夹还是目录
            if(is_dir($newPath)){
               $dirsize+= dirSize($newPath);
            }else{
                $dirsize+=filesize($newPath);
            }
        }
    }

    //3.关闭目录
    closedir($dir);

    return $dirsize;


}

echo '<hr>';

$count=dirSize('./xxyd');

echo $count;


//移动和删除目录
function renameDir($dirsrc,$dirto){

    if(is_file($dirto)){
        echo '目标不是目录不能创建';
        return;
    }

    //如果创建的目录当前路径下不存在 则直接创建
    if(!file_exists($dirto)){
        mkdir($dirto);
        echo '<font color="green">创建目标目录:'.$dirto.'成功</font><br/>';
    }

    //3.打开原目录 并复制和移动
    $dir=opendir($dirsrc);

    while($name=readdir($dir)){
        if($name!='.'&&$name!='..'){
            $pathSrc=$dirsrc.'/'.$name;
            $pathTo=$dirto.'/'.$name;
            if(is_dir($pathSrc)){
                renameDir($pathSrc,$pathTo);
            }else{
                rename($pathSrc,$pathTo);
            }
        }
    }
    closedir($dir);
    //删除原目录
    rmdir($dirsrc);
}

renameDir('./xxyd','./mmd');



















?>