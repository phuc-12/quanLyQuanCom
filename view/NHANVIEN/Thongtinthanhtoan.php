<?php
    include_once("../../model/chucnangnhanvien.php");
    $p = new tmdt();

    session_start();
    $ma_nhan_vien = $_SESSION['ma_nhan_vien'];

    // xử lý thông tin 
    include("../../controler/cThanhToan.php");
    if (isset($_GET['orderId'])) {
                $orderId = $_GET['orderId'];}
    $p = new cThanhToan();
        // lấy thông tin 
                    $dsCTHD = $p->getCTHDbyMaHD($orderId);
                    $maKH = $p->getMaKHbyOrderId($orderId);
                    $loaiKH = $p->getLoaiKH($maKH);
                    $dsKMbyloaiKH = $p->getlistKMbyLoaiKH($loaiKH);
                    $result = $p->getKhachHang($maKH);
                    $order = $p->getHoaDonByOrderId($orderId);
                    foreach ($order as $o) {
                        $maHD = $o['maHD'];
                        $ngaythang = $o['ngayThang'];
                        $date = new DateTime($ngaythang);
                        $formattedDate = 'Ngày' . ' ' . $date->format('j') . ' tháng ' . $date->format('n') . ' năm ' . $date->format('Y');
                    }
                    // có kết quả
                    if ($result) {
                        foreach ($result as $r) {
                            $name = $r["hoTen"];
                            $phone = $r["sdt"];
                            $address = $r["diaChi"];
                        }
                    }else {
                        $result = "Không tìm thấy thông tin khách hàng" ;
                    }


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
            <div id="ql_header">
                <div class="logo" style="padding: 0; border-radius: 100px;">
                    <a href=""><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
              </div>
              <h1><a href="Quanlidonhang.php">Trang nhân viên</a></h1>
              <div class="date" style="float:right; margin-right: 50px; margin-top: -30px; "><span>📅</span><span id="currentDate"></span></div> 
            </div>
           
        </div>
        <div class="container" style="width:100%;">
            <div class="content-thanhtoan">
                <center>
                    <h2 id="ten">Chí Phèo Quán - Gò Vấp</h2>
                    <img src="../../img/ChiPheologo.png" alt="" style="width: 150px; height: 150px; border-radius: 100px;">
                    <br>
                    <h3 id="ten">Phiếu thanh toán</h3>
                    <p style="    font-size: 19px;
    color:#822c2c;">Number_invoice : <span id="codeOrder"><?php echo $maHD ?></span></p>
                    <?php ?>
                </center>
                <p id="in4"><?php echo $formattedDate ?></p>
                <p id="in4">Customer : <?php echo $name ?></p>
                <p id="in4">Phone : <?php echo $phone ?></p>
                <p id="in4">Address : <?php echo $address ?></p>

                <h5 id="dc">Quán cơm Chí Phèo - 12 Nguyễn Văn Bảo, Phường 4, Gò Vấp - Cám ơn và hẹn gặp lại </h4>
                
                <div class="summary">
                    <div id="vc">
                        <label for="loaiKH">Voucher</label>
                        <?php
                        if (!empty($dsKMbyloaiKH) && is_array($dsKMbyloaiKH)) {
                        ?>
                            <select id="khuyenMaiKH" name="khuyenMaikH">
                                <option value="" hidden></option>
                                <?php
                                foreach ($dsKMbyloaiKH as $khuyenMai) {
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
                </div>

                <table class="pay-table">
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
                            if (!empty($dsCTHD) && is_array($dsCTHD)) {
                            foreach ($dsCTHD as $item) {
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
                        <tr></tr>
                    </tbody>
                </table>
                <br>
                <?php $total = $total * 1000 ?>
                <p id="in4">Chiết khấu : <span id="discount">0đ</span></p>
                <p id="in4">Hóa đơn tạm tính : <span id="totalPrice" data-value="<?php echo $total ?>"><?= number_format($total, 0, '', '.') ?></span> VND</p>
                <p style=" font-size: 19px;color: rgb(172, 8, 8);">Tổng thanh toán &nbsp; : <span id="total-after-calculating-discounts"><?= number_format($total, 0, '', '.') ?></span> VND</p>
                <p></p>
                <button class="button thanhtoan"><a href="#" onclick="return confirmPayment(event)"><b>Tiền mặt</b></a></button>
                    <?php 
                        foreach ($result as $r) {
                        ?>
                        <p class="accumulated-points" hidden><?= $r['diemTichLuy']?></p>
                        <p class="code-customer" hidden><?= $maKH?></p>
                        <?php
                        }
                    ?>
                     <!-- Nút VN Pay -->
                    <button id="thanhtoan"><b>VN Pay</b></button>
                    <!-- Modal Popup -->
                    <div id="qrcode" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span> <!-- Nút đóng modal -->
                            <div class="wp-center-qr">
                                <img id="code" src="../../img/qrcode.jpg" alt="QR Code" style="margin-bottom: 10px;">
                                <button id="done" class="thanhtoanchung" onclick="return confirmPayment(event)">
                                    <a href="../NHANVIEN/Quanlidonhang.php?id=<?php echo $ma_nhan_vien; ?>" >Hoàn tất</a>
                                </button>
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
        // const url_redirect = window.location.origin + '/quanLyQuanCom/view/NHANVIEN/Quanlidonhang.php';
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
                const employee = <?php echo $ma_nhan_vien; ?>
                // Xử lý thêm sau khi thanh toán thành công
                if(response.status === 'success'){
                    
                    window.location.href = `Quanlidonhang.php?id=${employee}`;
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