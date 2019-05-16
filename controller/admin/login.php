<?php
/**
 * Created by PhpStorm.
 * User: linchunliang
 * Date: 2019-05-14
 * Time: 20:30
 */
/*1。登陆功能的原理
2。用文件保存所有管理员账户和密码
2。1 登陆：显示后台（判断$_SESSION是否有标记）

2。1未登录，显示登陆页面

        登陆流程
        客户端提交账户和密码到php文件
        到保存账户密码的文件中去查找，有没有这个账户，以及密码是否正确
            不正确：提示错误，再返回登陆页面
            正确
                  再$_SESSION中标记他登陆了
                  提示成功，跳到后台页面
3。退出原理，删除$_SESSION中的标记

md5加密

*/
/*echo md5(123456);
echo '<br>';
echo md5(123123);*/

//echo '登陆表单';
//include ('template/admin/login.html');

view('login');
