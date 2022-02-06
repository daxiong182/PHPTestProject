<?php


//接口当中只有抽象方法
interface Cache{
    public function set();
    public function get();



}



class Mysql implements Cache{
    public function get()
    {

    }

    public function set()
    {
        
    }

}























































?>













