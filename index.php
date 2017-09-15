<?php
	header('charset=utf-8');

	define('APP_DEBUG', true);

    define('APP_PATH','./App/');

    //关闭目录安全文件
    define('BUILD_DIR_SECURE',false);
	
	require './ThinkPHP/ThinkPHP.php';
