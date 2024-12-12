
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
    <title> Xem Đơn Hàng</title>
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../js/dateTime.js" defer></script> 
    <script src="../../js/thongtin.js" defer></script>  
    <script src="../../js/jquery-3.7.1.min.js"></script>
    <script src="../../js/capnhatthongtin.js" defer></script>  
    <link rel="stylesheet" href="../../css/thongtin.css">   
    

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
        <!-- <nav class="main-nav">
            <a href="index.php">TRANG CHỦ</a>
            <a href="intro-menu.php">THỰC ĐƠN</a>
            <div class="logo">
                <img src="IMG/ChiPheologo.png" alt="">
            </div>
            <a href="intro.php">GIỚI THIỆU</a>
            <a href="#">KHUYẾN MÃI</a>
        </nav> -->

        <!-- Category Navigation -->
        <!-- <div class="category-nav">
            <a href="category-food.php?id=1">Món chay</a>
            <a href="category-food.php?id=2">Món mặn</a>
            <a href="category-food.php?id=3">Đồ uống</a>
            <a href="category-food.php?id=4">Tráng Miệng</a>
        </div> -->
<?php
    include_once("../../controler/cNguoiDung.php");  // Include the controller

    // Create a controller object and call the searchAction method
    $ccontrollerDH = new cNguoiDung();
    $dh = $ccontrollerDH->xemhoadon($_REQUEST['id']);  // Pass the search term to the controller's searchAction


?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Đơn hàng</h2>
    <table id="ordersTable" class="table table-bordered table-striped table-hover">
        <thead class="table-light">
            <tr>
                <th>Mã đơn hàng</th>
                <th>Ngày tháng</th>
                <th>Trạng thái</th>
                <!-- <th>Hành động</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            include_once("../../controler/cNguoiDung.php");  // Include the controller

            // Create a controller object and call the searchAction method
            $ccontrollerDH = new cNguoiDung();
            $dh = $ccontrollerDH->xemhoadon($_REQUEST['id']);
            // Assuming $dh contains the orders data
            if ($dh) {
                while ($order=$dh->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?= htmlspecialchars($order['maHD']) ?></td>
                        <td><?= htmlspecialchars($order['ngayThang']) ?></td>
                        <td><?= htmlspecialchars($order['trangThai']) == 1 ? 'Đã thanh toán' : 'Chưa thanh toán' ?></td>
                        <!-- <td>
                            <div class="btn-group" role="group">
                                <button class="btn btn-sm btn-primary">Sửa</button>
                                <button class="btn btn-sm btn-secondary">Chép</button>
                                <button class="btn btn-sm btn-danger">Xóa bỏ</button>
                            </div>
                        </td> -->
                    </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='4'>No orders available at the moment.</td></tr>";
            }
            ?>
        </tbody>
    </table>
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
<!-- jQuery (required for DataTables) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables JS -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<!-- Thêm Bootstrap 5 JS và Popper từ CDN -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        // Initialize DataTables
        $('#ordersTable').DataTable({
            "paging": true, // Enable paging
            "searching": true, // Enable search
            "ordering": true, // Enable sorting
            "info": true, // Show information about table
            "lengthChange": true, // Enable change of page length (number of rows per page)
            "lengthMenu": [5, 10, 15, 20], // Options for page length selection (number of rows per page)
            "pageLength": 10 // Set default number of rows per page (optional)
        });
    });
</script>

</body>

</html>