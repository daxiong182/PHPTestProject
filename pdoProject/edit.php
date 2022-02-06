<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>学生管理信息</title>
    <style>
        td{
            width:100px;
            background-color: #cfcfcf;
            height: 28px;
            line-height: 28px;
        }
        .title{
            width: 50px;
            
        }
    </style>
</head>
<body>
    
    <?php
    require_once('../pdo/init.php');

    $pdo=pdo();

    $sql="select * from stus where id=".$_GET['id'];
    $stmt=$pdo->query($sql);
    if($stmt->rowCount()>0){

        $stu=$stmt->fetch(PDO::FETCH_ASSOC);//解析数据

    }else{

        die('没有要修改的数据');

    }


    ?>



    <div style='text-align:center'>
      <?php include('menu.php') ?>
      <h3>修改学生信息</h3>
      <form action="action.php?action=edit" method="post" enctype="multipart/form-data">
      <table width='500' style='margin:0 auto'>
            <input type="hidden" name='id' value="<?php echo $stu['id'] ?>">
          <tr>
              <td class='title'>姓名:</td>
              <td><input type="text" name='name' value="<?php echo $stu['name']?>"></td>
          </tr>
          <tr>
              <td class='title'>性别:</td>
              <td>
                  男: <input type="radio" name='sex' value='m' <?php echo ($stu['sex'])==='m'?'checked':''?>> 
                  女: <input type="radio" name='sex' value='w' <?php echo ($stu['sex'])==='w'?'checked':''?>>
             </td>
          </tr>
          <tr>
              <td class='title'>年龄:</td>
              <td><input type="text" name='age' value="<?php echo $stu['age']?>"></td>
          </tr>
          <tr>
              <td class='title'>班级:</td>
              <td><input type="text" name='class_id' value="<?php echo $stu['class_id']?>"></td>
          </tr>
          <tr>
              <td class='title'>&nbsp;</td>
              <td><input type="submit" value="提交"> <input type="reset" value="重置"></td>
          </tr>
      </table>
      </form>
     
    </div>








</body>
</html>