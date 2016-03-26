<?php
//应该入口
header("Content-type:text/html, charset=utf8");
// PHP 版本判断
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
// 调试模式
define('APP_DEBUG',True);
// 项目名称、目录
define('APP_NAME', 'Apps');
define('APP_PATH', './Apps/');

require './ThinkPHP/ThinkPHP.php';