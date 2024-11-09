<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết đơn hàng</title>
    <link rel="stylesheet" href="../../CSS/nhanVien.css">
    <script src="../../js/dateTime.js" defer></script> 
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="logo">Logo</div>
        <h1><a href="Quanlidonhang.php">Quản lý đơn hàng</a></h1>
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
            <h2>Chi tiết đơn hàng</h2>
            <div class="inform">
                <p>Số hóa đơn: 001</p>
                <p>Ngày: 21 tháng 10 năm 2024</p>
                <p>Nhân viên: Nguyễn Văn A</p>
                <p>Trạng thái: Đã thanh toán</p>
                <p>Thông tin khách hàng: 0949198155</p>
            </div>
         
            <table class="order-table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên món</th>
                        <th>Số lượng</th>
                        <th>Đơn vị tính</th>
                        <th>Đơn giá</th>
                        <th>Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dữ liệu mẫu -->
                    <tr>
                        <td>1</td>
                        <td>Cà phê sữa</td>
                        <td>2</td>
                        <td>Ly</td>
                        <td>20,000</td>
                        <td>40,000</td>
                    </tr>
                    
                    <!-- Thêm ..-->
                </tbody>
            </table>

            <div class="summary">
                <p>Tổng cộng: 40,000</p>
                <p>Chiết khấu: 0</p>
                <p>Thanh toán: 40,000</p>
            </div>
        </div>
    </div>

</body>
</html>
