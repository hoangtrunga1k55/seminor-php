<?php
$DIR_FILE = '/var/www/project-metting';
$url = $_SERVER['REQUEST_URI'];
$target = substr($url,0);

if($target=='/'){
    include($DIR_FILE . '/View/index.php');
}
else{
    include($DIR_FILE . "/View/admin/user/ds.php");
}
?>


