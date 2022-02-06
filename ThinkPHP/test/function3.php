<?php

function demo(array &$arr,$order=true){
    $len=count($arr);
    if($order){
    //正序
    for($i=0;$i<$len-1;$i++){
        for($j=0;$j<$len-$i-1;$j++){
            if($arr[$j]>$arr[$j+1]){
                $tmp=$arr[$j];
                $arr[$j]=$arr[$j+1];
                $arr[$j+1]=$tmp;
            }
        }
    }
    

    }else{
  //倒序
  for($i=0;$i<$len-1;$i++){
    for($j=0;$j<$len-$i-1;$j++){
        if($arr[$j]<$arr[$j+1]){
            $tmp=$arr[$j];
            $arr[$j]=$arr[$j+1];
            $arr[$j+1]=$tmp;
        }
    }
}

}
  


}


$arr=[3,4,5,9,11,2];

demo($arr);

echo '<pre>';

print_r($arr);








































?>