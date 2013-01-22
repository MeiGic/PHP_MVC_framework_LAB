<?php
    //路由設定
    $CONFIG['system']['route'] = array(
        'dufault_controller'    => 'index',
        'default_action'        => 'index',
        'post_str'              => '.php',
        'rewrite'               => FALSE
    );
    //需載入之函式庫
    $CONFIG['system']['lib'] = array(
        'mysql'     =>  'lib_mysql',
        'request'   =>  'lib_requests',
        'debug'     =>  'debug',
        'message'   =>  'debug'
    );

    //資料庫設定
    $CONFIG['system']['database'] = array(
        'hostname'  =>  'localhost',
        'username'  =>  '',
        'password'  =>  '',
        'database'  =>  ''
    );

    //其他設定
    $CONFIG['system']['other'] = array(
        'debug_mode'=>  TRUE
    );


    error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT ^ E_NOTICE);
    ini_set("display_errors" , "On");
?>