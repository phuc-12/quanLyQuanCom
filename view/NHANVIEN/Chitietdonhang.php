<?php
    include_once("../../model/chucnangnhanvien.php");
    $p=new tmdt();
    session_start();
    $ma_nhan_vien = $_SESSION['ma_nhan_vien'];
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
        // $layid = isset($_GET['id']) ? $_GET['id'] : null;
        $layid = $_REQUEST['id'];
        // Nếu $layid vẫn chưa được gán, thông báo lỗi và dừng chương trình
        if (empty($layid)) {
            die('Không tìm thấy mã hóa đơn. Vui lòng kiểm tra lại.');
        }
        $layThongTinDonHang = $p->laydanhsach("
        SELECT 
            hd.maHD, 
            n.tenMA, 
            t.soLuong, 
            n.donViTinh, 
            n.donGia
        FROM hoadon hd
        JOIN chitiethoadon t ON hd.maHD = t.maHD
        JOIN monan n ON t.maMA = n.maMA
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
            <div id="ql_header">
                <div class="logo" style="padding: 0; border-radius: 100px;">
                    <a href=""><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
                </div>
            <a class="trangChu" href="Quanlidonhang.php?id=<?php echo $ma_nhan_vien; ?>">
                <h4>Danh sách đơn hàng</h4>
            </a>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" style="float:right; margin-top: 20px; padding: 0; margin-right:70px; ">👤</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="ThongtinNhanVien.php?id=<?php echo $ma_nhan_vien; ?>">Thông Tin Cá Nhân</a></li>
                        <li><a class="dropdown-item" href="CN_thongtin.php?id=<?php echo $ma_nhan_vien; ?>">Cập Nhật Thông Tin</a></li>
                        <li><a class="dropdown-item" href="../../index.php">Đăng Xuất</a></li>
                    </ul>
                </div>
                <div class="date" style="float:right; margin-right: 100px; margin: 20px;"><span>📅</span><span id="currentDate"></span></div>
                    
            </div>
    <div class="container" style="width:100%;">
        <div class="content">
            <center><h1>Chi tiết đơn hàng</h1></center>
            <div class="inform">
                
                <p>Số hóa đơn: <?php echo $laysohd; ?></p>
                <p>Ngày: <?php echo $layngaythang; ?></p>

                <p>Nhân viên: 
                    <?php 
                        if($laytennv)
                        {
                            echo $laytennv; 
                        } 
                        else
                        {
                            echo 'Quản Lý';
                        }
                    ?></p>

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
                        $thanhTien = $dong['soLuong'] * $dong['donGia'] * 1000; // Thành tiề<n></n>
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

                    ?>
                </tbody>
            </table>

            <div class="summary">
                <p><strong>Tổng cộng:</strong> <?= number_format($tongTien, 0, ',', '.') ?> VNĐ</p>
            </div>
        </div>
    </div>
</div>

</body>
</html> 

