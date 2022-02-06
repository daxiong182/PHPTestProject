<?php





class DbControl{

   


//万能的执行sql(非查询)，增加 修改 删除
function execute(){
    include '../mysql2/do.php';
     $conn=conn();
     print_r($conn) ;
    // return mysqli_query($conn,$sql);
}




}



$obj=new DbControl();

$obj->execute();



























?>