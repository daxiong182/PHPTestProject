<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edituser</title>
    <style>
        p{
            padding-left: 50px;
        }
        input{
            padding-left: 30px;
        }
    </style>
</head>
<body>
    
<?php

require_once 'functions.php';

if($_GET['id']){

$conn=connectDb();

$id=intval($_GET['id']);


$result=mysqli_query($conn,"SELECT * FROM users where id = $id");

if(mysqli_errno($conn)){
    die('can not connect db');
}
$arr=mysqli_fetch_assoc($result);


}else{
    die('id not defined ');
}

?>


<form action="edituser_server.php" method='post' enctype="multipart/form-data">

    <p>
        用 户 ID ： <input type="text" name='id' value="<?php echo $arr["id"] ?>">
    </p>
    <p>
        用户姓名： <input type="text" name='name' value="<?php echo $arr['name'] ?>">
    </p>
    <p>
        用户年龄： <input type="text" name='age' value="<?php echo $arr['age'] ?>">
    </p>
    <p>
        <input type="submit" value='提交修改'>
    </p>
</form>


</body>
</html>





