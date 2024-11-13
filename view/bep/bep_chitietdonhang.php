<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem nguyên vật liệu</title>
    <link rel="stylesheet" type="text/css" href="../../css/nvbep_css/danhsachnvl.css">
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../js/dateTime.js" defer></script> 
</head>
<body>
    <header>
        <div class="container-fluid p-0">
            <div id="ql_header">
                <div class="logo" style="padding: 0; border-radius: 100px;">
                    <a href="../../index.php"><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
                </div>

                <a class="trangChu" href="../../index.php">
                    <h4>Trang Chủ</h4>
                </a>

                <a class="trangChu" href="bep_trangchu.php">
                    <h4>Trang quản lý</h4>
                </a>
                
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" style="float:right; margin-top: 20px; padding: 0; margin-right:20px;">👤</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Thông Tin Cá Nhân</a></li>
                        <li><a class="dropdown-item" href="#">Cập Nhật Thông Tin</a></li>
                        <li><a class="dropdown-item" href="../../index.php">Đăng Xuất</a></li>
                    </ul>
                </div>

                <div class="date" style="float:right; margin-right: 100px; margin: 20px;"><span>📅</span><span id="currentDate"></span></div>
                    
            </div>
        </div>
    </header>
    
    <div id="content">
        <button class="back-button">◀ <a href="bep_trangdonhang.php" style="font-size: 16px; color: black; text-decoration: none;">Danh sách đơn hàng</a></button>
        <div class="container-xem">
            <div class="header-row-xem">
                <h2>THÔNG TIN CHI TIẾT ĐƠN HÀNG</h2>
            </div>
            <!-- <form class="detail-form">
                <label for="tenkh">Mã đơn hàng</label>
                <input type="text" id="madh" name="madh" value="DH001">

                <label for="sdt">Thời gian đặt hàng</label>
                <input type="text" id="thoigian" name="thoigian" value="10:00 12/11/2024">

                <label>Danh sách món ăn:</label>
                <div class="food-list">
                    <div class="food-item">
                        <div class="soluong">Bún đậu mắm tôm x2 </div>
                    </div>
                    <div class="food-item">
                        <div class="soluong">Bún thêm x1 </div>
                    </div>
                    <div class="food-item">
                        <div class="soluong">Nước ngọt x2 </div>
                    </div>                 
                </div>
            </form> -->
    </div>
</body>