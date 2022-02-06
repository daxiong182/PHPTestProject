<?php

require_once 'functions.php'


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>所有用户</title>
</head>
<body>
    



<?php

$conn=connectDb();



$result=mysqli_query($conn,'SELECT * FROM users ORDER BY id asc');


$dataCount=mysqli_num_rows($result);

echo "<table style='width:300px;text-align:center;border:1px solid #ccc'>
<tr><th>id</th><th>姓名</th><th>年纪</th><th>修改</th><th>删除</th></tr>";
for($i=0;$i<$dataCount;$i++):
    $reslult_arr=mysqli_fetch_assoc($result);
    
    $id=$reslult_arr['id'];
    $name=$reslult_arr['name'];
    $age=$reslult_arr['age'];

    echo "<tr >
    <td>$id</td>
    <td>$name</td>
    <td>$age</td>
    <td><a href='./edituser.php?id=$id'>修改</a></td>
    <td><a href='./deleteuser.php?id=$id'>删除</a></td>
    </tr>";
   
endfor;


echo "</table>"







?>




















</body>
</html>