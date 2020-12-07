<?php
class khachhang {
    public function getKhachHang()  {
        $conn = DB_Connection::connectDb();
        $sql = "SELECT id,ten,email,sdt,xeduadon,khachsan FROM khachhang";
        $lsUsers = $conn->query($sql);
        return $lsUsers->fetch_all();
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
                    return $conn->query($sql);
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