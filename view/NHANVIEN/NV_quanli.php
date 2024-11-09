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
</head>

<body>
    <div class="container-fluid p-0">
        <div id="ql_header" style='display: flex'>
            <div class="logo">
                <p>logo</p>
            </div>
            <a class="trangChu" href="../../index.php" style =' flex: 3; margin-left: 20px'>
                <h4>Trang Chủ</h4>
            </a>
                    <div class="right-section" >
                        <div class="date" ><span>📅</span><span id="currentDate"></span></div>
                        <div class="user-icon"><a href="ThongtinNhanVien.php" style='text-decoration: none'>👤</a></div>
                    </div> 
               
        </div>

        <div id="content">
            <div class="nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Quanlidonhang.php">
                            <i class="fa fa-spoon"></i>
                                Quản lý đơn hàng
                        </a>
                    <li class="nav-item">
                        <a class="nav-link" href="NV_theodoidonhang.php">
                            <i class="fa fa-shopping-cart"></i>
                            Theo dõi đơn hàng
                        </a>
                    </li>
                </ul>
            </div>

            <div class="section">

                <div class="mger_option">
                    <a class="option mger_food" href="Quanlidonhang.php">
                        <i class="fa fa-spoon" style="font-size: 60px;"></i><br>
                        <p style="font-size: 20px; margin-top: 10px;">QUẢN LÝ ĐƠN HÀNG</p>
                    </a>
                    <a class="option mger_order" href="NV_theodoidonhang.php">
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
