<?php



//1 1 2 3 5 8 13 21  


// 实现斐波那契数列
function add ($n){

    $no1=1;
    $no2=1;

    for($i=0;$i<$n;$i++){

        $tmp=$no1;
        $no1=$no2;
        $no2=$tmp+$no2;
        echo $tmp.' ';

    }

}


add(20);

echo '<br/>';
echo '<br/>';

//使用递归实现斐波拉契数列
//1 1 2 3 5 8 13 21 34 55

function GetFbnc($n){
    if($n<=1){
        return 1;
    }
    return GetFbnc($n-1)+GetFbnc($n-2);
    

}

echo GetFbnc(30);


echo '<br/>';
echo '<br/>';


//4.一只公鸡5块钱 一只母鸡3块钱，三只小鸡1块钱 问100块钱买100只鸡有几种情况，注意每只鸡最少买一只
function buyChicken(){
    $smallPrice=1/3;
    $wmPrice=3;
    $manPrice=5;
    
    //循环
    for($small=1;$small<=100;$small++){
        //循环母鸡
        for($woman=1;$woman<=32;$woman++){
            //循环公鸡
            for($man=1;$man<20;$man++){

                if(($small+$woman+$man==100)&&($man*$manPrice+$woman*$wmPrice+$small*$smallPrice==100)){
                    echo '小鸡'.$small.'<br/>';
                    echo '母鸡'.$woman.'<br/>';
                    echo '公鸡'.$man.'<hr/>';
                }
            }
        }
    }
    
}


buyChicken();



//1.本月有多少天 2.本月1号是星期几 


echo '<table border="1" align="center" width="800">';
echo '<caption><h2>2022年3月</h2></caption>';
echo '<tr>';
echo '<th>星期日</th>';
echo '<th>星期一</th>';
echo '<th>星期二</th>';
echo '<th>星期三</th>';
echo '<th>星期四</th>';
echo '<th>星期五</th>';
echo '<th>星期六</th>';
echo'</tr>';


$num=1;
$day=31;
$w=6;
while($num<=$day){
    echo '<tr>';
    for($i=0;$i<7;$i++){
        if($num>$day||($w>$i&&$num==1)){
            echo '<td></td>';
        }else{
            echo '<td>'.$num.'</td>';
            $num++;
        }
       
    }
    echo '</tr>';
}

echo '</table>';

//goto 语句可以用来跳转到指定位置 只能在同一个作用域内跳转 不能跳到循环内部
goto h;

if(false){
    h:
    echo 'mm';
}








?>