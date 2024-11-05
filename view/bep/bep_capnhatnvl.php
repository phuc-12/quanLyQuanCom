<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Khách Hàng</title>
    <link rel="stylesheet" type="text/css" href="../../css/nvbep_css/danhsachnvl.css">
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
        <button class="back-button">◀</button>
        <div class="container-xem">
            <div class="header-row-xem">
                <h2>CẬP NHẬT NGUYÊN VẬT LIỆU</h2>
            </div>
            <form class="detail-form">
            <label for="ma">Mã nguyên vật liệu:</label>
                <input type="text" id="ma" name="ma" value="NVL001" disabled>

                <label for="ten">Tên nguyên vật liệu:</label>
                <input type="text" id="ten" name="ten" value="Đường" disabled>

                <label for="soluong">Số lượng:</label>
                <input type="number" id="soluong" value="10" name="soluong">

                <label for="tinhtrang">Tình trạng:</label>
                <select id="tinhtrang" name="tinhtrang">
                    <option value="available">Có sẵn</option>
                    <option value="out">Hết</option>
                </select>

                <label for="ngaynhap">Ngày nhập:</label>
                <input type="text" id="ngaynhap" name="ngaynhap" value="01/01/2024" placeholder="DD/MM/YY">

                <label for="ngayhethan">Ngày hết hạn:</label>
                <input type="text" id="ngayhethan" name="ngayhethan" value="01/10/2024"placeholder="DD/MM/YY">

                <button type="submit" class="update-button">Cập nhật</button>
        </div>
        </div>
    </div>
</body>