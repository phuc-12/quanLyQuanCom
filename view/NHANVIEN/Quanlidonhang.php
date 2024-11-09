<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý đơn hàng</title>
    <link rel="stylesheet" href="../../CSS/nhanVien.css">
    <script src="../../js/dateTime.js" defer></script> 
</head>
<body>
    <div class="header">
        <div class="logo">Logo</div>
        <h1><a href="NV_quanli.php">Trang nhân viên</a></h1>
        <div class="date">
            <span>📅</span>
            <span id="currentDate"></span>
        </div>
        <div class="user-icon">
            <a href="ThongtinNhanVien.php">👤</a>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <h2>Danh sách đơn hàng</h2>
            <button class="button new-order">Tạo đơn mới</button>

            <table class="order-table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã hóa đơn</th>
                        <th>Giờ khởi tạo</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dữ liệu mẫu -->
                    <tr>
                        <td>1</td>
                        <td>0001</td>
                        <td>10:00 AM</td>
                        <td>Đã thanh toán</td>
                        <td>
                            <button class="button view"><a href="Chitietdonhang.php">Xem</a></button>
                            <button class="button update">Cập nhật</button>
                        </td>
                    </tr>
                    <!-- Thêm.. -->
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
