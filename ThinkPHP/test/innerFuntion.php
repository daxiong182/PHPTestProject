<?php

function outer(){
    //在outer函数内部再次定义一个函数(内部函数)
    function inner(){
        echo '##########################';
    }
    inner();//内部函数只能在声明之后调用 不会有提升
}


// inner(); 内部函数在全局中或者外部无法直接调用

outer();


echo '<br>';




























?>