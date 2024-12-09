<?php
include ("../../model/chucnanghaucan.php");
$p = new tmdt();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuẩn bị đơn hàng</title>
    <link rel="stylesheet" type="text/css" href="../../css/haucan_css/style.css">
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../js/dateTime.js" defer></script> 
</head>
<body>
<?php
$layid=$_REQUEST['id'];
$laymaMA= $p->laycot("select maMA from chitiethoadon where maHD='$layid'");
$maKH=$p->laycot("SELECT maKH FROM hoadon WHERE maHD='$layid' LIMIT 1");
$layhoTen= $p->laycot("select hoTen from khachhang where maKH=  '$maKH'");
$sodienthoai=$p->laycot("select tknd.SDT FROM taikhoannguoidung tknd JOIN khachhang kh ON tknd.idNguoiDung = kh.idNguoiDung
                                        JOIN hoadon hd ON kh.maKH = hd.maKH
                                        WHERE hd.maKH = '$maKH';");
$diachi=$p->laycot("select tknd.diachi FROM taikhoannguoidung tknd JOIN khachhang kh ON tknd.idNguoiDung = kh.idNguoiDung
                                        JOIN hoadon hd ON kh.maKH = hd.maKH
                                        WHERE hd.maKH = '$maKH';");
$laytongtien=$p->laycot("SELECT SUM( cthd.soLuong * ma.donGia )FROM chitiethoadon cthd join monan ma on cthd.maMA=ma.maMA WHERE maHD = '$layid' GROUP BY maHD;");
$laytrangThaiGH= $p->laycot("select trangThaiGH from hoadon where maHD='$layid'");
$laytrangThai= $p->laycot("select trangThai from hoadon where maHD='$layid'");
$layimg= $p->laycot("select img from hoadon where maHD='$layid'");
?>
    <header>
        <div class="container-fluid p-0">
            <div id="ql_header">
                <div class="logo" style="padding: 0; border-radius: 100px;">
                    <a href="../../index.php"><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
                </div>

                <div class="date" style="float:right; margin-right: 100px; margin: 20px;"><span>📅</span><span id="currentDate"></span></div>
                    
            </div>
        </div>
    </header>
    <div id="content">
        <button class="back-button" onclick="window.location.href='haucan_danhsachdonhang.php';">◀ <a href="haucan_danhsachdonhang.php" style="font-size: 16px; color: black; text-decoration: none;">Danh sách đơn hàng</a></button>
        <div class="container-xem">
            <div class="header-row-xem">
                <h2>THÔNG TIN CHI TIẾT ĐƠN HÀNG</h2>
            </div>
            <form class="detail-form">
                <label for="tenkh">Mã đơn hàng:</label>
                <input type="text" id="madh" name="madh" value="<?php echo $layid;?>">

                <label for="tenkh">Tên khách hàng:</label>
                <input type="text" id="tenkh" name="tenkh" value="<?php echo $layhoTen;?>">

                <label for="sdt">Số điện thoại:</label>
                <input type="text" id="sdt" name="sdt" value="<?php echo $sodienthoai ?>">

                <label for="soluong">Địa chỉ:</label>
                <input type="text" id="diachi" name="diachi" value="<?php echo $diachi;?>">

                <label>Danh sách món ăn:</label>
                <div class="food-list">
                    <?php
                        $p->xemchitietmonan_donhang("SELECT *
                                                            FROM chitiethoadon
                                                            WHERE maHD = '$layid'")
                    ?>
                </div>

                <label for="soluong">Tổng tiền</label>
                <input type="text" id="tongtien" name="tongtien" value="<?php echo $laytongtien;?>">

                <label for="soluong">Trạng thái đơn hàng</label>
                <input type="text" id="trangthai" name="trangthai" value="<?php if ($laytrangThai == 0) {
                                                        echo "Chưa thanh toán";
                                                    } else {
                                                        echo "Đã thanh toán";
                                                    }?>">

                <label for="soluong">Trạng thái giao hàng</label>
                <input type="text" id="trangthaiGH" name="trangthai" value="<?php if ($laytrangThaiGH == 0) {
                                                        echo "Chưa giao";
                                                    } else if($laytrangThaiGH ==1) {
                                                        echo "Đang giao";
                                                    }else if($laytrangThaiGH ==2) {
                                                        echo "Đã hoàn thành";
                                                    }else{
                                                        echo "Đơn hàng đã hủy";
                                                    }?>">
                <label for="soluong">Hình ảnh giao hàng</label>
                <img src="../../img/giaohang/<?php echo "$layimg" ?>" alt="" style="width:350px">
        </div>
    </div>

</body>
 