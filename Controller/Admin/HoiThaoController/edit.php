<?php
$DIR_FILE = '/var/www/project-metting';
include($DIR_FILE . '/Model/lichhoithao.php');
include($DIR_FILE . '/class/Db.class.php');
//$data = $_POST;
$id = $_REQUEST['id'];
$user = new lichhoithao();
echo json_encode($user->getEditHT($id));
?>