<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Thông tin khách hàng</title>
    <link rel="stylesheet" href="../../css/nhanVien.css">
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
        <h1><a href="../../index.php">Trang chủ</a></h1>
        <div class="date" style="float:right; margin-right: 100px;"><span>📅</span><span id="currentDate"></span></div>
        <div class="menu-icon" style="float:right;" onclick="toggleSidebar()">👤</div> 
    </div>
        <div class="sidebar" id="sidebar">
        <button class="menu-item"><a href="Thongtin.php">Thông tin cá nhân</a></button>
            <button class="menu-item"><a href="CN_thongtin.php">Cập nhật thông tin cá nhân</a></button>
            <button class="menu-item">Theo dõi trạng thái đơn hàng</button>
            <button class="menu-item">Xem ưu đãi</button>
            <button class="menu-item">Xem lịch sử mua hàng </button>
            <button class="menu-item"><a href="../../index.php">Đăng xuất</a></button>
        </div>
     <div class="container" style="width:100%;">
        <div class="content">
            <h2 >Thông tin cá nhân</h2>
            <div class="form-container">
            <div class="form-group">
                <label>Loại khách hàng:</label>
                <input type="text" value="Vàng" readonly>
            </div>
            <div class="form-group">
                <label>Mã khách hàng:</label>
                <input type="text" value="0001" readonly>
            </div>
            <div class="form-group">
                <label>Họ và tên:</label>
                <input type="text" value="Nguyễn Văn A" readonly>
            </div>
            <div class="form-group">
                <label>Điểm tích lũy:</label>
                <input type="number" value="2000" readonly>
            </div>
            <div class="form-group">
                <label>Số điện thoại:</label>
                <input type="number" value="0914251325" readonly>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" value="nguyenvanA123@gmail.com" readonly>
            </div>
            <div class="form-group">
                <label>Trạng thái:</label>
                <input type="text" value="Đang hoạt động" readonly>
            </div>
            <div class="form-group">
                <label>Địa chỉ:</label>
                <input type="text" value="HCM" readonly>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
