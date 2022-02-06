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
    


    <div style='text-align:center'>
      <?php include('menu.php') ?>
      <h3>增加学生信息</h3>
      <form action="action.php?action=add" method="post" enctype="multipart/form-data">
      <table width='500' style='margin:0 auto'>
          <tr>
              <td class='title'>姓名:</td>
              <td><input type="text" name='name'></td>
          </tr>
          <tr>
              <td class='title'>性别:</td>
              <td>男: <input type="radio" name='sex' value='m'> 女: <input type="radio" name='sex' value='w'></td>
          </tr>
          <tr>
              <td class='title'>年龄:</td>
              <td><input type="text" name='age'></td>
          </tr>
          <tr>
              <td class='title'>班级:</td>
              <td><input type="text" name='class_id'></td>
          </tr>
          <tr>
              <td class='title'>&nbsp;</td>
              <td><input type="submit" value="增加"> <input type="reset" value="重置"></td>
          </tr>
      </table>
      </form>
     
    </div>




















</body>
</html>