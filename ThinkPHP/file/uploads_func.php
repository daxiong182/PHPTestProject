<?php


function uploads($pic,$path='./upload',$size=100000,array $type=array('image/jpeg','image/png','image/gig')){
   
    function inner($file,$path,$size,$type){
        $info=[];
        if($file['error']>0){
            switch($file['error']){
                case 1:
                    return '超过了PHP.INI配置文件中的最大值';
                case 2:
                    return '超过了html表单设置的值';
                case 3:
                    return '只有部分文件被上传';
                case 4:
                    return '没有文件上传';
                case 7:
                    return '上传失败';
            }
        }
        //判断文件的大小
        if($file['size']>$size){
            return '上传文件过大';
        }

        if(!in_array($file['type'],$type)){
            return '文件类型不合法';
        }

        $path=rtrim($path,'/\\').'/';
        if(!file_exists($path)){
            mkdir($path,0777,true);
        }
        //重命名上传文件
        $suffix=strrchr($file['name'],'.');
        do{
            $newName=md5(uniqid().mt_rand(1,1000).time()).$suffix;
        }while(file_exists($path.$newName));

        if(move_uploaded_file($file['tmp_name'],$path.$newName)){
            $info['name']=$newName;
            $info['path']=$path;
            $info['pathName']=$path.$newName;
        }
        return $info;
    }

    $file=array();
    $infos=[];
    foreach ($_FILES[$pic] as $k=>$v) {
        $file['name']=$_FILES[$pic]["name"];
        $file['type']=$_FILES[$pic]['type'];
        $file['tmp_name']=$_FILES[$pic]['tmp_name'];
        $file['error']=$_FILES[$pic]['error'];
        $file['size']=$_FILES[$pic]['size'];
        //调用文件上传函数
        $infos[]=inner($file,$path,$size,$type);
    }
}






























?>