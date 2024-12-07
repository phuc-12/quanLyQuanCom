<?php
    include_once("../../model/chucnangnhanvien.php");
    $p=new tmdt();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin thanh toán</title>
    <link rel="stylesheet" href="../../CSS/nhanVien.css">
    <link rel="stylesheet" href="../../css/thongtin.css">
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../js/dateTime.js" defer></script> 
    <script src="../../js/thongtin.js" defer></script> 
    <script src="../../js/qrthanhtoan.js" defer></script> 
    <style>
        .header h1 {
        margin-top: -40px;
        margin-left: 100px;
        }
    </style>
</head>
<body>
<?php
// include("controller/cThanhToan.php");
// $p = new cThanhToan();

// if ($tblSP -> num_rows == 0){ // Sử dụng phương thức num_rows để kiểm tra số hàng trả về
//     echo '0 results';
// }
// else {
//     echo "<table>";
//     echo "<tr>";
//     while($r = $tblSP->Fetch_assoc()){
//         echo "<td class = 'td'>";
//         echo "Tên Khách Hàng".$r["hoTen"]."<br>";
//         echo "Số Điện Thoại".$r["SĐT"]."<br>";
//         echo "Địa Chỉ".$r["diaChi"]."<br>";
//         }
//     echo "</tr>";
//     echo "</table>";
// }
?>
<div class="container-fluid p-0">
    <!-- Header -->
    <div class="header">
        <div class="logo" style="padding: 0; border-radius: 100px;">
            <a href="../../index.php"><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
        </div>
        <h1><a href="NV_quanli.php">Trang nhân viên</a></h1>
        <div class="date" style="float:right; margin-right: 50px; margin-top: -20px; "><span>📅</span><span id="currentDate"></span></div>
        <div class="menu-icon" style="float:right;" onclick="toggleSidebar()">👤</div> 
    </div>
    <div class="sidebar" id="sidebar">
            <button class="menu-item"><a href="ThongtinNhanVien.php?id=<?php echo $layid ?>">Thông tin cá nhân</a></button>
            <button class="menu-item"><a href="CN_thongtin.php?id=<?php echo $layid ?>">Cập nhật thông tin cá nhân</a></button>
            <button class="menu-item"><a href="../../index.php">Đăng xuất</a></button>
    </div>

    <div class="container" style="width:100%;">
        <div class="content">
            <center><h1>Thông tin thanh toán</h1></center>
            <!-- <div class="inform" style="padding-left:100px;">
                <p>Tên khách hàng: Nguyễn Văn A</p>
                <p>Số điện thoại: 0949198155</p>
                <p>Địa chỉ: 20/3 Dương Quảng Hàm, Phường 5, Gò Vấp</p>
            <h3 id="dc">Quán cơm Chí Phèo - 12 Nguyễn Văn Bảo, Phường 4, Gò Vấp</h3>
            <p>Số hóa đơn: 001</p>
            <p>Ngày: 21 tháng 10 năm 2024</p>
            </div> -->
            <?php
                include("controller/cThanhToan.php");
                $p = new cThanhToan();

                if ($tblSP -> num_rows == 0){ // Sử dụng phương thức num_rows để kiểm tra số hàng trả về
                    echo '0 results';
                }
                else {
                    echo "<table>";
                    echo "<tr>";
                    while($r = $tblSP->Fetch_assoc()){
                        echo "<td class = 'td'>";
                        echo "Tên Khách Hàng".$r["hoTen"]."<br>";
                        echo "Số Điện Thoại".$r["SĐT"]."<br>";
                        echo "Địa Chỉ".$r["diaChi"]."<br>";
                        }
                    echo "</tr>";
                    echo "</table>";
                }
                ?>
            <h3 id="dc">Quán cơm Chí Phèo - 12 Nguyễn Văn Bảo, Phường 4, Gò Vấp</h3>
            <p>Số hóa đơn: 001</p>
            <p>Ngày: 21 tháng 10 năm 2024</p>
            <table class="order-table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên món</th>
                        <th>Số lượng</th>
                        <th>Đơn vị tính</th>
                        <th>Đơn giá</th>
                        <th>Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dữ liệu mẫu -->
                    <tr>
                        <td>1</td>
                        <td>Cơm hải sản</td>
                        <td>1</td>
                        <td>Phần</td>
                        <td>45,000</td>
                        <td>45,000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Canh rong biển</td>
                        <td>1</td>
                        <td>Phần</td>
                        <td>35,000</td>
                        <td>35,000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Cà phê sữa</td>
                        <td>2</td>
                        <td>Ly</td>
                        <td>20,000</td>
                        <td>40,000</td>
                    </tr>
                    <!-- Thêm ..-->
                </tbody>
            </table>
            
            <div class="summary">
            <h4 id="vc">Voucher</h3>
                <p>Tổng cộng: 40,000</p>
                <p>Chiết khấu: 0</p>
                <p>Thanh toán: 40,000</p>
            <p></p>
                <button class="button thanhtoan">Tiền Mặt</button>
                <button class="button thanhtoan">VN Pay</button>
                <button class="button thanhtoan"><a href="" onclick="return confirm('Xác nhận thanh toán thành công .!');">Tiền mặt</a></button>
                <button id="thanhtoan">VN Pay</button>
                <div id="qrcode">
                    <img id="code" src="../../img/qrcode.jpg" alt="">
                    <button id="done"><a href="" onclick="return confirm('Xác nhận thanh toán thành công .!');">Hoàn tất</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
