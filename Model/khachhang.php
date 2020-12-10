<?php
class khachhang {
    public function getKhachHang()  {
        $conn = DB_Connection::connectDb();
        $sql = "SELECT id,ten,email,sdt,xeduadon,khachsan FROM khachhang";
        $lsUsers = $conn->query($sql);
        return $lsUsers->fetch_all();
    }

    public function getEditKH($id){
        $conn = DB_Connection::connectDb();
        $sql = "SELECT id,ten,email,sdt,xeduadon,khachsan FROM khachhang WHERE id='".$id."'";
        $lsUsers = mysqli_query($conn,$sql);
        return $lsUsers->fetch_row();
    }

    public function getDB(){
        $conn = DB_Connection::connectDb();
        $limit = 3;
        if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
        $start_from = ($page-1) * $limit;

        $sql = "SELECT * FROM khachhang LIMIT $start_from,$limit";
        $rs_result = mysqli_query($conn, $sql);
        return $rs_result;
    }


    public function editKH($data){
        $conn = DB_Connection::connectDb();
        $ten = $data['ten'];
        $email = $data['email'];
        $sdt = $data['sdt'];
        $xeduadon = $data['xeduadon'];
        $khachsan = $data['khachsan'];
        $id = $data['id'];
        if (isset($ten)&&isset($email)&&isset($sdt)&&isset($xeduadon)&&isset($khachsan)){
            $sql = "UPDATE khachhang SET ten = '".$ten."',email = '".$email."',xeduadon = '".$xeduadon."',khachsan = '".$khachsan."',sdt = '".$sdt."'  WHERE id='".$id."'";
            $lsUsers = mysqli_query($conn,$sql);
            return true;
        }
        else{
            return false;
        }
    }

    public function  numberOfKH(){
        $limit = 3;
        $conn = DB_Connection::connectDb();
        $sql = "SELECT COUNT(id) FROM khachhang";
        $rs_result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_row($rs_result);
        $total_records = $row[0];
        $total_pages = ceil($total_records / $limit);
        return $total_pages;
}


    public function createKH($data) {
        $conn = DB_Connection::connectDb();
        $ten = $data['ten'];
        $email = $data['email'];
        $sdt = $data['sdt'];
        if (!isset($data['xeduadon'])){
            $xeduadon =0;
        }
        else{
            $xeduadon =1 ;

        }
        if (!isset($data['khachsan'])){
            $khachsan =0;
        }
        else{
            $khachsan =1 ;
        }
        if (isset($ten)&&isset($email)&&isset($sdt)&&isset($xeduadon)&&isset($khachsan)){
            $sql = "INSERT INTO `khachhang`(`id`, `ten`, `email`,`sdt`, `xeduadon`, `khachsan`) 
						VALUES (null,'$ten','$email','$sdt','$xeduadon','$khachsan')";
            $conn->query($sql);
            $last_id = $conn->insert_id;
            return $last_id;
        }
        else{
            return false;
        }
    }
    public function deleteKH($data){
        $id = $data['id'];
        if (isset($id)){
            $conn = DB_Connection::connectDb();
            $sql = "DELETE FROM khachhang WHERE id='".$id."'";
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