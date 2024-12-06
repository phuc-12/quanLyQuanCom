<?php
include ("../../model/chucnangbep.php");
$p = new tmdt();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang tổng quá</title>
    <link rel="stylesheet" type="text/css" href="../../css/nvbep_css/bep_trangchu.css">
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../js/dateTime.js" defer></script> 
    </style>
</head>
<body>
        <div class="container-fluid p-0">
            <div id="ql_header">
                <div class="logo" style="padding: 0; border-radius: 100px;">
                    <a href="../../index.php"><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
                </div>

                <a class="trangChu" href="../../index.php">
                    <p>Trang Chủ</p>
                </a>

                <div class="nav-item dropdown">
                    <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" style="float:right; margin-top: 20px; padding: 0; margin-right:70px; ">👤</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Thông Tin Cá Nhân</a></li>
                        <li><a class="dropdown-item" href="#">Cập Nhật Thông Tin</a></li>
                        <li><a class="dropdown-item" href="../../index.php">Đăng Xuất</a></li>
                    </ul>
                </div>

                <div class="date" style="float:right; margin-right: 100px; margin: 20px;"><span>📅</span><span id="currentDate"></span></div>
                    
            </div>
        </div>
        
        <div class="container">
            <div class="sidebar">
                <div class="menu-item active">Trang tổng quan</div>
                <div class="menu-item" onclick="window.location.href='bep_trangdonhang.php';">Xem hóa đơn</div>
                <div class="menu-item" onclick="window.location.href='bep_qlynvl.php';">Quản lý nguyên vật liệu</div>
            </div>

            <div class="content">
                <div class="overview">
                    <h2>TỔNG QUAN</h2>
                    <div class="card-container">
                        <div class="cardd" onclick="window.location.href='bep_trangdonhang.php';">
                           <div class="soluong">
                                <p>
                                <?php
                                    $tonghoadon=$p->laycot("SELECT COUNT( DISTINCT maHD )FROM chitiethoadon");
                                    echo $tonghoadon;
                                ?>
                                </p>
                                <img src="../../img/invoice.png" alt="Invoice Icon">
                           </div>
                           <div class="title">
                                <p>Hóa đơn</p>
                                <img src="../../img/right-arrow.png" alt="Right arow Icon">
                           </div>
                            
                        </div>
                        <div class="cardd" onclick="window.location.href='bep_qlynvl.php';">
                            <div class="soluong">
                                <p>
                                <?php
                                    $tongnvl=$p->laycot("SELECT COUNT( DISTINCT maNVL )FROM nguyenlieu");
                                    echo $tongnvl;
                                ?>
                                </p>
                                <img src="../../img/processing.png" alt="Materials Icon">
                            </div>
                            <div class="title">
                                <p>Nguyên vật liệu</p>
                                <img src="../../img/right-arrow.png" alt="Right arow Icon">
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>