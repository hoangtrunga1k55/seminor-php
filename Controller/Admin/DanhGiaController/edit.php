
<?php
$DIR_FILE = '/var/www/project-metting';
include($DIR_FILE . '/Model/danhgia.php');
include($DIR_FILE . '/class/Db.class.php');
//$data = $_POST;
$id = $_REQUEST['id'];
$user = new danhgia();
echo json_encode($user->getEditUser($id));
?>