<?php
/**
 * Created by PhpStorm.
 * User: linchunliang
 * Date: 2019-05-15
 * Time: 19:23
 */


//入口文件
//项目初始化
include "function.php";
//加载相应的功能模块




$action=isset($_GET['a']) ? $_GET['a']:'index';

//echo $action;
//main
//设置白名单



include('./controller/index/'.$action.'.php');