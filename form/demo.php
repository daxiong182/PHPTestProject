<!-- action 后面为空字符串 代表跳转当前页面 -->
<form action="" method="post" enctype="multipart/form-data" style='width:80%;text-align:center'>
<p>
<input type="text" name='username' value='张三'>
</p>
<p>
<input type="text" name='password' value='123'>
</p>
<p>
<input type="file" name='file' style='width:38%'>
</p>
<input type="submit" name='sub' value='提交'>
<br>


</form>




<?php

if(@$_POST['sub'])
{
    print_r($_FILES['file']);
    echo '<br>','-------------------------------','<br>';
    $name=$_FILES['file']['name'];
    $newfilename=$name.microtime();
    $file_tmp=$_FILES['file']['tmp_name'];
    echo $file_tmp;
    echo '<br>','-------------------------------','<br>';
    echo $name;
    echo '<br>','-------------------------------','<br>';
    echo substr($name,1);

    if(move_uploaded_file($file_tmp,$newfilename)){
        echo "上传文件成功";
    }


}









?>