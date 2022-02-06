<?php





function num($num){
    echo $num;
    if($num>0){
        num($num-1);
    }else{
        echo '<hr/>';
    }
    echo $num;
}


num(3);




























?>