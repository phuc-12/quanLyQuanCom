<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giao hàng</title>
    <link rel="stylesheet" type="text/css" href="../../css/haucan_css/style.css">
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <div class="container-fluid p-0">
            <div id="ql_header">
                <div class="logo">
                    <p>logo</p>
                </div>

                <a class="trangChu" href="../../index.php">
                    <h4>Trang Chủ</h4>
                </a>
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
            <!-- <div class="sub-button"> -->
                <button class="cancel-button-1">Hủy đơn hàng</button>
            <!-- </div> -->
            <button type="button" class="prepare-button" onclick="window.location.href='haucan_hoantatgiaohang.php';">Giao hàng</button>        </div>
    </div>
</body>
 