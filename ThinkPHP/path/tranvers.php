<?php

include './global_func.php';
$path=$_GET['path']??'../path';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>遍历目录</title>
    <style>
        body{
            text-align: center;
        }
        td{
            border-bottom: 1px solid #ccc;
        }
        a{
            color:#000;
            text-decoration: none;
        }
    </style>
</head>
<body>

<h1>遍历目录</h1>

<hr width='80%'>
<table width='800' style='margin:0 auto;text-align:center'>
<?php

 $res='网盘首页';
 $newUrl='../path';
 $new=explode('/',$path);
 $harr=explode('/',$path);
 $h=array_pop($harr);
 $preUrl='';
 foreach ($new as $key => $value) {
     if($value!='..'&&$value!='path'){
        if($value==$h){
            $preUrl.='>'.$value;
        }else{
            $str=implode('/',$harr);
            // var_dump($str);
            $preUrl .='><a href="?path='.$str.'">'.$value.'</a>';
        }
     }
 }

?>
    <tr>
        <td colspan="3" align="left"><a href="?path=<?= $newUrl ?>"> <?= $res ?> </a> <?=$preUrl?></td>
        <td colspan="2" >
            <a href="addDir.php?path=<?=$path?>"><input type="button" value="创建目录"></a>
        </td>
    </tr>
    <tr>
        <th >文件名</th>
        <th>操作</th>
        <th>文件大小</th>
        <th>修改时间</th>
    </tr>

    <?php

        $result=bianli($path);
        
        foreach ($result as $key => $value) {
            $name=basename($value);
            echo '<tr>';
            if(is_dir($value)){
                echo '<td align="left"> <a href="?path='.$value.'"> <img width="30" src="./img/dir.png">'.$name.' </a></td>';
                echo '<td>上传| <a href="del.php?path='.$value.'"> 删除 </a> |移动|重命名|复制</td>';
                echo '<td>'.toSize(dirSize($value)).'</td>';
            }else{
                $type=array('jpg','jpeg','png','gif');
                $suffix=ltrim(strrchr($value,'.'),'.');
                if(in_array($suffix,$type)){
                    echo '<td align="left"><img  width="30" src="'.$value.'">'.$name.'</td>';
                }else{
                    echo '<td align="left"><img  width="30" src="./img/file.png">'.$name.'</td>';
                }
                echo '<td>下载|  <a href="del.php?path='.$value.'"> 删除  |移动|重命名|复制</td>';
                echo '<td>'.toSize( filesize($value)).'</td>';
            }
            
            echo '<td>'.date('Y-m-d H:i:s',filemtime($value)).'</td>';          
            echo '</tr>';

        }

  ?>

</table>



    
</body>
</html>








<?php











?>