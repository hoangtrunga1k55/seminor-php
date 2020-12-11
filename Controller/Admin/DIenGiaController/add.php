<?php
$DIR_FILE = '/var/www/project-metting';
include($DIR_FILE . '/Model/diengia.php');
include($DIR_FILE . '/class/Db.class.php');
$data = $_POST;
$user = new diengia();
$user->createDienGia($data);
?>