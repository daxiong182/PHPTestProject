


<?php


include './db.php'



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>显示配置信息</title>
    <style>
        label{
            width: 260px;
        }
    </style>
</head>
<body>
    
<form action="do_action.php" method="POST">
    <p>  
        <span style='display:inline-block;width:150px'>HOST: </span>  
    <input type="text" name='host' id=''><br/>       
    </p>
    <p>  
        <label style='display:inline-block;width:150px'>DBNAME: </label>
    <input type="text" name='host' id=''><br/>
    </p>
    <p>  
     <label style='display:inline-block;width:150px'>USER: </label>
    <input type="text" name='host' id=''><br/>
    </p>
    <p>  
        <label style='display:inline-block;width:150px'>PASSWORD: </label>
    <input type="text" name='host' id=''><br/>
    </p>

    <input type="submit" value='提交' ><br/>

</form>







</body>
</html>