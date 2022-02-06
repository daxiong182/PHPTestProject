<?php



class Upload{
    public $file;
    public $pic;
    public $path;
    public $size;
    public $newImg;
    public $pathInfo=array();


    function __construct($pic,$path='./upload',$size=5000000,array $type=array('image/jpeg','image/png','image/gig'))
    {
        $this->pic=$pic;
        $this->file=$_FILES[$pic];
        $this->path=rtrim($path,'/').'/';
        $this->size=$size;
        $this->type=$type;
    }

    //1.判断上传过程是否有错误
    private function fileError(){
        if($this->file['error']){
            switch($this->file['error']){
                case 1:
                    return '文件过大，无法上传';
                case 2:
                    return '超过了最大允许上传文件数';
                case 3:
                    return '文件上传不完整';
                case 4:
                    return '没有文件上传';
                case 6:
                    return '找不到临时目录';
                case 7:
                    return '写入失败';
            }
        }
        return true;
    }

    //2.验证文件类型是否符合要求
    private function patternType(){
        if(!in_array($this->file['type'],$this->type)){
            return '类型不合法';
        }
        return true;
    }

    //3.验证图片大小是否符合要求
    private function patternSize(){
        if($this->file['size']>$this->size){
            return '上传的文件大小超过了预设的'.$this->size.'byte大小';
        }
        return true;
    }

    //4.判断上传路径和上传成功后要保存的文件名新名称
    private function reNameImg(){
        if(!file_exists($this->path)){
            mkdir($this->path,0777,true);
        }
        //获取图片的后缀名
        $suffix=strrchr($this->file['name'],'.');

        do{
            $this->newImg=md5(time().mt_rand(1,1000).uniqid()).$suffix;
        }while(file_exists($this->path.$this->newImg));

        return true;

    }

    //5.将图片从垃圾目录中移除
    private function moveImg(){
        if(move_uploaded_file($this->file['tmp_name'],$this->path.$this->newImg)){
            $this->pathInfo['pathInfo']=$this->path.$this->newImg;
            $this->pathInfo['name']=$this->newImg;
            $this->pathInfo['path']=$this->path;
            return $this->pathInfo;
        }else{
            return '未知错误,请重新上传';
        }
    }

    //6.制作一个方法将文件上传的过程调用执行
    private function myExec(){
        if($this->fileError()!==true){
            return $this->fileError();
        }else if($this->patternType()!==true){
            return $this->patternType();
        }else if($this->patternSize()!==true){
            return $this->patternSize();
        }else if($this->reNameImg()!==true){
            return $this->reNameImg();
        }else{
            return $this->moveImg();
        }
    }
   


    //7.需要一个方法 可以在外部调用 进行文件上传
    public function do_upload($mutiple=false){
        if($mutiple==false){
            //用户使用单文件上传方式
            return $this->myExec();
        }else{
            //用户使用了多文件上传的方式
            $this->file['name'];
            foreach ($_FILES[$this->pic]['name'] as $key => $value) {
                $this->file['name']=$value;
                $this->file['type']=$_FILES[$this->pic]['type'][$key];
                $this->file['tmp_name']=$_FILES[$this->pic]['tmp_name'][$key];
                $this->file['error']=$_FILES[$this->pic]['error'][$key];
                $this->file['size']=$_FILES[$this->pic]['size'][$key];
                $return[]=$this->myExec();
            }
            //返回多文件上传结果
            return $return;
        }
    }


}   







































?>