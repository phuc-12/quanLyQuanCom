<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý</title>
    <link rel="stylesheet" type="text/css" href="../../css/admin_css/admin.css">    
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid p-0">
        <div id="ql_header">
            <div class="logo">
                <p>logo</p>
            </div>

            <a class="trangChu" href="../../index.php">
                <h4>Trang Chủ</h4>
            </a>
        </div>

        <div id="content">
            <div class="nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php" style="background-color: #E5E5E5;">
                            <i class="fa fa-tachometer"></i>
                                Tổng quát
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="managementfood.php">
                            <i class="fa fa-spoon"></i>
                                Quản lý thực đơn
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="management_employ.php">
                            <i class="fa fa-address-card"></i>
                            Quản lý nhân viên
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="management_customer.php">
                            <i class="fa fa-address-card-o"></i>
                            Quản lý khách hàng
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="management_gift.php">
                            <i class="fa fa-gift"></i>
                            Quản lý chương trình khuyến mãi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="management_order.php">
                            <i class="fa fa-shopping-cart"></i>
                            Quản lý đơn hàng
                        </a>
                    </li>
                </ul>
            </div>

            <div class="section">
                <h3 style="margin-bottom: 20px;"><b>TỔNG QUÁT</b></h3>

                <div class="mger_option">
                    <a class="option mger_food" href="managementfood.php">
                        <i class="fa fa-spoon" style="font-size: 60px;"></i><br>
                        <p style="font-size: 20px; margin-top: 10px;">QUẢN LÝ THỰC ĐƠN</p>
                    </a>
                    <a class="option mger_employ" href="management_employ.php">
                        <i class="fa fa-address-card" style="font-size: 60px;"></i><br>
                        <p style="font-size: 20px; margin-top: 10px;">QUẢN LÝ NHÂN VIÊN</p>
                    </a>
                    <a class="option mger_customer" href="management_customer.php">
                        <i class="fa fa-address-card-o" style="font-size: 60px;"></i><br>
                        <p style="font-size: 20px; margin-top: 10px;">QUẢN LÝ KHÁCH HÀNG</p>
                    </a>
                    <a class="option mger_gift" href="management_gift.php">
                        <i class="fa fa-gift" style="font-size: 60px;"></i><br>
                        <p style="font-size: 20px; margin-top: 10px;">QUẢN LÝ CHƯƠNG TRÌNH KHUYẾN MÃI</p>
                    </a>
                    <a class="option mger_order" href="management_order.php">
                        <i class="fa fa-shopping-cart" style="font-size: 60px;"></i><br>
                        <p style="font-size: 20px; margin-top: 10px;">QUẢN LÝ ĐƠN HÀNG</p>
                    </a>
                </div>
            </div>

            <div>

            </div>
        </div>
    </div>
</body>
</html>