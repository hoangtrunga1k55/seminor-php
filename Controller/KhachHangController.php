<?php
$DIR_FILE = '/var/www/project-metting';
include($DIR_FILE . '/Model/khachhang.php');
include($DIR_FILE . '/class/Db.class.php');
$data = $_POST;
$khachhang = new khachhang();
if($khachhang->createKH($data)){
            header("Location: /project-metting/View/index.php");
}
;
?>

