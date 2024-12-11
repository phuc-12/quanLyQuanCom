<?php
    include_once("../../model/chucnangnhanvien.php");
    $p=new tmdt();
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
<?php
        $layid = isset($_GET['id']) ? $_GET['id'] : null;

        // Nếu $layid vẫn chưa được gán, thông báo lỗi và dừng chương trình
        if (empty($layid)) {
            die('Không tìm thấy mã hóa đơn. Vui lòng kiểm tra lại.');
        }
        $layThongTinDonHang = $p->laydanhsach("
        SELECT 
            hd.maHD, 
            nv.hoTen AS tenNhanVien, 
            n.tenMA, 
            t.soLuong, 
            n.donViTinh, 
            n.donGia
        FROM hoadon hd
        JOIN chitiethoadon t ON hd.maHD = t.maHD
        JOIN monan n ON t.maMA = n.maMA
        JOIN nhanvien nv ON t.maNV = nv.maNV
        WHERE hd.maHD = '$layid'
        ");
        $layid = $_REQUEST['id'];
        $laysohd = $p->laycot("SELECT maHD FROM hoadon WHERE maHD = '$layid' LIMIT 1");
        $laytennv=$p->laycot("select n.hoTen from nhanvien n join chitiethoadon t on n.maNV = t.maNV where maHD = '$layid' limit 1");

        $laymanv=$p->laycot("select maNV from chitiethoadon where maHD = '$layid' limit 1");

        $laytrangthai = $p->laycot("SELECT trangThai FROM hoadon WHERE maHD = '$layid' LIMIT 1");
        // $laytenkh=$p->laycot("select n.hoTen from khachhang n join chitiethoadon t on n.maKH = t.maKH where maHD = '$layid' limit 1");
        $layngaythang = $p->laycot("SELECT ngayThang FROM hoadon WHERE maHD = '$layid' LIMIT 1");
        // $laymaloaikh=$p->laycot("select n.maLoaiKH from khachhang n join hoadon t on n.maKH = t.maKH where maHD = '$layid' limit 1");


    ?>
<div class="container-fluid p-0">
    <div class="header">
        <div class="logo" style="padding: 0; border-radius: 100px;">
            <a href="../../index.php"><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
        </div>
        <h1><a href="NV_quanli.php?id=<?php echo $laymanv;?>">Trang nhân viên</a></h1>
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
            <center><h1>Chi tiết đơn hàng</h1></center>
            <div class="inform">
                
                <p>Số hóa đơn: <?php echo $laysohd; ?></p>
                <p>Ngày: <?php echo $layngaythang; ?></p>

                <p>Nhân viên: <?php echo $laytennv; ?></p>

                <p>Trạng thái: <?php 
                    switch($laytrangthai)
                        {
                            case 2:
                                {
                                    echo 'Chưa thanh toán';
                                    break;
                                }
                            case 1:
                                {
                                    echo 'Đã thanh toán';
                                    break;
                                }
                        } ?></p>
                <!-- <p>Thông tin khách hàng: <?php echo" $laytenkh"; ?></p> -->
               
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
                    //
                    error_reporting(0);
                    $stt = 1;
                    $tongTien = 0; 
            
                    foreach ($layThongTinDonHang as $dong) {
                        $thanhTien = $dong['soLuong'] * $dong['donGia'] * 1000; // Thành tiền
                        $dongia = $dong['donGia'] * 1000;
                        $tongTien += $thanhTien;
                        echo "<tr>";
                        echo "<td>{$stt}</td>";
                        echo "<td>{$dong['tenMA']}</td>";
                        echo "<td>{$dong['soLuong']}</td>";
                        echo "<td>{$dong['donViTinh']}</td>";
                        echo "<td>" . number_format($dongia, 0, ',', '.') . " VNĐ</td>";
                        echo "<td>" . number_format($thanhTien, 0, ',', '.') . " VNĐ</td>";
                        echo "</tr>";
            
                        $stt++;
                    }
                            // $chietKhau = 0;
                            // switch ($laymaloaikh) {
                            //     case 1:
                            //         $chietKhau = 0.10; // 10% chiết khấu
                            //         break;
                            //     case 2:
                            //         $chietKhau = 0.20; // 20% chiết khấu
                            //         break;
                            //     case 3:
                            //         $chietKhau = 0.30; // 30% chiết khấu
                            //         break;
                            //     default:
                            //         $chietKhau = 0; // Không có chiết khấu nếu không thuộc loại khách hàng hợp lệ
                            // }
                            // $tienChietKhau = $tongTien * $chietKhau; // Tổng tiền cần tính chiết khấu
                            // $tongTienSauCK = $tongTien - $tienChietKhau; 
                    ?>
                </tbody>
            </table>

            <div class="summary">
                <p><strong>Tổng cộng:</strong> <?= number_format($tongTien, 0, ',', '.') ?> VNĐ</p>
                <!-- <p><strong>Chiết khấu:</strong> <?= number_format($tienChietKhau, 0, ',', '.') ?> VNĐ</p>
                <p><strong>Thanh toán:</strong> <?= number_format($tongTienSauCK, 0, ',', '.') ?> VNĐ</p>  -->
            </div>
        </div>
    </div>
</div>

</body>
</html> 

