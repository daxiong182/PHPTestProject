<?php

//使用自定义session

include 'FileHandle.php';
new FileHandle('hdcms');
session_set_save_handler(new FileHandle);

session_start();