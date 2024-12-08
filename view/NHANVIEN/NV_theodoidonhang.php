<<<<<<< HEAD
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
    <link rel="stylesheet" href="../../css/thongtin.css">
    <script src="../../js/thongtin.js" defer></script>  
</head>
<body>
    <header>
    <div class="container-fluid p-0">
    <div class="header">
        <div class="logo" style="padding: 0; border-radius: 100px;">
                <a href="../../index.php"><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
            </div>
        <h1><a href="NV_quanli.php">Trang nhân viên</a></h1>
        <div class="date" style="float:right; margin-right: 50px; margin-top: -25px;"><span>📅</span><span id="currentDate"></span></div>
        <div class="menu-icon" style="float:right;" onclick="toggleSidebar()">👤</div> 
    </div>
        <div class="sidebar" id="sidebar">
        <button class="menu-item"><a href="ThongtinNhanVien.php">Thông tin cá nhân</a></button>
        <button class="menu-item"><a href="CN_thongtin.php">Cập nhật thông tin cá nhân</a></button>
        <button class="menu-item"><a href="../../index.php">Đăng xuất</a></button>
    </div>
    </header>
    <div id="content">
            <div class="container">
                <div class="header-row">
                    <h2>DANH SÁCH ĐƠN HÀNG</h2>
                    <div class="search-add">
                        <input type="text" placeholder="Tìm kiếm...">
                        <button class="search-button">🔍</button>
                    </div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã đơn hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Địa chỉ giao hàng</th>
                            <th>Thời gian yêu cầu giao</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>DH01</td>
                            <td>Nguyễn Thị Nga</td>
                            <td>Nguyễn Văn Bảo, Gò Vấp</td>
                            <td>20:00 05/11/2024</td>
                            <td>
                                <button class="view-button" onclick="window.location.href='../haucan/haucan_chuanbidonhang.php';">Xem chi tiết</button>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</body>
=======
<?php
include ("../../model/chucnangtheodoi_NV.php");
$p = new nhanvien();
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
    <link rel="stylesheet" href="../../css/thongtin.css">
    <script src="../../js/thongtin.js" defer></script>  
</head>
<body>
    <?php
        $layid = $_REQUEST['id'];
    ?>
    <header>
    <div class="container-fluid p-0">
    <div class="header">
        <div class="logo" style="padding: 0; border-radius: 100px;">
                <a href="../../index.php"><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
            </div>
        <h1><a href="NV_quanli.php?id=<?php echo $layid ?>">Trang nhân viên</a></h1>
        <div class="date" style="float:right; margin-right: 50px; margin-top: -25px;"><span>📅</span><span id="currentDate"></span></div>
        <div class="menu-icon" style="float:right;" onclick="toggleSidebar()">👤</div> 
    </div>
        <div class="sidebar" id="sidebar">
            <button class="menu-item"><a href="ThongtinNhanVien.php?id=<?php echo $layid ?>">Thông tin cá nhân</a></button>
            <button class="menu-item"><a href="CN_thongtin.php?id=<?php echo $layid ?>">Cập nhật thông tin cá nhân</a></button>
            <button class="menu-item"><a href="../../index.php">Đăng xuất</a></button>
    </div>
    </header>
    <div id="content">
            <div class="container">
                <div class="header-row">
                    <h2>DANH SÁCH ĐƠN HÀNG</h2>
            </div>
            <?php
                    $p->xemdanhsachdonhang("select * from hoadon group by maHD")
            ?>
                <!-- <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã đơn hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Địa chỉ giao hàng</th>
                            <th>Thời gian yêu cầu giao</th>
                            <th>Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>DH01</td>
                            <td>Nguyễn Thị Nga</td>
                            <td>Nguyễn Văn Bảo, Gò Vấp</td>
                            <td>20:00 05/11/2024</td>
                            <td> Đã giao </td>
                        </tr>
                    </tbody>
                </table> -->
            </div>
        </div>
    </div>
    </div>
</body>
>>>>>>> main
