
<?php
$DIR_FILE = '/var/www/project-metting';
include($DIR_FILE . '/Model/chitiet_lichhoithao.php');
include($DIR_FILE . '/class/Db.class.php');
$data = $_POST;
$user = new chitiet_lichhoithao();
$user->editUser($data);
?>