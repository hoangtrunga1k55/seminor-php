<?php
$DIR_FILE = '/var/www/project-metting';
include($DIR_FILE . '/Model/lichhoithao.php');
include($DIR_FILE . '/class/Db.class.php');
$data = $_REQUEST;
$user = new lichhoithao();
$user->deleteHT($data);
?>