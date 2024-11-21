<?php
error_reporting(0);
    include_once("../../controler/cHoaDon.php");

    if (isset($_GET['id'])) {
        $maHD = $_GET['id'];
        $p = new CHoaDon();
        $tblCTHD = $p->getDetailHD($maHD); // Lấy chi tiết hóa đơn từ controller

        if (!$tblCTHD) {
            echo 'Không thể kết nối dữ liệu chi tiết hóa đơn';
        } elseif ($tblCTHD == -1) {
            echo 'Chưa có dữ liệu chi tiết hóa đơn';
        }
    } else {
        echo 'Vui lòng nhập id!';
        exit();
    }
?>
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
    <style>
        .header h1 {
    margin-top: -40px;
    margin-left: 100px;
    }
    </style>
</head>
<body>
    
<div class="container-fluid p-0">
    <div class="header">
        <div class="logo" style="padding: 0; border-radius: 100px;">
            <a href="../../index.php"><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
        </div>
        <h1><a href="NV_quanli.php">Trang nhân viên</a></h1>
        <div class="date" style="float:right; margin-right: 50px; margin-top: -20px; "><span>📅</span><span id="currentDate"></span></div>
        <div class="menu-icon" style="float:right;" onclick="toggleSidebar()">👤</div> 
    </div>

    <div class="sidebar" id="sidebar">
    <button class="menu-item"><a href="ThongtinNhanVien.php">Thông tin cá nhân</a></button>        
    <button class="menu-item"><a href="CN_thongtin.php">Cập nhật thông tin cá nhân</a></button>
        <button class="menu-item"><a href="../../index.php">Đăng xuất</a></button>
    </div>
    <div class="container" style="width:100%;">
        <div class="content">
            <center><h1>Chi tiết đơn hàng</h1></center>
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
                    
                    <?php
                        error_reporting(0);
                        $stt = 1;
                        $tongTien = 0;
                        while ($row = $tblCTHD->fetch_assoc()) {
                            $thanhTien = $row['soLuong'] * $row['donGia']*1000;
                            $tongTien += $thanhTien;
                            $chietKhau = 0;
                            switch ($maLoaiKhachHang) {
                                case 1:
                                    $chietKhau = 0.10; // 10% chiết khấu
                                    break;
                                case 2:
                                    $chietKhau = 0.20; // 20% chiết khấu
                                    break;
                                case 3:
                                    $chietKhau = 0.30; // 30% chiết khấu
                                    break;
                                default:
                                    $chietKhau = 0; // Không có chiết khấu nếu không thuộc loại khách hàng hợp lệ
                            }
                            $tienChietKhau = $tongTien * $chietKhau; // Tổng tiền cần tính chiết khấu
                            $tongTienSauCK = $tongTien - $tienChietKhau; 
                            echo "<tr>";
                            echo "<td>{$stt}</td>";
                            echo "<td>{$row['tenMA']}</td>";
                            echo "<td>{$row['soLuong']}</td>";
                            echo "<td>{$row['donViTinh']}</td>";
                            echo "<td>{$row['donGia']}</td>";
                            echo "<td>" . number_format($thanhTien, 0, ',', '.') . " VNĐ</td>";
                            echo "</tr>";
                            $stt++;
                        }
                    ?>
                </tbody>
            </table>

            <div class="summary">
                <p><strong>Tổng cộng:</strong> <?= number_format($tongTien, 0, ',', '.') ?> VNĐ</p>
                <p><strong>Chiết khấu:</strong> <?= number_format($tienChietKhau, 0, ',', '.') ?> VNĐ</p>
                <p><strong>Thanh toán:</strong> <?= number_format($tongTienSauCK, 0, ',', '.') ?> VNĐ</p>
            </div>
        </div>
    </div>
</div>

</body>
</html> 

