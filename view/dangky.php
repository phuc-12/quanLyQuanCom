<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Trang Đăng Ký</title>
</head>
<body>
<div class="container-fluid p-0">
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="contact-info">
                <span>0346021604</span>
                <span> - </span>
                <span>Thứ 2 - Chủ nhật 7:00 - 18:00</span>
            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="main-nav">
            <a href="../index.php">Trang chủ</a>
            <a href="../intro-menu.php">Thực đơn</a>
            <div class="logo">
                <img src="../IMG/ChiPheologo.png" alt="">
            </div>
            <a href="../intro.php">Giới Thiệu</a>
            <a href="../contact.php">Liên Hệ</a>
        </nav>
        <div class="contactv1">
            <div class="contact-formv1">
                <h2 class="form-title">ĐĂNG KÝ</h2>
                <form>
                    <div class="form-group">
                        <label>Username:</label>
                        <input type="text" name="txtTND">
                    </div>
                
                
                    <div class="form-group">
                        <label>password:</label>
                        <input type="password" name="txtMK">
                    </div>
                    <div class="form-group">
                        <label>Họ Tên:</label>
                        <input type="text" name="tenname">
                    </div>
                    <div class="form-group">
                        <label>Địa Chỉ:</label>
                        <td><input type="text" name="dc"></td>
                    </div>
                    <div class="form-group">
                        <label>Số Điện Thoại:</label>
                        <td><input type="text" name="sdt"></td>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" name="email">
                    </div>
                    <tr>
                        <td><input type="reset" value="Nhập Lại"></td>
                        <td><input type="submit" value="Đăng ký" name="guiDK"></td>
                    </tr>
                    <tr>
                        <td>
                            <a href="dangnhap.php">Đăng Nhập</a>
                        </td>
                    </tr>
                </form>
            </div>
            
        </div>
        <!-- Footer -->
        <footer class="footer">
            <div class="contain1">
                <div class="doc1">
                    <h4>
                        QUÁN CƠM CHÍ PHÈO
                    </h4>
                    <p>
                        GIÁ RẺ - NGON - VỆ SINH - AN TOÀN
                    </p>
                    <img src="../IMG/ChiPheologo.png" alt="">
                    <P>
                        Chúng tôi cam kết mang đến những sản phẩm chất lượng với số lượng lớn đáp ứng nhu cầu đa dạng
                        của
                        từng khách hàng
                    </P>
                </div>
                <div class="doc2">
                    <h4>CHÍNH SÁCH</h4>
                    <ul>
                        <li><a href="#" class="doc">Cách Đặt Lịch Tại Website</a></li>
                        <li><a href="#" class="doc">Chính Sách Bảo Mật</a></li>
                        <li><a href="#" class="doc">Phương Thức Thanh Toán</a></li>
                    </ul>
                </div>
                <div class="doc3">
                    <h4>LIÊN HỆ ĐẶT HÀNG</h4>
                    <ul>
                        <li><a href="https://zalo.me/0346021604" class="doc">Zalo: 0346021604</a></li>
                        <li>Địa chỉ: F4/9C tổ 14 ấp 6C, xã Vĩnh Lộc A, huyện Bình Chánh, TP.HCM</li>
                        <li>Giờ mở cửa: Thứ 2 - Chủ nhật: 6:00 - 20:00</li>
                    </ul>
                </div>
                <div class="doc4">
                    <h4>LIÊN KẾT NHANH</h4>
                    <ul>
                        <li><a href="#" class="doc">Giới Thiệu</a></li>
                        <li><a href="#" class="doc">Liên Hệ-Bản Đồ Đường Đi</a></li>
                        <li><a href="#" class="doc">Facebook</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>

</body>
</html>
<?php
    if(isset($_POST['guiDK'])){
        include_once('controller/cDangky.php');
        $p = new cdangky;
        $p -> cDK01ND($_POST['name'],$_POST['pw'],$_POST['tenname'],$_POST['dc'],$_POST['sdt'],$_POST['email']);
    }

?>