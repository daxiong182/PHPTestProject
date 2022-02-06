<?php

require_once './init.php';

$pdo=pdo();

//查库返回预处理对象
$stmt=$pdo->query('SELECT * FROM users');

$list=$stmt->fetchAll(PDO::FETCH_ASSOC); //只取关联的数组

//解析所有数据

foreach($list as $val):
    echo $val['name'].'---'.$val['age'].'<br>';
endforeach;

//释放资源
// $stmt=null;
// $pdo=null;

//方法二：
// foreach($pdo->query('SELECT * FROM users') as $val){
//     echo $val['name'].'---'.$val['age'].'<br>';
// }


// $sql='INSERT INTO stus values(null,"王五",3,17)';
// $sql='delete from stus where id=8';
// $sql='update stus set name="js" where class_id=3';


$res=$pdo->exec($sql);//返回影响的行数

if($res){
    echo 'success';
}



// echo '<pre>';
// print_r($list);



































?>