
<?php
$DIR_FILE = '/var/www/project-metting';
include($DIR_FILE . '/Model/khachhang.php');
include($DIR_FILE . '/class/Db.class.php');
$data = $_POST;
$id = $_REQUEST['id'];
$user = new khachhang();
echo json_encode($user->getEditKH($id));
?>