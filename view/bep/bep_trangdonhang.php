<?php
include ("../../model/chucnangbep.php");
$p = new tmdt();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách hóa đơn</title>
    <link rel="stylesheet" type="text/css" href="../../css/nvbep_css/danhsachnvl.css">
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../js/dateTime.js" defer></script> 
</head>
<body>
    <?php

     $layid =$_REQUEST['id'];
    ?>
    <header>
        <div class="container-fluid p-0">
            <div id="ql_header">
                <div class="logo" style="padding: 0; border-radius: 100px;">
                <a href=""><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
                </div>

                <a class="trangChu" href="../../index.php">
                    <p>Trang Chủ</p>
                </a>

                <div class="nav-item dropdown">
                    <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" style="float:right; margin-top: 20px; padding: 0; margin-right:70px;">👤</a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../NHANVIEN/ThongtinNhanVien.php?id=<?php echo $layid; ?>">Thông Tin Cá Nhân</a></li>
                        <li><a class="dropdown-item" href="../NHANVIEN/CN_thongtin.php?id=<?php echo $layid; ?>">Cập Nhật Thông Tin</a></li>
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

                <div class="menu-item " onclick="window.location.href='bep_trangchu.php?id=<?php echo $layid; ?>'">Trang tổng quan</div>
                <div class="menu-item active" onclick="window.location.href='bep_trangdonhang.php?id=<?php echo $layid; ?>';">Xem hóa đơn</div>
                <div class="menu-item " onclick="window.location.href='bep_qlynvl.php?id=<?php echo $layid; ?>';">Quản lý nguyên vật liệu</div>

            </div>
        </div>

        <div id="content">
            <div class="container">
                <div class="header-row">
                    <h2>DANH SÁCH HÓA ĐƠN</h2>
                    <!-- <div class="search-add">
                        <input type="text" placeholder="Tìm kiếm...">
                        <button class="search-button">🔍</button>
                    </div> -->
                </div>
                <!-- <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã hóa đơn</th>
                            <th>Giờ khởi tạo</th>
                            <th>Món ăn</th>
                            <th>Hành động</th>
                        </tr>
                    </thead> -->
                    <!-- <tbody>
                        <tr>
                            <td>1</td>
                            <td>001</td>
                            <td>10:00 AM </td> 
                            <td>Cơm gà</td>
                            <td>
                                <button class="view-button" onclick="window.location.href='bep_chitietdonhang.php';">Xem chi tiết</button>
                            </td>
                        </tr> -->
                        <!-- Add more rows as needed -->
                    <!-- </tbody>
                </table> -->
                <?php
                    $p->xemdanhsachhoadon("select * from hoadon group by maHD ");
                ?>
            </div>
        </div>
    </div>
    <!-- Thông Báo Hủy Đơn Hàng -->
    <!-- <div class="popup" id="deletePopup">
        <div class="popup-content">
            <h3>Bạn có chắc chắn xóa?</h3>
            <form class="detail-form">
                <div class="popup-buttons">
                    <button class="back-button-huy" onclick="closeDeletePopup() ">Hủy</button>
                    <button class="confirm-button">Xác nhận</button>
                </div>
            </form>
        </div>
    </div> -->
    <!-- <script src="script.js">
        
    </script> -->
</body>