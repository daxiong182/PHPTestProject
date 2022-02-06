<?php

require_once('../pdo/init.php');

  $pdo=pdo();

switch($_GET['action']){
    case 'add':
        $name=$_POST['name'];
        $sex=$_POST['sex'];
        $age=$_POST['age'];
        $class_id=$_POST['class_id'];
        $sql="INSERT INTO stus values(null,'{$name}','{$class_id}','{$age}','{$sex}')";
        $rw=$pdo->exec($sql);
        if($rw>0){
            echo "<script>alert('添加成功');window.location='index.php'</script>";
        }else{
            echo "<script>alert('添加失败');window.history.back();</script>";
        }
        break;
        case 'del':
            $id=$_GET['id'];
            $sql="delete from stus where id={$id}";
            $rw=$pdo->exec($sql);
            if($rw>0){
                echo "<script>alert('删除成功')</script>";
            }
            header('Location:index.php');
        break;
        case 'edit':
            $id=$_POST['id'];
            $name=$_POST['name'];
            $class_id=$_POST['class_id'];
            $age=$_POST['age'];
            $sex=$_POST['sex'];

            $sql="UPDATE stus SET name='{$name}',class_id='{$class_id}',age='{$age}',sex='{$sex}' where id={$id}";
            $rw=$pdo->exec($sql);
            if($rw>0){
                echo "<script>alert('修改成功')</script>";
            }
            header('Location:index.php');
            break;

}

























?>