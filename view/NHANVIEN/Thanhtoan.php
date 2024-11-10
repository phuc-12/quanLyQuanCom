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
            <center><h1>Danh sách đơn hàng</h1>
            <table class="order-table1">
                <tr>
                    <th><a href="?chthanhtoan">Đơn hàng chưa thanh toán</a></th>
                    <th></th>
                    <th>|</th>
                    <th></th>
                    <th><a href="?dathanhtoan">Đơn hàng đã thanh toán</a></th>
                </tr>
            </table>
            </center>
            <table class="order-table">
            <?php
                // if(isset($_REQUEST["chthanhtoan"])){
                //     include_once("");
                // }else if(isset($_REQUEST["dathanhtoan"])){
                //     include_once("");
                // }
            ?>
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
                        <td>Chưa thanh toán</td>
                        <td>
                            <button class="button view"><a href="Chitietdonhang.php">Xem</a></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>0002</td>
                        <td>09:10 AM</td>
                        <td>Chưa thanh toán</td>
                        <td>
                            <button class="button view"><a href="Chitietdonhang.php">Xem</a></button>
                        </td>
                    </tr>
                    <!-- Thêm.. -->
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
