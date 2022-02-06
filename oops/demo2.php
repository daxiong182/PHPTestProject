<?php

    class a{
        function zhangxiang(){
            echo 'haokan';
        }
    }

    class a1 extends a{
        function zhangxiang()
        {
            // parent::zhangxiang();
            // $this->zhangxiang(); 死递归
            echo '很好看';
            
        }
    }


$obj=new a1();
$obj->zhangxiang();





























?>