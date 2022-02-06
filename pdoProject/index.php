<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>学生信息管理</title>
    <style>
        th,td{
            height: 32px;
        }
        button{
            padding: 2px 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    
    <action style='text-align:center'>
        <?php include('./menu.php') ?>
        <h3>浏览学生信息</h3>
        <table width='800' border='1' style='margin:0 auto;border-collapse:collapse' >
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>性别</th>
            <th>年龄</th>
            <th>班级</th>
            <th>操作</th>
        </tr>
        <?php
        
        //1.链接数据库
        require_once '../pdo/init.php';
        $pdo=pdo();
        //2.执行SQL 解析并遍历
        $sql="select * from stus";
        foreach($pdo->query($sql) as $row){
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['sex']}</td>";
            echo "<td>{$row['age']}</td>";
            echo "<td>{$row['class_id']}</td>";
            echo "<td>
            <a href='javascript:doDel({$row['id']})'><button>删除</button></a>
            <a href='edit.php?id={$row['id']}'><button>修改</button></a>
            </td>";
            echo '</tr>';
        }
         ?>
        </table>
   </action>



<script>


function doDel(id){
    if(confirm('确定要删除吗？')){
        window.location='action.php?action=del&id='+id;
    }
}

</script>






</body>
</html>