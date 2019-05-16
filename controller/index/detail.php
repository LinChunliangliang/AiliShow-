<?php
/**
 * Created by PhpStorm.
 * User: linchunliang
 * Date: 2019-05-16
 * Time: 14:40
 */

$title=$_GET['title'];

$content=file_get_contents('./data/arts/'.$title);
/*echo $title;
echo $content;
exit;*/

template('detail');