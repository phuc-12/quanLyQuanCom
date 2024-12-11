<?php

    include_once("../../model/chucnangnhanvien.php");
    $p = new tmdt();

    // session_start();
    // if (!isset($_SESSION['btn_DangNhap'])) {
    //     echo "<script>alert('Vui lòng đăng nhập và bắt đầu từ trang quản lý!')</script>";
    //     // echo "Vui lòng đăng nhập và bắt đầu từ trang quản lý!";
    //     header("refresh:0; url='../dangnhap.php'");
    //     exit();
    // }

    include("../../controler/cThanhToan.php");
    if (isset($_GET['orderId'])) {
        $orderId = $_GET['orderId'];
    }
    $p = new cThanhToan();
    $listCTHD = $p->getCTHDbyMaHD($orderId); // lấy chi tiết đơn hàng
    $maKH = $p->getMaKHbyOrderId($orderId);
    $loaiKH = $p->getLoaiKH($maKH);
    $listKMbyLoaiKH = $p->getlistKMbyLoaiKH($loaiKH);

    // lấy dữ liệu của khách hàng
    $result = $p->getKhachHang($maKH);
    $order = $p->getHoaDonByOrderId($orderId);
    foreach ($order as $o) {
        $maHD = $o['maHD'];
        $ngaythang = $o['ngayThang'];
        $date = new DateTime($ngaythang);
        $formattedDate = 'Ngày' . ' ' . $date->format('j') . ' tháng ' . $date->format('n') . ' năm ' . $date->format('Y');
    }


//     if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['khuyenMaiKH'])) {
//         if ($khuyenMai['tenKM'] == "Giảm 10%"){
//             echo "Nút đã được nhấn!";
//         }
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin thanh toán</title>
    <link rel="stylesheet" href="../../CSS/nhanVien.css">
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
                <div class="infoKH" style = "margin-left: 155px;">                
                    <?php
                    // Nếu có kết quả trả về
                    if ($result) {
                        echo "</thead>";
                        echo "<tbody>";
                        foreach ($result as $r) {
                            echo "<tr>";
                            // echo "<td>" . $r["hoTen"] . "</td>";
                            // echo "<td>" . $r["sdt"] . "</td>";
                            // echo "<td>" . $r["diaChi"] . "</td>";
                            // $HoTen = $r["hoTen"];
                            // $sdt = $r["sdt"];
                            // $DiaChi = $r["diaChi"];
                            echo "<td> Tên Khách Hàng :".$r["hoTen"] . "</td><br><br>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>Số Điện Thoại :" . $r["sdt"] . "</td><br><br>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>Địa Chỉ :" . $r["diaChi"] . "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                    } else {
                        // k có thông tin kh
                        echo '<p class="no-results">Không tìm thấy thông tin khách hàng.</p>';
                    }
                    ?>
                    
                    <h3 id="dc">Quán cơm Chí Phèo - 12 Nguyễn Văn Bảo, Phường 4, Gò Vấp</h3>

                    <p >Số hóa đơn: <span id="codeOrder"><?php echo $maHD ?></span></p>
                    <p><?php echo $formattedDate ?></p>
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
                        $temp = 0;
                        $total = 0;
                        if (!empty($listCTHD) && is_array($listCTHD)) {
                            foreach ($listCTHD as $item) {
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

                <div class="summary" style = "">
                    <div id="vc">
                        <label for="loaiKH">Chọn Voucher</label>
                        <?php
                        if (!empty($listKMbyLoaiKH) && is_array($listKMbyLoaiKH)) {
                        ?>
                            <select id="khuyenMaiKH" name="khuyenMaikH">
                                <option value="" hidden></option>
                                <?php
                                foreach ($listKMbyLoaiKH as $khuyenMai) {
                                ?>
                                    <option value="<?= $khuyenMai['tenKM'] ?>"><?= $khuyenMai['moTa'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        <?php

                        }
                        ?>

                    </div>
                    <?php $total = $total * 1000 ?>
                    <p>Chiết khấu:<span id="discount">0đ</span></p>
                    <p>Hóa đơn tạm tính: <span id="totalPrice" data-value="<?php echo $total ?>"><?= number_format($total, 0, '', ',') ?></span>VND</p>                    
                    <p>Tổng thanh toán: <span id="total-after-calculating-discounts"><?= number_format($total, 0, '', ',') ?></span>VND</p>
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
                     <!-- Nút VN Pay -->
                     <button id="thanhtoan">VN Pay</button>
                    <!-- Modal Popup -->
                    <div id="qrcode" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span> <!-- Nút đóng modal -->
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
        const confirmationMessage = 'Xác nhận thanh toán thành công với số tiền ' + total_after_calculating_discounts + ' VND.';
        const url = window.location.origin + '/quanLyQuanCom/controler/xuLyTinhTrangHoaDon.php';
        const url_redirect = window.location.origin + '/quanLyQuanCom/view/NHANVIEN/Quanlidonhang.php';
        const codeOrder = document.getElementById('codeOrder').innerText;
        const isConfirmed = confirm(confirmationMessage);
        if (isConfirmed) {
        // Đóng modal
        document.getElementById('qrcode').style.display = 'none';
        $.ajax({
            url: url,  // Thay đổi thành URL của bạn
            method: 'POST',
            dataType :'json',
            data: {
                codeOrder: codeOrder,
            },
            success: function(response) {
                console.log('Thanh toán thành công:', response);
                // Xử lý thêm sau khi thanh toán thành công
                if(response.status === 'success'){
                    window.location.href = url_redirect;
                }
            },
            error: function(error) {
                console.error('Lỗi khi thanh toán:', error);
            }
        });
        }
        return isConfirmed;
    }
    // Hiển thị modal khi nhấn nút "VN Pay"
    document.getElementById('thanhtoan').onclick = function() {
        document.getElementById('qrcode').style.display = 'block';
    }
    // Đóng modal khi nhấn nút "X"
    document.getElementsByClassName('close')[0].onclick = function() {
        document.getElementById('qrcode').style.display = 'none';
    }
    // Đảm bảo khi người dùng nhấn ra ngoài modal, nó sẽ đóng
    window.onclick = function(event) {
        var modal = document.getElementById('qrcode');
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
</script>

</html>