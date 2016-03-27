<?php
return array(
	//'配置项'=>'配置值'
    /*调试配置*/
    'SHOW_PAGE_TRACE' =>true,
    //模块配置
    'DEFAULT_MODULE'  => 'Home',
    'URL_CASE_INSENSITIVE' => true,//url不区分大小写
    'TAGLIB_BEGIN'=>'{',
    'TAGLIB_END'=>'}',
    // URL伪静态后缀设置
    'URL_HTML_SUFFIX'   => '',

    //统一生成小写的URL地址
    'URL_CASE_INSENSITIVE' => true,
    /* 数据库设置 */
    'DB_TYPE'               =>  'mysqli',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'akalin',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀

);