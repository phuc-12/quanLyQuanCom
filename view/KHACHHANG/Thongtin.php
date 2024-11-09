<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Thông tin khách hàng</title>
    <link rel="stylesheet" href="../../css/nhanVien.css">
    <link rel="stylesheet" href="../../css/thongtin.css">
    <script src="../../js/dateTime.js" defer></script>
    <script src="../../js/thongtin.js" defer></script>  
</head>
<body>
    <div class="header">
        <div class="logo">Logo</div>
        <h1>Trang chủ</h1>
        <div class="date"><span>📅</span><span id="currentDate"></span></div>
        <div class="menu-icon" onclick="toggleSidebar()">👤</div> 
    </div>
        <div class="sidebar" id="sidebar">
            <button class="menu-item">Thông tin cá nhân</button>
            <button class="menu-item"><a href="CN_thongtin.php">Cập nhật thông tin cá nhân</a></button>
            <button class="menu-item">Theo dõi trạng thái đơn hàng</button>
            <button class="menu-item">Xem ưu đãi</button>
            <button class="menu-item">Xem lịch sử mua hàng </button>
            <button class="menu-item">Đăng xuất</button>
        </div>
     <div class="container">
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
</body>
</html>
