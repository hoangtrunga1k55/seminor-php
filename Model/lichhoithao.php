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
       $conn->query($sql);
        $last_id = $conn->insert_id;
        echo $last_id;
    }


    public function deleteHT($data){
        $id = $data['id'];
        if (isset($id)){
            $conn = DB_Connection::connectDb();
            $sql = "DELETE FROM lichhoithao WHERE id='".$id."'";
            $lsUsers = mysqli_query($conn,$sql);
            $data = ['check'=>true];
            return $data;
        }
        else{
            $data = ['check'=>false];
            return $data;
        }
    }

    public function getEditHT($id){
        $conn = DB_Connection::connectDb();
        $sql = "SELECT id,ten,mota FROM lichhoithao WHERE id='".$id."'";
        $lsUsers = mysqli_query($conn,$sql);
        return $lsUsers->fetch_row();
    }

    public function editHT($data){
        $conn = DB_Connection::connectDb();
        $ten = $data['ten'];
        $mota = $data['mota'];
        $id = $data['id'];
        if (isset($ten)&&isset($mota)){
            $sql = "UPDATE lichhoithao SET  ten= '".$ten."',mota = '".$mota."'  WHERE id='".$id."'";
            $lsUsers = mysqli_query($conn,$sql);
            return true;
        }
        else{
            return false;
        }
    }
}