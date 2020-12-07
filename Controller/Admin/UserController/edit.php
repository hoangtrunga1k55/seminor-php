
<?php
$DIR_FILE = '/var/www/project-metting';
include($DIR_FILE . '/Model/user.php');
include($DIR_FILE . '/class/Db.class.php');
//$data = $_POST;
$id = $_REQUEST['id'];
$user = new user();
echo json_encode($user->getEditUser($id));
?>