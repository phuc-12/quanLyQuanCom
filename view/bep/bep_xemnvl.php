<?php
include ("../../model/chucnangbep.php");
$p = new bep();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem nguyên vật liệu</title>
    <link rel="stylesheet" type="text/css" href="../../css/nvbep_css/danhsachnvl.css">
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../js/dateTime.js" defer></script> 
</head>
<body>
<?php
$layid=$_REQUEST['id'];
$laymaNVL= $p->laycot("select maNVL from nguyenlieu where maNVL='$layid'");
$laytenNVL= $p->laycot("select tenNVL from nguyenlieu where maNVL='$layid'");
$layslTon= $p->laycot("select slTon from nguyenlieu where maNVL='$layid'");
$laytrangThai= $p->laycot("select trangThai from nguyenlieu where maNVL='$layid'");
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
                <div class="menu-item" onclick="window.location.href='bep_trangdonhang.php';">Xem hóa đơn</div>
                <div class="menu-item active" onclick="window.location.href='bep_qlynvl.php';">Quản lý nguyên vật liệu</div>
            </div>
        </div>

        <div id="content">
            <button class="back-button" onclick="window.location.href='bep_qlynvl.php';">◀ <a href="bep_qlynvl.php" style="font-size: 16px; color: black; text-decoration: none;"> Danh sách nguyên vật liệu</a></button>
            <div class="container-xem">
                <div class="header-row-xem">
                    <h2>THÔNG TIN CHI TIẾT NGUYÊN VẬT LIỆU</h2>
                </div>
                <form class="detail-form">
                    <label>Mã nguyên vật liệu:</label>
                    <input type="text" value="<?php echo $laymaNVL;?>" readonly>

                    <label>Tên nguyên vật liệu:</label>
                    <input type="text" value="<?php echo $laytenNVL;?>" readonly>

                    <label>Số lượng:</label>
                    <input type="text" value="<?php echo $layslTon;?>" readonly>

                    <label>Tình trạng:</label>
                    <input type="text" value="<?php if ($laytrangThai == 0) {
                                                        echo "Hết NVL";
                                                    } else {
                                                        echo "Còn hàng";
                                                    }?>" readonly>
                    <label>Ngày nhập:</label>
                    <input type="text" value="01/01/2024" readonly>

                    <label>Ngày hết hạn:</label>
                    <input type="text" value="01/07/2024" readonly>
                </form>
            </div>
        </div>
    </div>
</body>