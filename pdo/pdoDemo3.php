<?php



try {
    $pdo=new PDO("mysql:dbname=daxiong;host=127.0.0.1",'root','root');
} catch (PDOException $e) {
    die("数据库链接失败".$e->getMessage());
}


//2.预处理SQL语句
// $sql='insert into stus (id,name,class_id,age) values (?,?,?,?)';
$sql='insert into stus (id,name,class_id,age) values (:id,:name,:class_id,:age)';

$stmt=$pdo->prepare($sql);

//3.对？参数进行绑定
// $stmt->bindValue(1,null);
// $stmt->bindValue(2,'test55');
// $stmt->bindValue(3,5);
// $stmt->bindValue(4,22);


$stmt->execute(array('id'=>null,'name'=>'ceshid','class_id'=>5,'age'=>37));
echo $stmt->rowCount();




//预处理查询
$sql2='select id,name from stus';
$stmt=$pdo->prepare($sql2);

$stmt->execute();


// foreach($stmt as $row){
//     echo $row['id']."---".$row['name']."<br>";
// }
































?>