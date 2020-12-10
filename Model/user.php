<?php
class user{
    public function createUser($data) {
        $conn = DB_Connection::connectDb();
        $taikhoan = $data['taikhoan'];
        $matkhau = $data['matkhau'];
        $sdt = $data['sdt'];
        if (!isset($data['vaitro'])){
            $vaitro = 0;
        }
        else{
            $vaitro = 1;
        }
        if (isset($taikhoan)&&isset($matkhau)&&isset($sdt)){
            $sql = "INSERT INTO `user`(`id`, `taikhoan`, `matkhau`, `vaitro`, `sdt`) 
						VALUES (null,'$taikhoan','$matkhau','$vaitro','$sdt')";
            $conn->query($sql);
            $last_id = $conn->insert_id;
            echo $last_id;
        }
        else{
            return false;
        }

    }

    public function getAllUser() {
        $conn = DB_Connection::connectDb();
        $sql = "SELECT id,taikhoan,matkhau,vaitro,sdt FROM user";
        $lsUsers = mysqli_query($conn,$sql);
        return $lsUsers->fetch_all();
    }

    public function deleteUser($data){
        $id = $data['id'];
        if (isset($id)){
            $conn = DB_Connection::connectDb();
            $sql = "DELETE FROM user WHERE id='".$id."'";
            $lsUsers = mysqli_query($conn,$sql);
            $data = ['check'=>true];
            return $data;
        }
        else{
            $data = ['check'=>false];
            return $data;
        }
    }

    public function getEditUser($id){
        $conn = DB_Connection::connectDb();
        $sql = "SELECT id,taikhoan,matkhau,vaitro,sdt FROM user WHERE id='".$id."'";
        $lsUsers = mysqli_query($conn,$sql);
        return $lsUsers->fetch_row();
    }

    public function editUser($data){
        $conn = DB_Connection::connectDb();
        $taikhoan = $data['taikhoan'];
        $matkhau = $data['matkhau'];
        $vaitro = $data['vaitro'];
        $sdt = $data['sdt'];
        $id = $data['id'];
        if (isset($taikhoan)&&isset($taikhoan)&&isset($matkhau)&&isset($vaitro)){
            $sql = "UPDATE user SET taikhoan = '".$taikhoan."',matkhau = '".$matkhau."',vaitro = '".$vaitro."',sdt = '".$sdt."'  WHERE id='".$id."'";
            $lsUsers = mysqli_query($conn,$sql);
            return true;
        }
        else{
            return false;
        }
    }
}