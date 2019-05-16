<?php
/**
 * Created by PhpStorm.
 * User: linchunliang
 * Date: 2019-05-15
 * Time: 20:50
 */

//var_dump($_POST);

//生成文件
file_put_contents('./data/arts/'.$_POST['title'],$_POST['content']);

//提示信息//跳转到artlist页面
message('添加成功','artlist');


