<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" href="../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Trang chủ</title>
</head>

<body>
    <?php
    include_once("model/chucnangadmin.php");
    $p = new tmdt();
    $layid = $_REQUEST['id'];
    $layten=$p->laycot("select tenMA from monan where maMA = '$layid' limit 1");
    $laysoluong=$p->laycot("select soLuong from monan where maMA = '$layid' limit 1");
    $laydonGia=$p->laycot("select donGia from monan where maMA = '$layid' limit 1");
    $laymaloai=$p->laycot("select maLoaiMA from monan where maMA = '$layid' limit 1");
    $laytrangthai=$p->laycot("select trangThai from monan where maMA = '$layid' limit 1");
    $laymota=$p->laycot("select mota from monan where maMA = '$layid' limit 1");
    $laynguyenlieu=$p->laycot("select nguyenLieu from monan where maMA = '$layid' limit 1");
    $layhinhanh=$p->laycot("select hinhAnh from monan where maMA = '$layid' limit 1");
    switch($laymaloai)
    {
        case 1: {$thucDon="monman";} break;
        case 2: {$thucDon="monchay";} break;
        case 3: {$thucDon="douong";} break;
        case 4: {$thucDon="trangmieng";} break;
    }
    ?>
<div class="container-fluid p-0">
    <!-- Top Bar -->
        <div class="top-bar">
            <div class="contact-info">
                <span>0346021604</span>
                <span> / </span>
                <span>Thứ 2 - Chủ nhật / 7:00 - 18:00</span>
            </div>
            <div class="auth-buttons">
                <a href="view/dangky.php">Đăng ký</a>
                <a href="view/dangnhap.php">Đăng nhập</a>
            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="main-nav">
            <a href="index.php">Trang chủ</a>
            <a href="intro-menu.php">Thực đơn</a>
            <div class="logo">
                <img src="IMG/ChiPheologo.png" alt="">
            </div>
            <a href="intro.php">Giới Thiệu</a>
            <a href="contact.php">Liên Hệ - Chính sách</a>
        </nav>

        <!-- Category Navigation -->
        <div class="category-nav">
            <a href="category-food.php">Món chay</a>
            <a href="#">Món mặn</a>
            <a href="#">Đồ uống</a>
            <a href="#">Tráng Miệng</a>
        </div>

        <!-- Food detail -->
        <div class="food-detail">
            <div class="food-img">
                <img src="img/<?php echo $thucDon;?>/<?php echo $layhinhanh;?>" alt="">
            </div>

            <div class="food-info">
                <div class="detail-item">
                    <div class="detail-content">
                        <h1><?php echo $layten; ?></h1>
                        <hr>
                    </div>
                    <div class="price">
                        <p><?php echo $laydonGia.'đ'; ?></p>
                    </div>
                    <div class="detail-des">
                        <h2>Chi tiết món ăn</h2>
                        <ul>
                            <li><b>Số lượng: </b><?php echo $laysoluong; ?></li>
                            <li><b>Nguyên liệu: </b><?php echo $laynguyenlieu; ?></li>
                            <li><b>Mô tả: </b><?php echo $laymota; ?></li>
                            <li><b>Trạng thái: </b><?php echo $laytrangthai; ?></li>
                            
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- Footer -->
        <footer class="footer">
            <div class="contain1">
                <div class="row" style="background-color: rgb(245, 245, 245); height: 50px;">
                    <h2 style="color: rgb(84, 81, 81); font-family:Copperplate; margin-left: 10px; margin-top: 15px; padding-top: 10px"><b>QUÁN CƠM CHÍ PHÈO</b></h2>
                </div>
                <div class="doc1">
                <img src="img/ChiPheologo.png" alt="">
                    <p>
                        CHẤT LƯỢNG - VỆ SINH - AN TOÀN
                    </p>
                    <br>
                    <P>
                        Chúng tôi cam kết mang đến những sản phẩm chất lượng với số lượng lớn đáp ứng nhu
                        cầu đa
                        dạng
                        của
                        từng khách hàng
                    </P>
                </div>
                <div class="doc2">
                    <h4>CHÍNH SÁCH</h4>
                    <br>
                    <ul>
                        <!-- <li><a href="#" class="doc">Cách Đặt Lịch Tại Website</a></li> -->
                        <li><a href="contact.php#csbm" class="doc">Chính sách bảo mật</a></li>
                        <li><a href="contact.php#cstt" class="doc">Chính sách thanh toán</a></li>
                    </ul>
                </div>
                <div class="doc3">
                    <h4>THÔNG TIN LIÊN HỆ</h4>
                    <br>
                    <ul>
                        <li><a href="https://zalo.me/0346021604" class="doc">Zalo: 0346021604</a></li>
                        <li>Email: marketing@chipheoquan.com</li>
                        <li><a href="https://www.facebook.com/profile.php?id=61553590355575" class="doc">Facebook : ChíPhèo quán</a></li>
                        <li>Chí Phèo quán: F4/9C tổ 14 ấp 6C, xã Vĩnh Lộc A, huyện Bình Chánh, TP.HCM</li>
                        <!-- <li>Giờ mở cửa: Thứ 2 - Chủ nhật: 6:00 - 20:00</li> -->
                    </ul>
                </div>
                <div class="doc4">
                    <h4>LIÊN KẾT NHANH</h4>
                    <br>
                    <ul>
                        <li><a href="intro.php" class="doc">Giới Thiệu</a></li>
                        <li><a href="list-res.php" class="doc">Bản Đồ Đường Đi</a></li>
                        <!-- <li><a href="#" class="doc">Facebook</a></li> -->
                    </ul>
                </div>
            </div>
        </footer>
</div>
   
</body>

</html>