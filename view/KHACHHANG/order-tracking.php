<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../CSS/admin_css/admin.css">
    <link rel="stylesheet" href="../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../Css/order-tracking.css">
    <title>Theo dõi đơn hàng</title>
    
</head>
<body>
<!-- <div class="container-fluid p-0"> -->
        <!-- Header -->
        <div id="ql_header">
            <div class="logo" style="padding: 0; border-radius: 100px;">
                <a href="../../index.php"><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
            </div>

            <a class="trangChu" href="../../index.php">
                <h4>Trang Chủ</h4>
            </a>
            <div class="date" style="float:right; margin-right: 100px; margin: 20px;"><span>📅</span><span id="currentDate"></span></div>
            <!-- <div class="nav-item dropdown">
                <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" style="float:right; margin-top: 20px; padding: 0;">👤</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Thông Tin Cá Nhân</a></li>
                    <li><a class="dropdown-item" href="#">Cập Nhật Thông Tin</a></li>
                    <li><a class="dropdown-item" href="../../index.php">Đăng Xuất</a></li>
                </ul>
            </div> -->
        </div>

    <main>
        <div class="page-title">
            <h1>Danh Sách Đơn Hàng</h1>
        </div>

        <table class="order-table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã hoá đơn</th>
                    <th>Tổng tiền</th>
                    <th>Ngày lập Hoá đơn</th>
                    <th>Trạng thái</th>
                    <th>Chi tiết</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>123456789</td>
                    <td>1 232 000</td>
                    <td>26/10/2024</td>
                    <td>Đang chuẩn bị</td>
                    <td><a href="#" class="view-details">Xem chi tiết</a></td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>987646323</td>
                    <td>2 232 000</td>
                    <td>26/10/2024</td>
                    <td>Đang chuẩn bị</td>
                    <td><a href="#" class="view-details">Xem chi tiết</a></td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>777646323</td>
                    <td>3 232 000</td>
                    <td>26/10/2024</td>
                    <td>Đang giao</td>
                    <td><a href="#" class="view-details">Xem chi tiết</a></td>
                </tr>
                <tr>
                    <td>004</td>
                    <td>868686868</td>
                    <td>4 232 000</td>
                    <td>25/10/2024</td>
                    <td>Đã giao</td>
                    <td><a href="#" class="view-details">Xem chi tiết</a></td>
                </tr>
            </tbody>
        </table>
    </main>

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
                        Chúng tôi cam kết mang đến những sản phẩm chất lượng với số lượng lớn đáp ứng nhu
                        cầu đa
                        dạng
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
    <!-- </div> -->
</body>
</html>