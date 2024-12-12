
<?php
session_start();
include_once("../../controler/cMonAnTrangChu.php");  // Include the controller
// if (isset($_GET['dangxuat'])) {
//     session_destroy();
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../CSS/style.css">
    <link rel="stylesheet" href="../../css/thongtin.css">
    <link rel="stylesheet" href="../css/nhanVien.css"> 
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../js/dateTime.js" defer></script> 
    <script src="../../js/thongtin.js" defer></script>  
    <script src="../../js/jquery-3.7.1.min.js"></script>
    <script src="../../js/capnhatthongtin.js" defer></script>  
    <title> Xem Khuyến Mãi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Thêm vào phần <head> của HTML -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    
    <style>
        .header h1 {
    margin-top: -40px;
    margin-left: 100px;
    }
    </style> 

    <title>Trang chủ</title>
</head>
<style>
    span,
    i {
        color: white;
        padding-left: 15px;
    }

    .contact-info a {
        text-decoration: none;
        color: white;
        margin-left: -5px;
    }

    .contact-info a:hover {
        color: #4e4202;
    }

    .auth-buttons a {
        text-decoration: none;
        color: white;
    }

    .auth-buttons a:hover {
        color: #4e4202;
    }

    li i {
        padding-left: 5px;
        color: #ffc107;
    }
</style>

<body>

    <div class="container-fluid p-0">
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="contact-info">
                <i class="fa fa-phone" style="font-size: 20px;">
                    <a href="https://zalo.me/0346021604"></i>0346021604</a>
                <i class="fa fa-clock-o" style="font-size: 20px;"></i>
                <span style=" margin-left: -20px ;">Thứ 2 - Chủ nhật / 7:00 - 18:00</span>
            </div>
            <div class="auth-buttons">
                <div class="search">
                    <form action="searchResults.php" method="GET">
                        <input type="search" name="query" placeholder="Bạn cần tìm gì" autocomplete="off" required>
                        <input type="submit" name="btn" id="btn" value="Search">
                    </form>
                </div>
                <div class="date" style="float:right; margin-right: 50px; margin-top: 10px;"><span>📅</span><span id="currentDate"></span></div>
        <div class="menu-icon" style="float:right;" onclick="toggleSidebar()">👤</div> 
    </div>

    <?php
        error_reporting(0);
        $layid = $_REQUEST['id'];
    ?>

    <div class="sidebar" id="sidebar">
            <button class="menu-item"><a href="Thongtin.php?id=<?php echo $layid ?>">Thông tin cá nhân</a></button>
            <button class="menu-item"><a href="CN_thongtin.php?id=<?php echo $layid ?>">Cập nhật thông tin cá nhân</a></button>
            <button class="menu-item"><a href="xemdonhang.php?id=<?php echo $layid; ?>">Theo dõi trạng thái đơn hàng</a></button>
            <button class="menu-item"><a href="xemkm.php?id=<?php echo $layid; ?>">Xem ưu đãi</a></button>
            <!-- <button class="menu-item">Xem lịch sử mua hàng </button> -->
            <button class="menu-item"><a href="../../index.php">Đăng xuất</a></button>
    </div>

            </div>
        </div>

        <!-- Main Navigation -->

        <nav class="main-nav">
            <a href="#">TRANG CHỦ</a>
            <a href="../../intro-menu.php">THỰC ĐƠN</a>

            <div class="logo">
                <img src="../../IMG/ChiPheologo.png" alt="">
            </div>

            <a href="../../intro.php">GIỚI THIỆU</a>
            <a href="xemkm.php">KHUYẾN MÃI</a>
        </nav>


        <!-- Category Navigation -->
        <!-- <div class="category-nav">
            <a href="category-food.php?id=1">Món chay</a>
            <a href="category-food.php?id=2">Món mặn</a>
            <a href="category-food.php?id=3">Đồ uống</a>
            <a href="category-food.php?id=4">Tráng Miệng</a>
        </div> -->
        <?php

include_once("../../controler/cNguoiDung.php");

// Create a controller object and call the searchAction method
$ccontrollerKM = new cNguoiDung();
$promotions = $ccontrollerKM->getAllKM();  // Pass the search term to the controller's searchAction


?>

<div class="container mt-5">
    <h2>Khuyến Mãi</h2>
    <div class="row">
        <?php
        if (mysqli_num_rows($promotions) > 0) {
            while ($promotion = mysqli_fetch_assoc($promotions)) {
        ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title"><?= htmlspecialchars($promotion['tenKM']) ?></h3>
                            <p class="card-text"><?= htmlspecialchars($promotion['moTa']) ?></p>
                            <p><strong>Chiết khấu: </strong><?= htmlspecialchars($promotion['chietKhau']) ?>%</p>
                            <p><strong>Thời gian: </strong><?= htmlspecialchars($promotion['thoiGianBatDau']) ?> đến <?= htmlspecialchars($promotion['thoiGianKetThuc']) ?></p>
                            <p><strong>Trạng thái: </strong><?= htmlspecialchars($promotion['trangThai']) == 1 ? 'Còn hạn' : 'Hết hạn' ?></p>
                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<p>No promotions available at the moment.</p>";
        }
        ?>
    </div>
</div>

<!-- Footer -->
<footer class="footer">
    <div class="contain1">
        <div class="doc1">
            <h4>QUÁN CƠM CHÍ PHÈO</h4>
            <p>GIÁ RẺ - NGON - VỆ SINH - AN TOÀN</p>
            <img src="../IMG/ChiPheologo.png" alt="">
            <P>Chúng tôi cam kết mang đến những sản phẩm chất lượng với số lượng lớn đáp ứng nhu cầu đa dạng của từng khách hàng</P>
        </div>
        <div class="doc2">
            <h4>CHÍNH SÁCH</h4>
            <ul>
                <li><a href="#" class="doc">Cách Đặt Lịch Tại Website</a></li>
                <li><a href="#" class="doc">Chính Sách Bảo Mật</a></li>
                <li><a href="#" class="doc">Phương Thức Thanh Toán</a></li>
            </ul>
        </div>
        <div class="doc3">
            <h4>LIÊN HỆ ĐẶT HÀNG</h4>
            <ul>
                <li><a href="https://zalo.me/0346021604" class="doc">Zalo: 0346021604</a></li>
                <li>Địa chỉ: F4/9C tổ 14 ấp 6C, xã Vĩnh Lộc A, huyện Bình Chánh, TP.HCM</li>
                <li>Giờ mở cửa: Thứ 2 - Chủ nhật: 6:00 - 20:00</li>
            </ul>
        </div>
        <div class="doc4">
            <h4>LIÊN KẾT NHANH</h4>
            <ul>
                <li><a href="#" class="doc">Giới Thiệu</a></li>
                <li><a href="#" class="doc">Liên Hệ-Bản Đồ Đường Đi</a></li>
                <li><a href="#" class="doc">Facebook</a></li>
            </ul>
        </div>
    </div>
</footer>
</div>

</body>

</html>