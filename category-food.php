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
    <div class="container-fluid p-0">
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="contact-info">
                <span>0346021604</span>
                <span> - </span>
                <span>Thứ 2 - Chủ nhật 7:00 - 18:00</span>
            </div>
            <div class="auth-buttons">
                <input type="search" placeholder="Bạn cần tìm gì" autocomplete="off">
                <input type="submit" name="btn" id="btn" value="Search">
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

        <!-- Menu dish by type  -->
        <div class="menu">
            <h2 class="section-title">MÓN CHAY</h2>
            <div class="menu-grid">
                <div class="menu-item">
                    <a href="#">
                        <div class="sp-img">
                            <img src="IMG/monchay/bokhochay.jpg" alt="">
                        </div>
                        <div class="sp-info">
                            <h3>Bò kho chay</h3>
                            <p>10.000đ</p>
                        </div>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="#">
                        <div class="sp-img">
                            <img src="IMG/monchay/suonnonchiengion.png" alt="">
                        </div>
                        <div class="sp-info">
                            <h3>Sườn non chiên giòn</h3>
                            <p>10.000đ</p>
                        </div>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="#">
                        <div class="sp-img">
                            <img src="IMG/monchay/heoquaychay.png" alt="">
                        </div>
                        <div class="sp-info">
                            <h3>Heo quay chay</h3>
                            <p>10.000đ</p>
                        </div>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="#">
                        <div class="sp-img">
                            <img src="IMG/monchay/goiduduchay.png" alt="">
                        </div>
                        <div class="sp-info">
                            <h3>Gỏi đu đủ chay</h3>
                            <p>10.000đ</p>
                        </div>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="#">
                        <div class="sp-img">
                            <img src="IMG/monchay/dauhukhochay.png" alt="">
                        </div>
                        <div class="sp-info">
                            <h3>Đậu hũ kho chay</h3>
                            <p>10.000đ</p>
                        </div>
                    </a>
                </div>

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
                    <img src="IMG/ChiPheologo.png" alt="">
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