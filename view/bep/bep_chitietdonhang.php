<?php
include ("../../model/chucnangbep.php");
$p = new bep();
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
$laymaHD= $p->laycot("select maHD from chitiethoadon where maHD='$layid'");
$laytenMA= $p->laycot("select tenMA from chitiethoadon where maHD='$layid'");
$laysoLuong= $p->laycot("select soLuong from chitiethoadon where maHD='$layid'");

?>
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
                <input type="text" id="madh" name="madh" value="<?php echo $laymaHD;?>">

                <label for="sdt">Thời gian đặt hàng</label>
                <input type="text" id="thoigian" name="thoigian" value="10:00 12/11/2024">

                <label>Danh sách món ăn:</label>
                <div class="food-list">
                    <div class="food-item">
                        <div class="soluong"><?php echo $laytenMA; ?> x<?php echo $laysoLuong;?></div>
                    </div>
                    <!-- <div class="food-item">
                        <div class="soluong">Bún thêm x1 </div>
                    </div>
                    <div class="food-item">
                        <div class="soluong">Nước ngọt x2 </div>
                    </div>                  -->
                </div>  
            </div>
        </div>
    </div>
</body>