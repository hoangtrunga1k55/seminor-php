<?php
//$DIR_FILE = '/var/www/project-metting';
//include($DIR_FILE. '/Controller/DB_Connection.php');
class lichhoithao{
    public function getLichHoiThao()  {
        $conn = DB_Connection::connectDb();
        $sql = "SELECT id,ten,mota FROM lichhoithao";
        $ls = $conn->query($sql);
//        $db->disconnect();
        return $ls->fetch_all();
    }

    public function createHoiThao($data) {
        $conn = DB_Connection::connectDb();
        $ten = $data['ten'];
        $mota = $data['mota'];
        $sql = "INSERT INTO `lichhoithao`(`id`, `ten`, `mota`) 
						VALUES (null,'$ten','$mota')";
        return $conn->query($sql)->fetch_all();
    }
}