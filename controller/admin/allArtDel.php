<?php
/**
 * Created by PhpStorm.
 * User: linchunliang
 * Date: 2019-05-16
 * Time: 10:19
 */

$title=$_POST['delTitle'];

//var_dump($title);

foreach ($title as $v){
    unlink('./data/arts/'.$v);

}

message('删除成功','artlist');