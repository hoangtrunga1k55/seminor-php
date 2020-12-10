
<?php
$DIR_FILE = '/var/www/project-metting';
include($DIR_FILE . '/Model/diengia.php');
include($DIR_FILE . '/class/Db.class.php');
$data = $_POST;
$id = $_REQUEST['id'];
$user = new diengia();
echo json_encode($user->getEditDG($id));
?>