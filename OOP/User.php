<?php

namespace App;


class User
{
    public static function make()
    {
        echo __METHOD__;
    }
}






class Bootstrap
{
    public static function boot()
    {
        spl_autoload_register([new self,'autoload']);
    
    }

    public function autoload()
    {
        // $file=str_replace('\\','/',$class).'.php';
        // require $file;
    }
}











?>