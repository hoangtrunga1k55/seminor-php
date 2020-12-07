<?php
class danhgia{
    public function  getDanhgia(){
        $conn = DB_Connection::connectDb();
        $sql = "SELECT id,ten,img,binhluan FROM danhgia";
        $lsDanhgia = $conn->query($sql);
        return $lsDanhgia->fetch_all();
    }

    public function createDanhGia($data) {
        $conn = DB_Connection::connectDb();
        $ten = $data['ten'];
        $img = $data['img'];
        $binhluan = $data['binhluan'];
        $sql = "INSERT INTO `danhgia`(`id`, `ten`, `img`,`binhluan`) 
						VALUES (null,'$ten','$img','$binhluan')";
        return $conn->query($sql)->fetch_all();
    }
}
