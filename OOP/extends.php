<?php

abstract class Notify{

    protected $color='red';
    abstract public function content();
    public function message()
    {
        return '发送消息'.$this->color."\t".$this->content();
    }

}


class User extends Notify{
    public function content(){
        return '感谢注册大熊的网站';
    }
    public function register(){

        return $this->message();

    }
}

class Comment {
    public function send(){

    }

}


echo (new User)->register();

echo '<pr>';






























?>


