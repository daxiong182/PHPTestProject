<?php


class Captcha
{   
    protected $width;
    protected $height;
    public function __construct(int $width=100,int $height=30)
    {
        $this->width=$width;
        $this->height=$height;
    }
    public function render()
    {
        // echo 33;
        $res=imagecreatetruecolor($this->width,$this->height);
        header('Content-type:image/png');
        imagepng($res);
    }

    protected function line(){
        header('Content-type:image/png');
    }


    protected function show(){
        
    }



}
































?>