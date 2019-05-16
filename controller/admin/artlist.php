<?php
/**
 * Created by PhpStorm.
 * User: linchunliang
 * Date: 2019-05-15
 * Time: 20:14
 */

$data=scandir('./data/arts');

//删除前两个文件名

unset($data[0]);
unset($data[1]);



//加载页面
view('posts');


