<?php
$DIR_FILE = '/var/www/project-metting';
include($DIR_FILE . '/Model/khachhang.php');
include($DIR_FILE . '/class/Db.class.php');
$kh = new khachhang();
$rs_result = $kh->getDB($_GET);

?>
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>Tên</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Xe đưa đón</th>
        <th>Khách sạn</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($row = mysqli_fetch_array($rs_result)) {
        ?>
        <tr>
            <td><?php echo $row["ten"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["sdt"]; ?></td>
            <td><?php if ($row["xeduadon"]==1){
                    echo "Có";
                }else{
                    echo "Không";
                }  ?></td>
            <td><?php if ($row["khachsan"]==1){
                    echo "Có";
                }else{
                    echo "Không";
                }  ?></td>
            <td><button  type="button" class="btn btn-default add" data-toggle="modal" data-target="#modal-default">Thêm</button>|
                <button type="button" class="btn btn-default editUser" data-toggle="modal" data-target="#modal-default1" data-id='<?php echo $row['id']?>'>Sửa</button>
                |<button class='delete btn btn-default' data-id = "<?php echo $row['id']?>">Xóa</button></td>
        </tr>
        <?php
    };
    ?>
    </tbody>
</table>