<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin thanh toán</title>
    <link rel="stylesheet" href="../../CSS/nhanVien.css">
    <script src="../../js/dateTime.js" defer></script> 
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="logo">Logo</div>
        <h1><a href="NV_quanli.php">Quản lý đơn hàng</a></h1>
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
            <center><h1>Thông tin thanh toán</h1></center>
            <div class="inform">
                <p>Số hóa đơn: 001</p>
                <p>Ngày: 21 tháng 10 năm 2024</p>
                <p>Tên khách hàng: Nguyễn Văn A</p>
                <p>Số điện thoại: 0949198155</p>
                <p>Địa chỉ: 20/3 Dương Quảng Hàm, Phường 5, Gò Vấp</p>
            </div>
            <h3 id="dc">Quán cơm Chí Phèo - 12 Nguyễn Văn Bảo, Phường 4, Gò Vấp</h3>
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
                        <td>Cơm hải sản</td>
                        <td>1</td>
                        <td>Phần</td>
                        <td>45,000</td>
                        <td>45,000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Canh rong biển</td>
                        <td>1</td>
                        <td>Phần</td>
                        <td>35,000</td>
                        <td>35,000</td>
                    </tr>
                    <tr>
                        <td>3</td>
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
            <h4 id="vc">Voucher</h3>
                <p>Tổng cộng: 40,000</p>
                <p>Chiết khấu: 0</p>
                <p>Thanh toán: 40,000</p>
            <p></p>
                <button class="button thanhtoan">Thanh toán</button>
            </div>
        </div>
    </div>

</body>
</html>
