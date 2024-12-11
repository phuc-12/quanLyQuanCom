<?php
include ("../../model/chucnanghaucan.php");
$p = new tmdt();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theo dõi đơn hàng</title>
    <link rel="stylesheet" type="text/css" href="../../css/haucan_css/style.css">
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../js/dateTime.js" defer></script> 
</head>
<body>
<header>
        <div class="container-fluid p-0">
            <div id="ql_header">
                <div class="logo" style="padding: 0; border-radius: 100px;">
                    <a href="../../index.php"><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
                </div>

                <div class="nav-item dropdown">
                    <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" style="float:right; margin-top: 20px; padding: 0; margin-right:70px; ">👤</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="ThongtinNhanVien.php?id=8">Thông Tin Cá Nhân</a></li>
                        <li><a class="dropdown-item" href="CN_thongtin.php?id=8">Cập Nhật Thông Tin</a></li>
                        <li><a class="dropdown-item" href="../../index.php">Đăng Xuất</a></li>
                    </ul>
                </div>
<!--                 
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" style="float:right; margin-top: 20px; padding: 0; margin-right:70px;">👤</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../NHANVIEN/ThongtinNhanVien.php?id=<?php echo $layid ?>">Thông Tin Cá Nhân</a></li>
                        <li><a class="dropdown-item" href="../NHANVIEN/CN_thongtin.php?id=<?php echo $layid ?>">Cập Nhật Thông Tin</a></li>
                        <li><a class="dropdown-item" href="../../index.php">Đăng Xuất</a></li>
                    </ul>
                </div> -->

                <div class="date" style="float:right; margin-right: 100px; margin: 20px;"><span>📅</span><span id="currentDate"></span></div>
                    
            </div>
        </div>
    </header>
    <div id="content">
            <div class="container">
                <div class="header-row">
                    <h2>DANH SÁCH ĐƠN HÀNG</h2>
                    
                </div>
                
                <?php
                    $p->xemdanhsachdonhang("select * from hoadon group by maHD order by trangThaiGH")
                ?>
            </div>
        </div>
    </div>
</body>