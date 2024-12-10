<?php
include_once("../../model/chucnangnhanvien.php");
$p = new tmdt();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin thanh toán</title>
    <link rel="stylesheet" href="../../Css/nhanVien.css">
    <link rel="stylesheet" href="../../CSS/thongtin.css">
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../js/dateTime.js" defer></script>
    <script src="../../js/thongtin.js" defer></script>
    <script src="../../js/qrthanhtoan.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../js/xulyVourche.js" defer></script>
    <script src="../../js/xyLyTichDiem.js" defer></script>
    <style>
        .header h1 {
            margin-top: -40px;
            margin-left: 100px;
        }
    </style>
</head>

<body>
    <div class="container-fluid p-0">
        <!-- Header -->
        <div class="header">
            <div class="logo" style="padding: 0; border-radius: 100px;">
                <a href="../../index.php"><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
            </div>
            <h1><a href="NV_quanli.php">Trang nhân viên</a></h1>
            <div class="date" style="float:right; margin-right: 50px; margin-top: -20px; "><span>📅</span><span id="currentDate"></span></div>
            <div class="menu-icon" style="float:right;" onclick="toggleSidebar()">👤</div>
        </div>
        <div class="sidebar" id="sidebar">
            <button class="menu-item"><a href="ThongtinNhanVien.php?id=<?php echo $layid ?>">Thông tin cá nhân</a></button>
            <button class="menu-item"><a href="CN_thongtin.php?id=<?php echo $layid ?>">Cập nhật thông tin cá nhân</a></button>
            <button class="menu-item"><a href="../../index.php">Đăng xuất</a></button>
        </div>

        <div class="container" style="width:100%;">
            <div class="content">
                <center>
                    <h1>Thông tin thanh toán</h1>
                </center>
                <?php
                include("../../controler/cThanhToan.php");
                if (isset($_GET['orderId'])) {
                    $orderId = $_GET['orderId'];
                }
                $p = new cThanhToan();
                $listOrderDetails = $p->getDanhSachChiTietHoaDonBoiMaHD($orderId);
                $maKH = $p->getMaKhByOrderId($orderId);
                $loaiKH = $p->getLoaiKH($maKH);
                $danhSachKmBoiLoaiKH = $p->getDanhSachKmBoiLoaiKH($loaiKH);
                // var_dump($danhSachKmBoiLoaiKH);
                // Gọi phương thức getKhachHang() để lấy dữ liệu của khách hàng với maKH là 12
                $result = $p->getKhachHang($maKH);
                $order = $p->getHoaDonByOrderId($orderId);
                foreach ($order as $o) {
                    $maHD = $o['maHD'];
                    $ngaythang = $o['ngayThang'];
                    $date = new DateTime($ngaythang);
                    $formattedDate = 'Ngày' . ' ' . $date->format('j') . ' tháng ' . $date->format('n') . ' năm ' . $date->format('Y');
                }
                // Nếu có kết quả trả về
                if ($result) {
                    // Hiển thị thông tin khách hàng
                    echo "<table class='customer-table'>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>Tên Khách Hàng</th>";
                    echo "<th>Số Điện Thoại</th>";
                    echo "<th>Địa Chỉ</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";

                    foreach ($result as $r) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($r["hoTen"]) . "</td>";
                        echo "<td>" . htmlspecialchars($r["sdt"]) . "</td>";
                        echo "<td>" . htmlspecialchars($r["diaChi"]) . "</td>";
                        echo "</tr>";
                    }

                    echo "</tbody>";
                    echo "</table>";
                } else {
                    // Nếu không có kết quả, hiển thị thông báo
                    echo '<p class="no-results">Không tìm thấy thông tin khách hàng.</p>';
                }


                ?>
                <h3 id="dc">Quán cơm Chí Phèo - 12 Nguyễn Văn Bảo, Phường 4, Gò Vấp</h3>
                <?php

                ?>
                <p>Số hóa đơn: <?php echo $maHD ?> </p>
                <p><?php echo $formattedDate ?></p>
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
                        $temp = 0;
                        $total = 0;
                        if (!empty($listOrderDetails) && is_array($listOrderDetails)) {
                            foreach ($listOrderDetails as $item) {
                                $temp++;
                                $total += $item['dongia'] * $item['soLuong'];
                        ?>
                                <tr>
                                    <td><?= $temp ?></td>
                                    <td><?= $item['tenMA'] ?></td>
                                    <td><?= $item['soLuong'] ?></td>
                                    <td><?= $item['donViTinh'] ?></td>
                                    <td><?= $item['dongia'] ?></td>
                                    <td><?= number_format($item['dongia'] * $item['soLuong'], 3, '.', '') ?></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>

                    </tbody>
                </table>

                <div class="summary">
                    <div id="vc">
                        <label for="loaiKH">Chọn Voucher</label>
                        <?php
                        if (!empty($danhSachKmBoiLoaiKH) && is_array($danhSachKmBoiLoaiKH)) {
                        ?>
                            <select id="khuyenMaiKH" name="khuyenMaikH">
                                <option value="" hidden></option>
                                <?php
                                foreach ($danhSachKmBoiLoaiKH as $khuyenMai) {
                                ?>
                                    <option value="<?= $khuyenMai['tenKM'] ?>"><?= $khuyenMai['tenKM'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        <?php

                        }
                        ?>

                    </div>
                    <?php $total = $total * 1000 ?>
                    <p>Tổng cộng: <span id="totalPrice" data-value="<?php echo $total ?>"><?= number_format($total, 0, '', ',') ?></span>VND</p>
                    <p>Chiết khấu:<span id="discount">0đ</span></p>
                    <p>Thanh toán: <span id="total-after-calculating-discounts"><?= number_format($total, 0, '', ',') ?></span>VND</p>
                    <p></p>
                    <!-- <button class="button thanhtoan">VN Pay</button> -->
                    <button class="button thanhtoan"><a href="#" onclick="return confirmPayment(event)">Tiền mặt</a></button>
                    <?php 
                    foreach ($result as $r) {
                       ?>
                       <p class="accumulated-points" hidden><?= $r['diemTichLuy']?></p>
                       <p class="code-customer" hidden><?= $maKH?></p>
                       <?php
                    }
                    ?>
                    <button id="thanhtoan">VN Pay</button>
                    <!-- Modal Popup -->
                    <div id="qrcode" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                           <div class="wp-center-qr">
                           <img id="code" src="../../img/qrcode.jpg" alt="QR Code" style="margin-bottom: 10px;">
                           <button id="done" class="thanhtoanchung" onclick="return confirmPayment(event)">
                                <a href="#" >Hoàn tất</a>
                            </button>
                           </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

<script>
    function confirmPayment(event) {
        event.preventDefault();
        const total_after_calculating_discounts = document.getElementById('total-after-calculating-discounts').innerText;
        const confirmationMessage = 'Xác nhận thanh toán thành công ' + total_after_calculating_discounts + ' VND.';
        const isConfirmed = confirm(confirmationMessage);
        if (isConfirmed) {
        // Đóng modal
        document.getElementById('qrcode').style.display = 'none';
        }
        return isConfirmed;
    }
    // Hiển thị code
    document.getElementById('thanhtoan').onclick = function() {
        document.getElementById('qrcode').style.display = 'block';
    }
    
    document.getElementsByClassName('close')[0].onclick = function() {
        document.getElementById('qrcode').style.display = 'none';
    }
    
    window.onclick = function(event) {
        var modal = document.getElementById('qrcode');
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
</script>

</html>