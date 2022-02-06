<?php

//默认是不使用session 所以启用session需要手动开启
session_start();

$_SESSION['name']='daxionga';


header('Location:a.php');























?>