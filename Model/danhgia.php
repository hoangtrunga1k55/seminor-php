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
        $img = "img/".$_FILES["img"]["name"];
        $binhluan = $data['binhluan'];
        $sql = "INSERT INTO `danhgia`(`id`, `ten`, `img`,`binhluan`) 
						VALUES (null,'$ten','$img','$binhluan')";
        $conn->query($sql);
        $last_id = $conn->insert_id;
        echo json_encode($this->getEditUser($last_id));
    }

    public function deleteUser($data){
        $id = $data['id'];
        if (isset($id)){
            $conn = DB_Connection::connectDb();
            $sql = "DELETE FROM danhgia WHERE id='".$id."'";
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
        $sql = "SELECT id,ten,img,binhluan FROM danhgia  WHERE id='".$id."'";
        $lsUsers = mysqli_query($conn,$sql);
        return $lsUsers->fetch_row();
    }

    public function editUser($data){
        $conn = DB_Connection::connectDb();
        $ten = $data['ten'];
        $img = "img/".$_FILES["img"]["name"];
        $binhluan = $data['binhluan'];
        $id = $data['id'];
        if (isset($ten)&&isset($img)&&isset($binhluan)){
            $sql = "UPDATE danhgia SET ten = '".$ten."',img = '".$img."',binhluan = '".$binhluan."' WHERE id='".$id."'";
            $lsUsers = mysqli_query($conn,$sql);
            echo json_encode($this->getEditUser($id));
        }
        else{
            return false;
        }
    }

}
