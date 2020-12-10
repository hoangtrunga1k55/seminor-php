<?php
class diengia{
    public function getDienGia()  {
        $conn = DB_Connection::connectDb();
        $sql = "SELECT id,ten,img,chucvu,mota FROM diengia";
        $ls = $conn->query($sql);
        return $ls->fetch_all();
    }

    public function createDienGia($data) {
        $conn = DB_Connection::connectDb();
        $ten = $data['ten'];
        $img = "img/".$_FILES["img"]["name"];
        $chucvu = $data['chucvu'];
        $mota = $data['mota'];
        $sql = "INSERT INTO `diengia`(`id`, `ten`, `img`,`chucvu`,`mota`)
						VALUES (null,'$ten','$img','$chucvu','$mota')";
        $conn->query($sql);
        $last_id = $conn->insert_id;
        echo json_encode($this->getEditDG($last_id));
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
    public function editUser($data){
        $conn = DB_Connection::connectDb();
        $ten = $data['ten'];
        $img = "img/".$_FILES["img"]["name"];
        $chucvu = $data['chucvu'];
        $mota = $data['mota'];
        $id = $data['id'];
        if (isset($ten)&&isset($img)&&isset($chucvu)&&isset($mota)){
            $sql = "UPDATE diengia SET ten = '".$ten."',img = '".$img."',chucvu = '".$chucvu."',mota = '".$mota."'  WHERE id='".$id."'";
            $lsUsers = mysqli_query($conn,$sql);
            echo json_encode($this->getEditDG($id));

        }
        else{
            return false;
        }
    }
    public function getEditDG($id){
        $conn = DB_Connection::connectDb();
        $sql = "SELECT id,ten,img,chucvu,mota FROM diengia WHERE id='".$id."'";
        $lsUsers = mysqli_query($conn,$sql);
        return $lsUsers->fetch_row();
    }
}
