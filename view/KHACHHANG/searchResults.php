<?php
session_start();
include_once("../../controler/cNguoiDung.php");  // Include the controller
if (isset($_GET['dangxuat'])) {
    session_destroy();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../CSS/style.css">
    <link rel="stylesheet" href="../../css/thongtin.css">   
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../js/dateTime.js" defer></script> 
    <script src="../../js/thongtin.js" defer></script>  
    <script src="../../js/jquery-3.7.1.min.js"></script>
    <script src="../../js/capnhatthongtin.js" defer></script>  

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

    <div class="sidebar" id="sidebar">
            <!-- <button class="menu-item"><a href="Thongtin.php?id=<?php echo $layid ?>">Thông tin cá nhân</a></button>
            <button class="menu-item"><a href="CN_thongtin.php?id=<?php echo $layid ?>">Cập nhật thông tin cá nhân</a></button>
            <button class="menu-item">Theo dõi trạng thái đơn hàng</button>
            <button class="menu-item">Xem ưu đãi</button>
            <button class="menu-item">Xem lịch sử mua hàng </button> -->
            <button class="menu-item"><a href="../../index.php">Đăng xuất</a></button>
    </div>

            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="main-nav">
            <a href="../../index.php">TRANG CHỦ</a>
            <a href="../../intro-menu.php">THỰC ĐƠN</a>
            <div class="logo">
                <img src="../../IMG/ChiPheologo.png" alt="">
            </div>
            <a href="../../intro.php">GIỚI THIỆU</a>
            <a href="xemkm.php">KHUYẾN MÃI</a>
        </nav>

        <!-- Category Navigation -->
        <div class="category-nav">
            <a href="category-food.php?id=1">Món chay</a>
            <a href="category-food.php?id=2">Món mặn</a>
            <a href="category-food.php?id=3">Đồ uống</a>
            <a href="category-food.php?id=4">Tráng Miệng</a>
        </div>


<?php
if (isset($_GET['btn'])) {
    $tim = $_GET['query'];  // Get the search query from the GET parameter
    include_once("../../controler/cMonAnTrangChu.php");  // Include the controller

    // Create a controller object and call the searchAction method
    $ccontrollermonAnTim = new CMonAnTrangChu();
    $timMon = $ccontrollermonAnTim->searchAction($tim);  // Pass the search term to the controller's searchAction
}

if (!empty($timMon)) { ?>
    <h2>Kết quả tìm kiếm được là: </h2>




    <?php foreach ($timMon as $row) { ?>
        <div class="menu-item" style="width: 350px; height: 350px; margin-bottom: 20px; margin-right: 20px;">
            <a href="food-detail.php?id=<?= $row['maMA'] ?>">
                <div class="sp-img" style="width: 200px; height: 200px;">
                    <?php
                    $mon = $row['maLoaiMA'];
                    if ($mon == 1) {
                        // For 'monman' category
                        echo '<img src="../../img/monman/' . $row['hinhAnh'] . '" class="card-img-top" alt="' . $row['tenMA'] . '"style="width: 200px; height: 200px;">';
                    } elseif ($mon == 2) {
                        // For 'monchay' category
                        echo '<img src="../../img/monchay/' . $row['hinhAnh'] . '" class="card-img-top" alt="' . $row['tenMA'] . '"style="width: 200px; height: 200px;">';
                    } elseif ($mon == 3) {
                        // For 'douong' category
                        echo '<img src="../../img/douong/' . $row['hinhAnh'] . '" class="card-img-top" alt="' . $row['tenMA'] . '"style="width: 200px; height: 200px;">';
                    } elseif ($mon == 4) {
                        // For 'trangmieng' category
                        echo '<img src="../../img/trangmieng/' . $row['hinhAnh'] . '" class="card-img-top" alt="' . $row['tenMA'] . '"style="width: 200px; height: 200px;">';
                    }
                    ?>
                </div>

                <div class="sp-info">
                    <h3 class="card-title"><?= $row['tenMA'] ?></h3>
                    <p class="card-text"><?= $row['donGia'] ?> <?= $row['donViTinh'] ?></p>
                </div>

            </a>
        </div>

<?php }
} ?>
</div>