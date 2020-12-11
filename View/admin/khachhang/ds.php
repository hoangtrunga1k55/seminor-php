<?php
$DIR_FILE = '/var/www/project-metting';
include($DIR_FILE . '/Model/khachhang.php');
include($DIR_FILE . '/class/Db.class.php');
$DIR = 'project-metting/View';
$khachhang = new khachhang();
$result = $khachhang->getKhachHang();
$total_pages = $khachhang->numberOfKH();
//get page

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<style>
    li.active a{
        background: red;
    }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="../dist/img/user1-128x128.jpg" alt="User Avatar"
                                 class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="../dist/img/user8-128x128.jpg" alt="User Avatar"
                                 class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="../dist/img/user3-128x128.jpg" alt="User Avatar"
                                 class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="../index.php" class="brand-link">
            <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                User
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="../user/ds.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sach Nguoi Dung</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Khách Hàng
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="../khachhang/ds.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh Sach Khach Hang</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Diễn Giả
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="../diengia/ds.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh Sách Diên Gỉa</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Đánh Giá
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="../danhgia/ds.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh Sách Đánh Giá</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Lịch Hội Thảo
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="../lichhoithao/ds.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh Sách lịch hội thảo</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Chi Tiết lịch hội thảo
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="../chitiet_lichhoithao/ds.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách chi tiết lịch hội thảo</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header"><h3 class="card-title">Danh Sách Khách Hàng</h3>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" id="myInput"
                                                                                                         name="table_search"
                                                                                                         class="form-control float-right"
                                                                                                         placeholder="Search">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- /.card-header -->
                            <div id="target-content" class="card-body table-responsive p-0">
<!--                                <table class="table table-hover text-nowrap">-->
<!--                                    <thead>-->
<!--                                    <tr>-->
<!--                                        <th>ID</th>-->
<!--                                        <th>Tên</th>-->
<!--                                        <th>Email</th>-->
<!--                                        <th>Số điện thoại</th>-->
<!--                                        <th>Xe Đưa Đón</th>-->
<!--                                        <th>Khách Sạn</th>-->
<!--                                        <th>Status</th>-->
<!--                                    </tr>-->
<!--                                    </thead>-->
<!--                                    <tbody> --><?php
//                                    foreach ($result as $row) {
//                                        echo "<tr id='row" . $row[0] . "'> <td>" . $row[0] . "</td> <td>" . $row[1] . "</td> <td>" . $row[2] . "</td> <td>" . $row[3] . "</td> <td>" . $row[4] . "</td><td>" . $row[5] . "</td><td><button  type=\"button\" class=\"btn btn-default add\" data-toggle=\"modal\" data-target=\"#modal-default\">Add</button>|
//        <button type=\"button\" class=\"btn btn-default editUser\" data-toggle=\"modal\" data-target=\"#modal-default1\" data-id='" . $row[0] . "'>Edit</button>
//|<button class='delete btn btn-default' data-id = " . $row[0] . ">Delete</button></td> </tr>";
//                                    }
//                                    ?><!-- </tbody>-->
<!--                                </table>-->
                            </div> <!-- /.card-body --> </div> <!-- /.card --> </div>
                </div>
            </div>
            <div class="modal fade" id="modal-default" style="display: none" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Default Modal</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="text" name="ten" placeholder="nhập tên" required>
                        </div>
                        <div class="modal-body">
                            <input type="text" name="email" placeholder="nhập email" required>
                        </div>
                        <div class="modal-body">
                            <input type="text" name="sdt" placeholder="nhập số điện thoại" required>
                        </div>
                        <div class="modal-body">
                            <label for="xeduadon">xeduadon</label>
                            <input id="xeduadon" type="checkbox" name="xeduadon">
                        </div>
                        <div class="modal-body">
                            <label for="khachsan">khachsan</label>
                            <input id="khachsan" type="checkbox" name="khachsan">
                        </div>

                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary add">Save changes</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <div class="modal fade" id="modal-default1" style="display: none" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Default Modal</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="id">
                        </div>
                        <div class="modal-body">
                            <input type="text" name="ten" placeholder="nhập tên">
                        </div>
                        <div class="modal-body">
                            <input type="text" name="email" placeholder="nhập email">
                        </div>
                        <div class="modal-body">
                            <input type="text" name="sdt" placeholder="nhập số điện thoại">
                        </div>
                        <div class="modal-body">
                            <label for="xeduadon">xeduadon</label>
                            <input id="xeduadon" type="checkbox" name="xeduadon">
                        </div>
                        <div class="modal-body">
                            <label for="khachsan">khachsan</label>
                            <input id="khachsan" type="checkbox" name="khachsan">
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary edit">Save changes</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </section>
        <ul class="pagination" style="margin-top: 40px">
            <?php
            if(!empty($total_pages)){
                for($i=1; $i<= $total_pages; $i++){
                    if($i == 1){
                        ?>
                        <li class="pageitem active" id="<?php echo $i;?>"><a href="JavaScript:Void(0);" data-id="<?php echo $i;?>" class="page-link" ><?php echo $i;?></a></li>
                        <?php
                    }
                    else{
                        ?>
                        <li class="pageitem" id="<?php echo $i;?>"><a href="JavaScript:Void(0);" class="page-link" data-id="<?php echo $i;?>"><?php echo $i;?></a></li>
                        <?php
                    }
                }
            }
            ?>
        </ul>

    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.5
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src=".plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
<script>
    $(window).ready(function () {
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#target-content tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });

        $("#target-content").load("/project-metting/Controller/Admin/KhachHangController/pagination.php?page=1");
        $(".page-link").click(function(){
            var id = $(this).attr("data-id");
            var select_id = $(this).parent().attr("id");
            $.ajax({
                url: "/project-metting/Controller/Admin/KhachHangController/pagination.php",
                type: "GET",
                data: {
                    page : id
                },
                cache: false,
                success: function(dataResult){
                    $("#target-content").html(dataResult);
                    $(".pageitem").removeClass("active");
                    $("#"+select_id).addClass("active");

                }
            });
        });

        $(document).on('click', '.delete', function () {
            var checkstr = confirm('Bạn có chắc chắn muốn xóa');
            if (checkstr == true) {
                var id = $(this).data('id');
                $clicked_btn = $(this);
                $.ajax({
                    url: '/project-metting/Controller/Admin/KhachHangController/delete.php',
                    type: 'GET',
                    data: {
                        'delete': 1,
                        'id': id,
                    },
                    success: function (response) {
                        $clicked_btn.parents("tr").remove();
                    }
                });
            } else {
                return false;
            }

        });

        $(document).on('click', '.btn-primary.add', function () {
            var ten = $("input[name=ten]").val();
            var email = $("input[name=email]").val();
            var sdt = $("input[name=sdt]").val();
            var xeduadon = $("input[name=xeduadon]").val();
            var khachsan = $("input[name=khachsan]").val();
            $clicked_btn = $(this);
            $.ajax({
                url: '/project-metting/Controller/Admin/KhachHangController/add.php',
                type: 'POST',
                data: {
                    'ten': ten,
                    'email': email,
                    'xeduadon': xeduadon,
                    'khachsan': khachsan,
                    'sdt': sdt,
                },
                success: function (response) {
                    if (xeduadon == "on") {
                        xeduadon = "Có";
                    } else {
                        xeduadon = "Không";
                    }
                    if (khachsan == "on") {
                        khachsan = "Có";
                    } else {
                        khachsan = "Không";
                    }
                    $('.modal.fade.show').removeAttr('aria-modal');
                    $('.modal.fade.show').attr('aria-hidden', 'true');
                    $('.modal.fade.show').removeClass('show');
                    $('body').removeClass('modal-open');
                    $('tbody').append("<tr id=\"row" + response + "\"'> <td>" + response + "</td> <td>" + ten + "</td> <td>" + email + "</td><td>" + sdt + "</td> <td>" + xeduadon + "</td><td>" + khachsan + "</td> <td><button type=\"button\" class=\"btn btn-default add\" data-toggle=\"modal\" data-target=\"#modal-default\">Thêm</button>|        <button type=\"button\" class=\"btn btn-default edit\" data-toggle=\"modal\" data-target=\"#modal-default\" data-id=\"6\">Sửa</button>|<button class=\"delete btn btn-default\" data-id=\"6\">Xóa</button></td> </tr>");
                }
            });
        });

        $(document).on('click', '.btn-primary.edit', function () {
            var ten = $("#modal-default1 input[name=ten]").val();
            var email = $("#modal-default1 input[name=email]").val();
            var xeduadon = $("#modal-default1 input[name=xeduadon]").val();
            var khachsan = $("#modal-default1 input[name=khachsan]").val();
            var sdt = $("#modal-default1 input[name=sdt]").val();
            var id = $("#modal-default1 input[name=id]").val();
            if (xeduadon == "on") {
                xeduadon = 1;
            } else {
                xeduadon = 0;
            }
            if (khachsan == "on") {
                khachsan = 1;
            } else {
                khachsan = 0;
            }
            $clicked_btn = $(this);
            $.ajax({
                url: '/project-metting/Controller/Admin/KhachHangController/editKH.php',
                type: 'POST',
                data: {
                    'id': id,
                    'ten': ten,
                    'email': email,
                    'xeduadon': xeduadon,
                    'khachsan': khachsan,
                    'sdt': sdt,
                },
                success: function (response) {
                    console.log(response);
                    $('.modal.fade.show').removeAttr('aria-modal');
                    $('.modal.fade.show').attr('aria-hidden', 'true');
                    $('.modal.fade.show').removeClass('show');
                    $('body').removeClass('modal-open');
                    $("#row" + id + "").remove();
                    $('tbody').append("<tr id=\"row" + id + "\"'> <td>" + id + "</td> <td>" + ten + "</td> <td>" + email + "</td> <td>" + sdt + "</td><td>" + xeduadon + "</td><td>" + khachsan + "</td> <td><button type=\"button\" class=\"btn btn-default add\" data-toggle=\"modal\" data-target=\"#modal-default\">Add</button>|        <button type=\"button\" class=\"btn btn-default edit\" data-toggle=\"modal\" data-target=\"#modal-default\" data-id=\"6\">Edit</button>|<button class=\"delete btn btn-default\" data-id=\"6\">Delete</button></td> </tr>");

                }
            });
        });

        $(document).on('click', '.editUser', function () {
            var id = $(this).data('id');
            $("#modal-default1 input[name=taikhoan]").val(id);
            $clicked_btn = $(this);
            $.ajax({
                url: '/project-metting/Controller/Admin/KhachHangController/edit.php',
                type: 'GET',
                data: {
                    'id': id,
                },
                success: function (response) {
                    var response = JSON.parse(response);
                    $("#modal-default1 input[name=id]").val(response[0]);
                    $("#modal-default1 input[name=ten]").val(response[1]);
                    $("#modal-default1 input[name=email]").val(response[2]);
                    $("#modal-default1 input[name=sdt]").val(response[3]);
                    $("#modal-default1 input[name=xeduadon]").val(response[4]);
                    $("#modal-default1 input[name=khachsan]").val(response[5]);
                    $('.modal.fade.show').removeClass('show');
                    $('body').removeClass('model-open');
                }
            });
        });

    })
</script>
</html>
