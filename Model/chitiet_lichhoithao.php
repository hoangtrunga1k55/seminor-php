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
        $sql = "INSERT INTO `lichhoithao`(`id`, `thoigian`, `noidung`,`id_lichhoithao`) 
						VALUES (null,'$thoigian','$noidung','$id_lichthao')";
        return $conn->query($sql)->fetch_all();
    }
}