<?php
/**
 * Created by PhpStorm.
 * User: linchunliang
 * Date: 2019-05-16
 * Time: 09:44
 */

$oldTitle=$_POST['oldTitle'];
$title=$_POST['title'];
$content=$_POST['content'];


file_put_contents('./data/arts/'.$oldTitle,$content);
rename('./data/arts/'.$oldTitle,'./data/arts/'.$title);
message('修改成功','artlist');
var_dump($_POST);


