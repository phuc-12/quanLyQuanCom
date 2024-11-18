<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý đơn hàng</title>
    <link rel="stylesheet" href="../../CSS/nhanVien.css">
    <link rel="stylesheet" href="../../css/thongtin.css">
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../js/dateTime.js" defer></script> 
    <script src="../../js/thongtin.js" defer></script> 
    <style>
        .header h1 {
    margin-top: -40px;
    margin-left: 100px;
    }
    </style>
</head>
<body>
    <div class="container-fluid p-0">
    <div class="header">
        <div class="logo" style="padding: 0; border-radius: 100px;">
                <a href="../../index.php"><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
        </div>
        <h1><a href="NV_quanli.php" style='text-decoration: none'>Trang nhân viên</a></h1>
        <div class="date" style="float:right; margin-right: 50px; margin-top: -20px; "><span>📅</span><span id="currentDate"></span></div>
        <div class="menu-icon" style="float:right;" onclick="toggleSidebar()">👤</div> 
    </div>

    <div class="sidebar" id="sidebar">
        <button class="menu-item"><a href="ThongtinNhanVien.php">Thông tin cá nhân</a></button>
        <button class="menu-item"><a href="CN_thongtin.php">Cập nhật thông tin cá nhân</a></button>
        <button class="menu-item"><a href="../../index.php">Đăng xuất</a></button>
    </div>

    <div class="container" style="width:100%;">
        <div class="content">
            <h2>Danh sách đơn hàng</h2>
            <button class="button new-order">Tạo đơn mới</button>

            <?php
                error_reporting(0);
                include_once("../../controler/cHoaDon.php");
                $p = new CHoaDon();
                $tblHD = $p->getAllHD();
                if(!$tblHD)
                {
                    echo 'Không kết nối được';
                }
                elseif($tblHD==-1)
                {
                    echo 'Chưa có dữ liệu món ăn';
                }
                else
                {
                    $dem=1;
                    echo '<table class="order-table">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã hóa đơn</th>
                                <th>Tổng tiền</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>';
                    while($r=$tblHD->fetch_assoc())
                    {	 
                        echo '<tr style="text-align: center">';
                        echo '<td><a href="?id='.$r['maHD'].'" style="text-decoration:none; color: black;">'.$dem.'</a></td>';
                        echo '<td><a href="?id='.$r['maHD'].'" style="text-decoration:none; color: black;">'.$r['maHD'].'</a></td>';
                        echo '<td><a href="?id='.$r['maHD'].'" style="text-decoration:none; color: black;">'.$r['tongTien'].'</a></td>';
                        echo '<td><a href="?id='.$r['maHD'].'" style="text-decoration:none; color: black;">'.$r['trangThai'].'</a></td>';
                        // switch($trangThai)
                        // {
                        //     case 0:
                        //         {
                        //             echo '<td><a href="?id='.$r['maHD'].'" style="text-decoration:none; color: black;">'.$r['trangThai'].'</a></td>';
                        //             break;
                        //         }
                        //     case 1:
                        //         {
                        //             echo '<td><input type="input" class="form-control" size="200" id='.$r['maHD'].' value="Đã thanh toán" name=""></td>';
                        //             break;
                        //         }
                        
                        // }
                        echo '<td>
                            <button class="button view"><a href="Chitietdonhang.php">Xem</a></button>
                            <button class="button update">Cập nhật</button>
                            <button class="button thanhtoan"><a href="Thongtinthanhtoan.php">Thanh toán</a></button> 
                        </td>';
                        echo '</tr>';
                        $dem++;
                    }
                    echo '</tbody>';
                    echo '</table>';
                }
            ?>
        </div>
    </div>
    </div>
    </div>

</body>
</html>
