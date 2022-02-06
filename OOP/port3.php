<?php

class User
{
    public function say()
    {
        return '你好后盾人';
    }

}


$user=new User;

echo $user->say();


echo '<hr>';

class Code{
    protected $width;
    public function __construct(int $width=300)
    {
        $this->width=$width;
        echo 33;
    }
    public function make(){
        return '你生成了'.$this->width.'宽度的验证码';
    }
}


(new Code(100))->make();











































?>


