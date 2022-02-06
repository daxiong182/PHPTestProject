<?php
//读取文件 遍历到表格中显示

$file=fopen('./mysql.txt','r');


if(flock($file,LOCK_SH)){
    $content='';
    while(!feof($file)){
        $content.=fread($file,1);
    }
}

//2.1拆分读取内容
$arr=explode('@^@',$content);
echo '<pre>';
array_pop($arr);

echo '<table border="1" align="center" width="800" >';
echo '<tr>';
echo '<th>编号</th>';
echo '<th>用户名</th>';
echo '<th>留言内容</th>';
echo '<th>留言时间</th>';
echo '<th>操作</th>';
echo '</tr>';

foreach ($arr as $key => $value) {
    $vals=explode('&^&',$value);
    echo "<tr>";
    echo '<td>'.$key.'</td>';
    echo '<td>'.$vals[0].'</td>';
    echo '<td>'.$vals[1].'</td>';
    echo '<td>'.date("Y-m-d H:i:s",$vals[2]).'</td>';
    echo '<td><a>删除</a>|<a>修改</a></td>';
    echo "</tr>";
}

echo '</table>';



//关闭文件
fclose($file);




























?>