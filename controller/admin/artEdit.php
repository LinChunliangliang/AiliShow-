<?php
/**
 * Created by PhpStorm.
 * User: linchunliang
 * Date: 2019-05-16
 * Time: 09:30
 */

$title=$_GET['title'];

//先读取出这篇文章的内容

$content=file_get_contents('./data/arts/'.$title);
//显示修改的表单

view('post-edit');
