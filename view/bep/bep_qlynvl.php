<?php
include ("../../model/chucnangbep.php");
$p = new bep();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý nguyên vật liệu</title>
    <link rel="stylesheet" type="text/css" href="../../css/nvbep_css/danhsachnvl.css">
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
        <form id="form1" name="form1" method="post">
            <div id="content">
                <div class="container">
                    <div class="header-row">
                        <h2>DANH SÁCH NGUYÊN VẬT LIỆU</h2>
                        
                            <div class="search-add">
                                <div class="tim">
                                    <input type="text" name="txttim" id="txttim" placeholder="Nhập tên NVL cần tìm">
                                    <input type="submit" name="submit" id="submit" value="Tìm kiếm" style="padding: 7px 10px;background-color: #FFD700;border-radius: 5px;border: none;">
                                </div>
                                <button type="button" class="add-button" onclick="window.location.href='bep_themnvl.php';">THÊM MỚI</button>
                            </div>
                    </div>
                    <?php
                        $tentim=$_REQUEST['txttim'];
                        if($_POST['submit']=="Tìm kiếm"){
                            $p->xemdanhsachnguyenvatlieu("select * from nguyenlieu where tenNVL like '%$tentim%'");
                        }else{
                            $p->xemdanhsachnguyenvatlieu("select * from nguyenlieu order by maNVL");
                        }
                    ?>
                </div>
            </div>
        </form>
    </div>
   
</body>