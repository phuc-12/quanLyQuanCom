<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoàn tất giao hàng</title>
    <link rel="stylesheet" type="text/css" href="../../css/haucan_css/style.css">
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
        <button class="back-button">◀ <a href="haucan_theodoidonhang.php" style="font-size: 16px; color: black; text-decoration: none;">Danh sách đơn hàng</a></button>
        <div class="container-xem">
            <div class="header-row-xem">
                <h2>THÔNG TIN CHI TIẾT ĐƠN HÀNG</h2>
            </div>
            <form class="detail-form">
            <label for="tenkh">Tên khách hàng:</label>
                <input type="text" id="tenkh" name="tenkh" value="Nguyễn Thị Nga">

                <label for="sdt">Số điện thoại:</label>
                <input type="text" id="sdt" name="sdt" value="0362956809">

                <label for="soluong">Địa chỉ:</label>
                <input type="text" id="diachi" name="diachi" value="Nguyễn Văn Bảo, Gò Vấp">

                <label>Danh sách món ăn:</label>
                <div class="food-list">
                    <div class="food-item">
                        <div class="soluong">Bún đậu mắm tôm x2 </div>
                        <div class="gia">đ 100.000 </div>  
                    </div>
                    <div class="food-item">
                        <div class="soluong">Bún thêm x1 </div>
                        <div class="gia">đ 30.000 </div>  
                    </div>
                    <div class="food-item">
                        <div class="soluong">Nước ngọt x2 </div>
                        <div class="gia">đ 25.000 </div>  
                    </div>                 
                </div>

                <label for="soluong">Tổng tiền</label>
                <input type="text" id="tongtien" name="tongtien" value="105000 đ ">
                
                <label for="image-upload">Tải ảnh lên:</label>
                <input type="file" id="image-upload" name="image" accept="image/*">
            <!-- <div class="sub-button"> -->
                <button type="button" class="cancel-button-1" onclick="openCancelPopup()">Hủy đơn hàng</button>
            <!-- </div> -->
            <button type="button" class="complete-button" onclick="window.location.href='haucan_theodoidonhang.php';">Hoàn tất giao hàng</button>
        </div>
    </div>

    <!-- Thông Báo Hủy Đơn Hàng -->
    <div class="popup" id="cancelPopup">
        <div class="popup-content">
            <h3>HỦY ĐƠN HÀNG</h3>
            <form class="detail-form">
                <label for="tinhtrang">Tình trạng:</label>
                <select id="tinhtrang" name="tinhtrang">
                    <option value="available">Khách không còn nhu cầu</option>
                </select>
                <div class="popup-buttons">
                    <button class="back-button-huy" onclick="closeCancelPopup() ">Quay Lại</button>
                    <button class="confirm-button">Xác nhận Hủy</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openCancelPopup() {
            document.getElementById("cancelPopup").style.display = "flex";
        }
  
        function closeCancelPopup() {
            document.getElementById("cancelPopup").style.display = "none";
        }
    </script>
    
</body>
 