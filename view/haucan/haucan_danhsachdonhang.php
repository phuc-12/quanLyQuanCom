<?php
include ("../../model/chucnanghaucan.php");
$p = new haucan();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theo dõi đơn hàng</title>
    <link rel="stylesheet" type="text/css" href="../../css/haucan_css/style.css">
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../js/dateTime.js" defer></script> 
</head>
<body>
<header>
        <div class="container-fluid p-0">
            <div id="ql_header">
                <div class="logo" style="padding: 0; border-radius: 100px;">
                    <a href="../../index.php"><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
                </div>

                <a class="trangChu" href="../../index.php">
                    <p>Trang Chủ</p>
                </a>

                <div class="nav-item dropdown">
                    <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" style="float:right; margin-top: 20px; padding: 0; margin-right:70px;">👤</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Thông Tin Cá Nhân</a></li>
                        <li><a class="dropdown-item" href="#">Cập Nhật Thông Tin</a></li>
                        <li><a class="dropdown-item" href="../../index.php">Đăng Xuất</a></li>
                    </ul>
                </div>

                <div class="date" style="float:right; margin-right: 100px; margin: 20px;"><span>📅</span><span id="currentDate"></span></div>
                    
            </div>
        </div>
    </header>
    <div id="content">
            <div class="container">
                <div class="header-row">
                    <h2>DANH SÁCH ĐƠN HÀNG</h2>
                    <!-- <div class="search-add">
                        <input type="text" placeholder="Tìm kiếm...">
                        <button class="search-button">🔍</button>
                    </div> -->
                </div>
                <!-- <table> -->
                    <!-- <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã đơn hàng</th>
                            <th>Tên người nhận</th>
                            <th>Địa chỉ giao hàng</th>
                            <th>Thời gian yêu cầu giao</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead> -->
                    <!-- <tbody>
                        <tr>
                            <td>1</td>
                            <td>DH01</td>
                            <td>Nguyễn Thị Nga</td>
                            <td>Nguyễn Văn Bảo, Gò Vấp</td>
                            <td>20:00 05/11/2024</td>
                            <td>Chuẩn bị đơn hàng</td>
                            <td>
                                <button class="view-button" onclick="window.location.href='haucan_chitietdonhang.php';">Xem chi tiết</button>
                                <button class="view-button" onclick="window.location.href='haucan_giaohang.php';">Bắt đầu giao hàng</button>
                            </td>
                        </tr> -->
                        <!-- Add more rows as needed -->
                    <!-- </tbody>
                </table> -->
                <?php
                    $p->xemdanhsachdonhang("select * from chitiethoadon group by maHD")
                ?>
            </div>
        </div>
    </div>
</body>