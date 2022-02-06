<?php

function jia($no1,$no2){
    return $no1+$no2;
}
function jian($no1,$no2){
    return $no1-$no2;
}
function cheng($no1,$no2){
    return $no1*$no2;
}
function chu($no1,$no2){
    if($no2!=0){
        return $no1/$no2;
    }
    
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
<form action="">
    <input type="text" name='no1'><br/>
    <input type="radio" name='ysf' value='jia'>+
    <input type="radio" name='ysf' value='jian'>-
    <input type="radio" name='ysf' value='cheng'>*
    <input type="radio" name='ysf' value='chu'>/<br/>
    <input type="text" name='no2'><br/>
    <br/>
    <input type="submit" value='提交' />
</form>


</body>
</html>





<?php



    $no1=$_GET['no1']??0;
    $no2=$_GET['no2']??0;
    $ysf=$_GET['ysf']??'jia';

    echo $ysf($no1,$no2);






?>