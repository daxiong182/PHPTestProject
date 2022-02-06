<?php



require_once './init.php';

$pdo=pdo();

//2.执行数据操作
try {
    //开启事务
    $pdo->beginTransaction();
    $sql="insert into stus (id,name,class_id,age)values(?,?,?,?)";
    $stmt=$pdo->prepare($sql);
    //传入参数
    $stmt->execute(array(null,'test1',5,22));
    $stmt->execute(array(null,'test2',5,22));
    $stmt->execute(array(null,'test3',5,22));
    //提交事务 要么全成功要么全失败
    $pdo->commit();
} catch (PDOException $e) {
    die('执行失败'.$e->getMessage());
    $pdo->rollBack();
}






















?>


