<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theo dõi đơn hàng</title>
    <link rel="stylesheet" href="Css/theoDoiDonHang.css">
</head>
<body>
    <!-- Header -->
    <header class="top-bar">
        <div class="logo-container">
            <div class="logo">Logo</div>
            <div class="home">Trang chủ</div>
        </div>
        <div class="user-info">
            <span class="date">DD/MM/YY</span>
            <span class="user-icon">Icon</span>
        </div>
    </header>
    <!-- Main Content -->
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
    <footer>
        <span>Footer</span>
    </footer>
</body>
</html>