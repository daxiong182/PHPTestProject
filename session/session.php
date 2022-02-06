<?php
session_save_path('session');

session_id('bac');
//php中session 默认是不工作的
session_start();

print_r($_SESSION);


$_SESSION['name']='hdcms.com';

// unset($_SESSION['name']);

// $_SESSION=[];

// session_destroy();
























?>


