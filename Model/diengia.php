<?php
class diengia{
    public function getDienGia()  {
        $conn = DB_Connection::connectDb();
        $sql = "SELECT id,ten,img,chucvu,mota FROM diengia";
        $ls = $conn->query($sql);
//        $db->disconnect();
        return $ls->fetch_all();
    }

    public function createDienGia($data) {
        $conn = DB_Connection::connectDb();
        $ten = $data['ten'];
        $img = $data['img'];
        $chucvu = $data['chucvu'];
        $mota = $data['mota'];
        $sql = "INSERT INTO `diengia`(`id`, `ten`, `img`,`chucvu`,`mota`) 
						VALUES (null,'$ten','$img','$chucvu','$mota')";
        return $conn->query($sql)->fetch_all();
    }

    public function deleteDG($data){
        $id = $data['id'];
        if (isset($id)){
            $conn = DB_Connection::connectDb();
            $sql = "DELETE FROM diengia WHERE id='".$id."'";
            $lsUsers = mysqli_query($conn,$sql);
            $data = ['check'=>true];
            return $data;
        }
        else{
            $data = ['check'=>false];
            return $data;
        }
    }
}
