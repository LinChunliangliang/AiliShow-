<?php
/**
 * Created by PhpStorm.
 * User: linchunliang
 * Date: 2019-05-16
 * Time: 09:09
 */

echo $_GET['title'];
$title=$_GET['title'];


unlink('./data/arts/'.$title);
message('删除成功','artlist');
