<?php
$DIR_FILE = '/var/www/project-metting';
include($DIR_FILE . '/Model/user.php');
include($DIR_FILE . '/class/Db.class.php');
$user = new user();
$all = $user->getAllUser();
$data = $_REQUEST;
$taikhoan = $data['taikhoan'];
$matkhau = $data['matkhau'];

foreach ($all as $user){
    if ($user[1]==$taikhoan &&$user[2]==$matkhau){
        header("Location: /project-metting/View/admin/index.php");
    }
    else{
        header("Location: /project-metting/View/admin/login.php");
    }
}

