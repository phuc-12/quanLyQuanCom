<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý đơn hàng</title>
    <link rel="stylesheet" href="../../CSS/nhanVien.css">
    <link rel="stylesheet" href="../../css/thongtin.css">
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../js/dateTime.js" defer></script> 
    <script src="../../js/thongtin.js" defer></script> 
</head>
<body>
    <div class="container-fluid p-0">
    <div class="header">
        <div class="logo" style="float:left;">Logo</div>
        <h1><a href="NV_quanli.php" style='text-decoration: none'>Trang nhân viên</a></h1>
        <div class="date" style="float:right; margin-right: 100px; "><span>📅</span><span id="currentDate"></span></div>
        <div class="menu-icon" style="float:right;" onclick="toggleSidebar()">👤</div> 
    </div>

    <div class="sidebar" id="sidebar">
        <button class="menu-item"><a href="ThongtinNhanVien.php">Thông tin cá nhân</a></button>
        <button class="menu-item"><a href="CN_thongtin.php">Cập nhật thông tin cá nhân</a></button>
        <button class="menu-item"><a href="../../index.php">Đăng xuất</a></button>
    </div>

    <div class="container" style="width:100%;">
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
    </div>
    </div>

</body>
</html>
