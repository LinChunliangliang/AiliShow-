<?php
/**
 * Created by PhpStorm.
 * User: linchunliang
 * Date: 2019-05-14
 * Time: 20:59
 */


//1.接收表单数据
$username=$_POST['username'];
$password=$_POST['password'];



//2.判断账户是否正确
//读取文件中保存的信息
$account=file_get_contents('./data/account');
//根据行转化成数组
$account=explode("\n",$account);
//echo $account;
//遍历数组中是否有账户和接收的值一样
foreach ($account as $v){
    //拼出账号的格式

    $tmp=$username.' '.md5($password);
//    echo $tmp;

//    echo $v;
    //判断
    if($tmp==$v){
        //开启SESSION
        session_start();
        //把用户名保存到SESSION中
        $_SESSION['name']=$username;
        //提示信息
        message('登陆成功','main');
    }

}
message('登陆错误','login');
