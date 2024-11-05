<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <title>Trang chủ</title>
</head>

<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="contact-info">
            <span>1900-1900</span>
            <span>Thứ 2 - Chủ nhật 7:00 - 18:00</span>
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
        <div class="logo"></div>
        <a href="intro.php">Giới Thiệu</a>
        <a href="contact.php">Liên Hệ</a>
    </nav>

    <!-- Category Navigation -->
    <div class="category-nav">
        <b><a href="#">Món chay</a></b>
        <b><a href="#">Món mặn</a></b>
        <b><a href="#">Đồ uống</a></b>
        <b><a href="#">Tráng Miệng</a></b>
    </div>

    <div class="contact">
        <div class="contact-form">
            <h2 class="form-title">LIÊN HỆ</h2>
            <form>
                <div class="form-group">
                    <label>Họ tên:</label>
                    <input type="text">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email">
                </div>
                <div class="form-group">
                    <label>Số điện thoại:</label>
                    <input type="tel">
                </div>
                <div class="form-group">
                    <label>Nội dung:</label>
                    <textarea></textarea>
                </div>
                <button type="submit" class="submit-btn">GỬI</button>
            </form>
        </div>

        <div class="contact-info">
            <div class="info-item">
                <div class="info-content">
                    <div class="ic1">
                        <h3>Địa chỉ liên hệ</h3>
                        <p>Số 12 Nguyễn Văn Bảo, Phường 4, Quận Gò Vấp, TPHCM</p>
                    </div>
                    <div class="ic1">
                        <h3>Số điện thoại</h3>
                        <p>0346.021.604</p>
                    </div>
                    <div class="ic1">
                        <h3>Thời gian hoạt động</h3>
                        <p>Thứ 2 - Chủ nhật: 6:00 - 20:00</p>
                    </div>
                    <div class="ic1">
                        <h3>Email</h3>
                        <a href="#">quancomchipheo@gmail.com</a>
                    </div>
                </div>
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
                <img src="../assets/img/logo-white.png" alt="">
                <P>
                    Chúng tôi cam kết mang đến những sản phẩm chất lượng với số lượng lớn đáp ứng nhu cầu đa dạng của
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
</body>

</html>