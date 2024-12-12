<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NVQuản Lý</title>
    <link rel="stylesheet" type="text/css" href="../../css/admin_css/admin.css">   
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../js/dateTime.js" defer></script> 
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/thongtin.css">
    <script src="../../js/thongtin.js" defer></script> 

</head>

<body>
    <?php
    $layid = $_REQUEST['id'];
    ?>
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
                <div class="date" style="float:right; margin-right: 100px; margin: 20px;"><span>📅</span><span id="currentDate"></span></div>
                    
            </div>
        <div class="sidebar" id="sidebar">
            <button class="menu-item"><a href="ThongtinNhanVien.php?id=<?php echo $layid ?>">Thông tin cá nhân</a></button>
            <button class="menu-item"><a href="CN_thongtin.php?id=<?php echo $layid ?>">Cập nhật thông tin cá nhân</a></button>
            <button class="menu-item"><a href="../../index.php">Đăng xuất</a></button>
        </div>

        <div id="content">
            <div class="nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Quanlidonhang.php?id=<?php echo $layid ?>">
                            <i class="fa fa-spoon"></i>
                                Quản lý đơn hàng
                        </a>
                    <li class="nav-item">
                        <a class="nav-link" href="NV_theodoidonhang.php?id=<?php echo $layid ?>">
                            <i class="fa fa-shopping-cart"></i>
                            Theo dõi đơn hàng
                        </a>
                    </li>
                </ul>
            </div>

            <div class="section">

                <div class="mger_option">
                    <a class="option mger_food" href="Quanlidonhang.php?id=<?php echo $layid ?>">
                        <i class="fa fa-spoon" style="font-size: 60px;"></i><br>
                        <p style="font-size: 20px; margin-top: 10px;">QUẢN LÝ ĐƠN HÀNG</p>
                    </a>
                    <a class="option mger_order" href="NV_theodoidonhang.php?id=<?php echo $layid ?>">
                        <i class="fa fa-shopping-cart" style="font-size: 60px;"></i><br>
                        <p style="font-size: 20px; margin-top: 10px;">THEO DÕI ĐƠN HÀNG</p>
                    </a>
                </div>
            </div>

            <div>

            </div>
        </div>
    </div>
</body>
</html>
