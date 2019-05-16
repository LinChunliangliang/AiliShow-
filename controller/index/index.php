<?php
/**
 * Created by PhpStorm.
 * User: linchunliang
 * Date: 2019-05-16
 * Time: 11:26
 */



//1.读取文章
$data=scandir('data/arts');
unset($data[0]);
unset($data[1]);
//2.

//取出文章的前100个字符
foreach ($data as &$v){
    //读取前100个字符内容
    $fp=fopen('./data/arts/'.$v,'r');

    $v=[
        'title'=>$v,
        'content'=>fread($fp,100),
    ];
    fclose($fp);
}

template('index');