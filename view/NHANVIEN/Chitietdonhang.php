<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết đơn hàng</title>
    <link rel="stylesheet" href="../../css/nhanVien.css">
    <link rel="stylesheet" href="../../css/thongtin.css">
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../js/dateTime.js" defer></script> 
    <script src="../../js/thongtin.js" defer></script> 
</head>
<body>
    <!-- Header -->
<div class="container-fluid p-0">
    <div class="header">
        <div class="logo" style="padding: 0; border-radius: 100px;">
            <a href="../../index.php"><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
        </div>
        <h1><a href="NV_quanli.php">Trang nhân viên</a></h1>
        <div class="date" style="float:right; margin-right: 100px;"><span>📅</span><span id="currentDate"></span></div>
        <div class="menu-icon" style="float:right;" onclick="toggleSidebar()">👤</div> 
    </div>

    <div class="sidebar" id="sidebar">
    <button class="menu-item"><a href="ThongtinNhanVien.php">Thông tin cá nhân</a></button>        
    <button class="menu-item"><a href="CN_thongtin.php">Cập nhật thông tin cá nhân</a></button>
        <button class="menu-item"><a href="../../index.php">Đăng xuất</a></button>
    </div>
    <div class="container" style="width:100%;">
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
</div>

</body>
</html>
