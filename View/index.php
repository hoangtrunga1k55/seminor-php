<?php
$DIR_FILE = '/var/www/project-metting';
include($DIR_FILE . '/class/Db.class.php');
include($DIR_FILE . '/Model/lichhoithao.php');
include($DIR_FILE . '/Model/user.php');
include($DIR_FILE . '/Model/khachhang.php');
include($DIR_FILE . '/Model/diengia.php');
include($DIR_FILE . '/Model/chitiet_lichhoithao.php');
include($DIR_FILE . '/Model/danhgia.php');

$user = new user();
$khachhang = new khachhang();
$diengia = new diengia();
$danhgia = new danhgia();
$chitiet = new chitiet_lichhoithao();
$lichhoithao = new lichhoithao();

$result_khachhang = $khachhang->getKhachHang();
$result_diengia = $diengia->getDienGia();
$result_danhgia = $danhgia->getDanhgia();
$result_chitiet = $chitiet->getChiTietHoiThao();
$result_lichhoithao = $lichhoithao->getLichHoiThao();
$result_hoithao = $lichhoithao->getLichHoiThao();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hội Thảo C2020</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="/js/js.js"></script>

</head>

<body style="position: relative">
<button id="myBtn" class="button" type="button">Quay về</button>
<section id="hero" class="background bg-cover">
    <div class="container-fluid">
        <ul class="socials-nav">
            <li class="socials-nav-item">
                <a href=""><span class="fa fa-twitter">
                        </span></a>
            </li>
            <li class="socials-nav-item">
                <a href=""><span class="fa fa-facebook">
                        </span></a>
            </li>
            <li class="socials-nav-item">
                <a href=""><span class="fa fa-github">
                        </span></a>
            </li>
            <li class="socials-nav-item">
                <a href=""><span class="fa fa-google-plus">
                        </span></a>
            </li>
            <li class="socials-nav-item">
                <a href=""><span class="fa fa-instagram">
                        </span></a>
            </li>
        </ul>
    </div>

    <div class="heading-block align-center">
        <div class="container">
            <h5 class="heading">
                <span class="fa fa-calendar-o base-clr-txt"></span>
                28.Nov
                <span class="fa fa-map-marker base-clr-txt" style="margin-left: 14px;"></span>
                Hà Nội
            </h5>
            <h1 class="extra-heading">
                HỘI THẢO C2020
            </h1>
            <h6 class="thin-text">
                Sự Kiện Sắp Diễn Ra
            </h6>
            <div class="btns-container">
                <a href="#" class="btn btn-md" data-modal-link="email-ticket">Mua Vé</a>
                <a href="#" class="btn btn-outline btn-md" data-modal-link="0">Video</a>
            </div>
        </div>
    </div>
</section>
<div class="header" id="myHeader">
    <header class="header header-black" style="min-height: 100px;">
        <div class="header-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2 col-xs-12 navigation-header">
                        <div style="line-height: 133px;">
                            <a href="" class="logo"><img
                                        src="https://vivaco.com/demo/ventcamp/assets/img/ventcamp_logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-sm-10 col-xs-12 navigation-container">
                        <ul class="navigation-list">
                            <li class="navigation-item"><a href="#speaker">Diễn Giả</a></li>
                            <li class="navigation-item"><a href="#schedule">Hội Thảo</a></li>
                            <li class="navigation-item"><a href="#prices">Giá</a></li>
                            <li class="navigation-item"><a href="">Hình Ảnh</a></li>
                            <li class="navigation-item"><a href="">Nhà Tài Trợ</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </header>
</div>

<section id="about" class="section align-center">
    <div class="container">
        <div class="text">
            <span class="icon fa fa-microphone""></span>
            <h3>Business meets Innovation</h3>
            <span class=" text-alt">Bắt đầu kinh doanh CNTT của riêng bạn và chọn đúng thị trường ngách trong vòng chưa <strong
                        class="hightlight">30 ngày</strong></span>
        </div>
        <br>
        <br>
        <br>
        <div class="tabs-wrapper tabs-horizontal">
            <ul class="nav nav-tabs table">
                <li class="navigation-item">
                    <a href="">
                        <h6 class="hightlight">
                            <span class="fa fa-code"></span>
                            Thông tin chung
                        </h6>
                    </a>
                </li>
                <li class="navigation-item">
                    <a href="">
                        <h6><span class="fa fa-rocket"></span>Hội Thảo</h6>
                    </a>
                </li>
                <li class="navigation-item">
                    <a href="">
                        <h6><span class="fa fa-external-link"></span>Thông tin nhà tài trợ</h6>
                    </a>
                </li>

            </ul>
        </div>
        <hr class="hightlight" width="1100px" height="5px" style="margin: auto;">
        <br>
        <br>
        <div class="row">
            <div class="col-4"><img src="https://vivaco.com/demo/ventcamp/assets/img/imac-371x412.png" alt=""
                                    width="300px" height="auto"></div>

            <div class="col-8 align-left">
                <br>
                <br>
                <br>
                <h6>Thông tin sự kiện</h6>
                <p>
                    CITA 2018 là hội thảo khoa học quốc gia về công nghệ thông tin và ứng dụng trong các lĩnh vực, được
                    dự kiến tổ chức vào 28/09/2018 tại thành phố Đà Nẵng, Việt Nam. Mục tiêu của hội thảo là tạo ra diễn
                    đàn nhằm quy tụ và kết nối các nhà nghiên cứu, các nhà khoa học và các chuyên gia trong nước và quốc
                    tế tham gia công bố, thảo luận và chia sẽ về các vấn đề mới trong lĩnh vực công nghệ thông tin và
                    ứng dụng.
                </p>
            </div>
        </div>
    </div>
</section>
<section id="counters" class="section align-center bg5 overlay">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="counter-box">
                    <div class="counter-content">
                        <span class="count Single">150</span>
                        <p style="color: gray;">Diễn Giả </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="counter-box">
                    <div class="counter-content">
                        <span class="count Single">5</span>
                        <p style="color: gray;">Ngày </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="counter-box">
                    <div class="counter-content">
                        <span class="count Single">25</span>
                        <p style="color: gray;">Hội Thảo</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="counter-box">
                    <div class="counter-content">
                        <span class="count Single">200</span>
                        <p style="color: gray;">Bài phát biểu</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


</div>
<section id="speaker" class="section speaker align-center">
    <div class="container">
        <span style="font-size: 30px;" class="fa fa-users" aria-hidden="true"></span>
        <i></i>
        <p>Gặp gỡ các <span class="hightlight">chuyên gia</span></p>
        <div class="container">
            <div class="row">
                <?php
                foreach ($result_diengia as $row) {
                    echo "  <div class=\"col-4\"><div class=\"speaker\">                            <div class=\"photo-wrapper rounded\">                                <img src=" . $row[2] . " alt=\"\">                            </div>                            <h4 style=\"color: red;\">" . $row[1] . "</h4>                            <p style=\"color: gray;\">" . $row[3] . "</p> " . $row[4] . "<div class=\"social\">                                <ul>                                    <li class=\"\"><span class=\"fb\"></span></li>                                    <li class=\"\"><span class=\"fb\"></span></li>                                    <li class=\"\"><span class=\"fb\"></span></li>                                </ul>                            </div>                        </div>                    </div>";
                }
                ?>
            </div>
        </div>
    </div>
</section>
<section id="schedule" class="section">
    <div class="container">
        <div class="align-center">
            <span class="icon fa fa-book" aria-hidden="true"></span>
            <h3 style="color: black;">Hội Thảo</h3>
            <p>
                Nắm bắt cơ hội để<strong class="hightlight">thành công</strong>
            </p>
        </div>

        <div class="container mt-3">
            <ul class="nav nav-tabs align-center">
                <?php
                foreach ($result_lichhoithao as $index => $lichhoithao) {
                    if ($index == 0) {
                        echo "                    <li class=\"nav-item\"><a class=\"nav-link active show\" data-toggle=\"tab\" href=\"#menu" . $lichhoithao[0] . "\">" . $lichhoithao[1] . "</a></li>";
                    } else {
                        echo "                    <li class=\"nav-item\"><a class=\"nav-link\" data-toggle=\"tab\" href=\"#menu" . $lichhoithao[0] . "\">" . $lichhoithao[1] . "</a></li>";
                    }

                }
                ?>
            </ul>

            <div class="tab-content">
                <?php
                foreach ($result_hoithao as $index => $hoithao) {
                    if ($index == 0) {
                        echo " <div id=\"menu" . $hoithao[0] . "\" class=\"container tab-pane active show\">";
                    } else {
                        echo " <div id=\"menu" . $hoithao[0] . "\" class=\"container tab-pane \">";

                    }
                    foreach ($result_chitiet as $chitiet) {
                        if ($hoithao[0] == $chitiet[3]) {
                            echo "                        <div class=\"panel schedule-item\">                            <div class=\"lecture-icon-wrapper\">                                <span class=\"fa fa-cutlery\"></span>                            </div>                            <a data-toggle=\"collapse\" data-parent=\"#day1_auditorium1_timeline\"                                href=\"#day1_auditorium1_time1\" class=\"schedule-item-toggle\">                                <strong class=\"time highlight\"><span class=\"icon icon-office-24\"></span>" . $chitiet[1] . "</strong>                                <h6 class=\"title\">" . $chitiet[2] . "<i class=\"icon icon-arrows-06\"></i></h6>                            </a>                        </div>";
                        }
                    }
                    echo "</div>";
                }
                ?>
            </div>
        </div>

    </div>
    </div>
</section>
<section id="signup" class="section bg-cover bg4 overlay align-center ">
    <div class="container">
        <h2>
            Đăng Ký Ngay</h2>
        <!--        <small style="color: white;">No Spam - Only latest news, price and activity updates</small>-->
        <br>
        <br>
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <form method="post" action="/project-metting/Controller/KhachHangController.php">
                <input class="active" id="name" name="ten" type="text"
                       placeholder="Nhập tên" required>
                <br>
                <input class="active" id="email" name="email" type="email"
                       placeholder="email@email.com" required>
                <br>
                <input class="active" id="sdt" name="sdt" type="text" placeholder="Nhập số điện thoại" required>
                <br>
                <label for="xeduadon" style="color: white">Xe Đưa đón</label>
                <input id="xeduadon" name="xeduadon" type="checkbox">
                <label for="khachsan" style="color: white">Khách Sạn</label>
                <input id="khachsan" name="khachsan" type="checkbox">
                <br>
                <input type="submit" style="color: red;" value="Đăng Ký" class="btn-sm btn-outline-clr">
            </form>
        </div>
    </div>
</section>
<section id="prices" class="section align-center">
    <div class="container">
        <span class="icon fa fa-cutlery"></span>
        <h3 style="color: black;">Vé</h3>
        <p>
            Rất nhiều bài phát biểu và các <strong class="hightlight">hoạt động</strong>
        </p>
        <div class="row">
            <div class="col-4 border">
                <h4>Vé Thường</h4>
                <h4 style="color: red;">$33</h4>
                <p>Ghế thường</p>
                <p>Đồ ăn miễn phi</p>
                <p>Huy hiệu thường</p>
                <div class="btn">Mua Ngay</div>
            </div>
            <div class="col-4 border">
                <h4>Vé Cao Cấp</h4>
                <h4 style="color: red;">$33</h4>
                <p>Ghế Cao cấp</p>
                <p>Đồ ăn miễn phí</p>
                <p>Huy hiệu cao cấp</p>
                <div class="btn">Mua Ngay</div>
            </div>
            <div class="col-4 border">
                <h4>Vé Khách mời</h4>
                <h4 style="color: red;">$33</h4>
                <p>Chỗ ngồi đặc biệt</p>
                <p>Đồ ăn+Nước Miễn phí</p>
                <p>Ghế VIP</p>
                <div class="btn">Mua Ngay</div>
            </div>
        </div>
    </div>
</section>
<section id="feedback" class="section align-center" style="padding-top: 30px;">
    <div class="container">
        <h3 style="color: black;">Đánh Giá</h3>
        <p>Mọi người <span class="hightlight">nói gì</span></p>
        <div class="row">
            <?php
            foreach ($result_danhgia as $row) {
                echo "         <div class=\"col-4\">                    <p>" . $row[3] . "</p>                    <div class=\"row\">                        <div class=\"col-4\">                            <img class=\"photo-wrapper rounded\" src=\"" . $row[2] . "\">                        </div>                        <div class=\"col-8\">                            <h4>" . $row[1] . "</h4>                                               </div>                    </div>                </div>";

            }
            ?>
        </div>

    </div>
    </div>
</section>
<section id="register" class="section bg-cover bg4 overlay align-center ">
    <h2><span class="hightlight">Đăng ký</span> ngay</h2>
    <p style="color: white;">Hội thảo sẽ giúp bạn khám phá ra được chính mình</p>
    <div class="btn" style="border:1px solid">Đăng Ký</div>
</section>
<section id="contact">
    <div class="container">
        <br>
        <p><i class="small-icon fa fa-map-marker"></i>134 Phùng Khoang, Hà Nội</p>
        <p><i class="small-icon fa fa-envelope"></i>info@ventcamp.com</p>
        <p><i class="small-icon fa fa-phone"></i>(+84) 5803983</p>
        <p><i class="small-icon fa fa-clock-o"></i>7:30 - 22:00</p>
    </div>
</section>
<section id="footer" class="align-center">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h3>About C2020</h3>
                <p>Mageplaza tự hào là một trong những công ty trẻ có tốc độ phát triển mạnh mẽ nhất trong lĩnh vực sản
                    xuất và xuất khẩu phần mềm, cung cấp giải pháp Thương mại điên tử hoàn hảo cho các doanh nghiệp trên
                    toàn thế giới! Mageplaza luôn nỗ lực để tạo ra những sản phẩm tốt nhất với những tính năng ưu việt,
                    nổi trội, đáp ứng được yêu cầu ngày càng cao của khách hàng.

                    Trải qua 6 năm hình thành và phát triển, Mageplaza đã đạt được những cột mốc đáng kinh ngạc như:

                    - Đứng thứ 2 thế giới ở mảng Magento xét theo traffic truy cập site</p>
                <img src="https://vivaco.com/demo/ventcamp/assets/img/autograph-143x105.png" alt="">
            </div>
            <div class="col-4">
                <h3>Twitter Feed</h3>
                <p>Đỉnh cao của sự thành công</p>
                <p>http://spoti.fi/1CTPWcW</p>
                <p>12 Sep 2020</p>
                <p>Không gì có thể ngăn cản bạn</p>
                <p>8 Sep 2015</p>
                <p>
                    Chúng tôi không phải là siêu anh hùng. Nhưng đôi khi, cuộc sống không diễn ra theo cách bạn đã định.
                    #TI5
                    #BleedBlue</p>
                <p>9 Sep 2020</p>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-4 footer">
                        <img src="https://vivaco.com/demo/ventcamp/assets/img/gallery/footer-photo.jpg" alt="">
                    </div>
                    <div class="col-4 footer">
                        <img src="https://vivaco.com/demo/ventcamp/assets/img/gallery/footer-photo.jpg" alt="">
                    </div>
                    <div class="col-4 footer">
                        <img src="https://vivaco.com/demo/ventcamp/assets/img/gallery/footer-photo.jpg" alt="">
                    </div>
                    <div class="col-4 footer">
                        <img src="https://vivaco.com/demo/ventcamp/assets/img/gallery/footer-photo.jpg" alt="">
                    </div>
                    <div class="col-4 footer">
                        <img src="https://vivaco.com/demo/ventcamp/assets/img/gallery/footer-photo.jpg" alt="">
                    </div>
                    <div class="col-4 footer">
                        <img src="https://vivaco.com/demo/ventcamp/assets/img/gallery/footer-photo.jpg" alt="">
                    </div>
                    <div class="col-4 footer">
                        <img src="https://vivaco.com/demo/ventcamp/assets/img/gallery/footer-photo.jpg" alt="">
                    </div>
                    <div class="col-4 footer">
                        <img src="https://vivaco.com/demo/ventcamp/assets/img/gallery/footer-photo.jpg" alt="">
                    </div>
                    <div class="col-4 footer">
                        <img src="https://vivaco.com/demo/ventcamp/assets/img/gallery/footer-photo.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<script>
    $(document).ready(function () {
        var mybutton = document.getElementById("myBtn");
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 850 || document.documentElement.scrollTop > 850) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        $("#myBtn").click(function () {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        })
    });
</script>
</html>