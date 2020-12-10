
<?php
$DIR_FILE = '/var/www/project-metting';
include($DIR_FILE . '/Model/chitiet_lichhoithao.php');
include($DIR_FILE . '/class/Db.class.php');
//$data = $_POST;
$id = $_REQUEST['id'];
$user = new chitiet_lichhoithao();
echo json_encode($user->getEditUser($id));
?>