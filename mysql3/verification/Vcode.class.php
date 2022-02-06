<?php


/**
 * 1.创建画布
 * 2.分配颜色
 * 3.进行绘画
 * 4.告诉浏览器画的是什么
 * 5.输出或者保存图像
 * 6.释放资源
 * 
 */


class Vcode{

    //成员属性
    private $width;
    private $height;
    private $codeNum;
    private $fontFile;
    private $image;
    private $font;
    //成员方法


    //构造方法
    function __construct($fontFile='',$width=100,$height=40,$codeNum=4){
        //开启session 用于存储做好的验证码在外部校验
        session_start();
        $this->width=$width;
        $this->height=$height;
        $this->codeNum=$codeNum;
        $this->fontFile=$fontFile;

       
    }
    
    function __toString(){
        $this->getCreateImg();
        $this->setLine();
        $this->setPixel();
        $this->setChar();
        $this->outputImage();
        //保存验证码
        $_SESSION['code']=$this->font;
        return '';
    }

    //1.实现创建画布的方法 
    private function getCreateImg(){
        //创建画板
        $this->image=imagecreatetruecolor($this->width,$this->height);
        //制作背景色
        $back=imagecolorallocate($this->image,mt_rand(200,255),mt_rand(200,255),mt_rand(200,255));
        //填充背景
        imagefill($this->image,0,0,$back);
        //分配红色边框
        $borderColor=imagecolorallocate($this->image,255,0,0);
        //为背景绘制边框
        imagerectangle($this->image,0,0,$this->width-1,$this->height-1,$borderColor);

    }
    
    //2.实现画干扰线
    private function setLine(){
        for($i=0;$i<10;$i++){
            //分配线的颜色
            $lineColor=imagecolorallocate($this->image,mt_rand(150,200),mt_rand(150,200),mt_rand(150,200));
            //循环画干扰线
            imageline($this->image,mt_rand(2,$this->width-2),mt_rand(2,$this->height-2),mt_rand(2,$this->width-2),mt_rand(2,$this->height-2),$lineColor);
        }

    }

    //3.实现画干扰点
    private function setPixel(){
        for($i=0;$i<300;$i++){
            //分配干扰点的颜色
            $pixelColor=imagecolorallocate($this->image,mt_rand(120,150),mt_rand(120,150),mt_rand(120,150));
            imagesetpixel($this->image,mt_rand(2,$this->width-2),mt_rand(2,$this->width-2),$pixelColor);
        }
    }

    //4.实现画验证字符的方法
    private function setChar(){
        $str='03456789abcdefghijkmnpqrstuvwxyABCDEFGHIJKLMNPQRSTUVWXY';
        for($i=0;$i<$this->codeNum;$i++){
            $this->font.=$str[mt_rand(0,strlen($str)-1)];
        }
        //将文字写入到图片中
        if($this->fontFile==''){
            //没有传入字体文件 则使用系统内置字体
            for($i=0;$i<strlen($this->font);$i++){
                $fontColor=imagecolorallocate($this->image,
                mt_rand(0,120),mt_rand(0,120),mt_rand(0,120));
                $x=$this->width/$this->codeNum*$i+mt_rand(3,8);
                $y=mt_rand(10,$this->height/2);
                imagechar($this->image,mt_rand(3,5),$x,$y,$this->font[$i],$fontColor);
            }

        }else{
            for($i=0;$i<strlen($this->font);$i++){
                $fontColor=imagecolorallocate($this->image,
                mt_rand(0,120),mt_rand(0,120),mt_rand(0,120));
            }
            $x=$this->width/$this->codeNum*$i+mt_rand(5,8);
            $y=mt_rand($this->height/2,$this->height);
            imagettftext($this->image,mt_rand($this->height/3,$this->height/2),mt_rand(2,40),$x,$y,$fontColor,$this->fontFile,$this->font[$i]);
           
        }
    }


    //5.告诉浏览器图像相关信息
    private function outputImage(){
        header('Content-type:image/jpeg');
        imagejpeg($this->image);

    }

    //6.释放资源 析构方法
    function __destruct(){
        imagedestroy($this->image);
    }


}












?>