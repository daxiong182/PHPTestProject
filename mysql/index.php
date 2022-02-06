

<?php

$conn=mysqli_connect('localhost','root','root','daxiong','3306');



if($conn){
  
  $result=mysqli_query($conn,'select count(*) from users');

//   $result=mysqli_fetch_assoc($result);
//   print_r($result) ;

$result_arr=mysqli_fetch_array($result);

echo '数据条数： '.$result_arr[0].'<br>';

$data_count=mysqli_num_rows($result);

for($i=0;$i<$data_count;$i++){
    print_r(mysqli_fetch_assoc($result));
}

  
}else{
    echo '链接失败';
}




















?>









