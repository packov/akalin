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

function debug($val, $dump=false, $exit = true){
    //自动获取调试函数名称$func
    if ($dump){
        $func = 'var_dump';
    } else {
        $func = (is_array($val) || is_object($val)) ?  'print_r': 'printf';
    }
    //输出到html
    header("Content-type:text/html; charset=utf-8");
    echo '<pre>debug output:<hr/>';
    $func($val);
    echo '</pre>';
    if($exit) exit;
}

require './ThinkPHP/ThinkPHP.php';