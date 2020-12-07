<?php
$DIR_FILE = '/var/www/project-metting';
include($DIR_FILE . '/Model/user.php');
include($DIR_FILE . '/class/Db.class.php');
$data = $_REQUEST;
$user = new user();
$user->deleteUser($data);
?>