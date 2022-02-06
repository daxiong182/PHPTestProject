<?php


// function demo(int $sum){
//     $date=array();

//     for($i=0;$i<$sum;$i++){
//         $date[]=time();
//     }
//     return $date;
// }

// $result=demo(10);

// echo '<pre>';

// print_r($result) ;

//生成器的出现
function demo1(int $num){
    for($i=0;$i<$num;$i++){
        yield time();
    }
}

$r=demo1(10);

foreach ($r as $key => $value) {
    sleep(1);
    echo $value.'<br>';
}




























?>