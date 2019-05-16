<?php
/**
 * Created by PhpStorm.
 * User: linchunliang
 * Date: 2019-05-15
 * Time: 19:23
 */


//入口文件
//项目初始化
session_start();
include "function.php";
//加载相应的功能模块




$action=isset($_GET['a']) ? $_GET['a']:'main';

//echo $action;
//main
//设置白名单
$noNeedLogin=['login','dologin'];
if(!in_array($action,$noNeedLogin)){
    check_login();
}



include('./controller/admin/'.$action.'.php');