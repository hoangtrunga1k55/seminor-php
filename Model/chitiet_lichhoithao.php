<?php
class chitiet_lichhoithao{
    public function getChiTietHoiThao()  {
        $conn = DB_Connection::connectDb();
        $sql = "SELECT id,thoigian,noidung,id_lichhoithao FROM chitet_lichhoithao";
        $ls = mysqli_query($conn,$sql);
        $data = $ls->fetch_all();
        return $data;
    }

    public function createChiTiet($data) {
        $conn = DB_Connection::connectDb();
        $thoigian = $data['thoigian'];
        $noidung = $data['noidung'];
        $id_lichthao = $data['id_lichhoithao'];
        $sql = "INSERT INTO `chitet_lichhoithao`(`id`, `thoigian`, `noidung`,`id_lichhoithao`) 
						VALUES (null,'$thoigian','$noidung','$id_lichthao')";
        $conn->query($sql);
        $last_id = $conn->insert_id;
        echo $last_id;
    }
    public function deleteUser($data){
        $id = $data['id'];
        if (isset($id)){
            $conn = DB_Connection::connectDb();
            $sql = "DELETE FROM chitet_lichhoithao WHERE id='".$id."'";
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
        $sql = "SELECT id,thoigian,noidung,id_lichhoithao FROM chitet_lichhoithao WHERE id='".$id."'";
        $lsUsers = mysqli_query($conn,$sql);
        return $lsUsers->fetch_row();
    }

    public function editUser($data){
        $conn = DB_Connection::connectDb();
        $thoigian = $data['thoigian'];
        $noidung = $data['noidung'];
        $id_lichhoithao = $data['id_lichhoithao'];
        $id = $data['id'];
        if (isset($thoigian)&&isset($noidung)&&isset($id_lichhoithao)){
            $sql = "UPDATE chitet_lichhoithao SET thoigian = '".$thoigian."',noidung = '".$noidung."',id_lichhoithao = '".$id_lichhoithao."' WHERE id='".$id."'";
            $lsUsers = mysqli_query($conn,$sql);
            return true;
        }
        else{
            return false;
        }
    }
}