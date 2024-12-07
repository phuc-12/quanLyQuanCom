<?php
include ("../../model/chucnangbep.php");
$p = new tmdt();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết hóa đơn</title>
    <link rel="stylesheet" type="text/css" href="../../css/nvbep_css/danhsachnvl.css">
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../js/dateTime.js" defer></script> 
</head>
<body>
<?php
$layid=$_REQUEST['id'];
$layngayNhapDon=$p->laycot("select ngayThang from hoadon where maHD='$layid'");
?>
    <header>
        <div class="container-fluid p-0">
            <div id="ql_header">
                <div class="logo" style="padding: 0; border-radius: 100px;">
                    <a href="../../index.php"><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
                </div>
                
                <!-- <div class="nav-item dropdown">
                    <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" style="float:right; margin-top: 20px; padding: 0; margin-right:70px;">👤</a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../NHANVIEN/ThongtinNhanVien.php">Thông Tin Cá Nhân</a></li>
                        <li><a class="dropdown-item" href="../NHANVIEN/CN_thongtin.php">Cập Nhật Thông Tin</a></li>
                        <li><a class="dropdown-item" href="../../index.php">Đăng Xuất</a></li>
                    </ul>
                </div> -->

                <div class="date" style="float:right; margin-right: 100px; margin: 20px;"><span>📅</span><span id="currentDate"></span></div>
                    
            </div>
        </div>
    </header>
    <div class="trangquanly">
        <div class="containerr">
            <div class="sidebar">
                <div class="menu-item " onclick="window.location.href='bep_trangchu.php';">Trang tổng quan</div>
                <div class="menu-item active" onclick="window.location.href='bep_trangdonhang.php';">Xem hóa đơn</div>
                <div class="menu-item " onclick="window.location.href='bep_qlynvl.php';">Quản lý nguyên vật liệu</div>
            </div>
        </div>
        <div id="content">
            <button class="back-button">◀ <a href="bep_trangdonhang.php" style="font-size: 16px; color: black; text-decoration: none;">Danh sách hóa đơn</a></button>
            <div class="container-xem">
                <div class="header-row-xem">
                    <h2>THÔNG TIN CHI TIẾT HÓA ĐƠN</h2>
                </div>
                <form class="detail-form">
                <label for="tenkh">Mã đơn hàng</label>
                <input type="text" id="madh" name="madh" value="<?php echo $layid;?>">

                <label for="sdt">Thời gian đặt hàng</label>
                <input type="text" id="thoigian" name="thoigian" value="<?php echo $layngayNhapDon;?>">

                <label>Danh sách món ăn:</label>
                <div class="food-list">
                    <!-- <div class="food-item">
                        <div class="soluong"><</div>
                    </div> -->
                    <?php 
                        $p->xemdanhsachmonan_chitiethoadon("select * from chitiethoadon where maHD='$layid'")
                    ?>
                <!-- <button type="submit" class="add-button-1" name="nut" id="nut" value="Thêm sản phẩm" onclick="return confirm(\'Bạn có chắc chắn muốn xóa sản phẩm này không?\')>THÊM</button>  -->
                </div>  
            </div>
        </div>
    </div>
</body>