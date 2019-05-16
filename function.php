<?php
/**
 * Created by PhpStorm.
 * User: linchunliang
 * Date: 2019-05-15
 * Time: 18:40
 */
//提示信息函数
function message($mess,$url){
    $url='admin.php?a='.$url;
    echo <<<JS
<script>
alert('{$mess}');
location.href='{$url}'
</script>
JS;
}

//验证登陆函数
function check_login(){

    if(!isset($_SESSION['name']))
    {
        message('必须先登陆','login');

        exit;
    }
}
//加载一个静态页
function view($name){
    include ('view/admin/'.$name.'.html');
}

function template($name){
    include ('view/index/'.$name.'.html');
}