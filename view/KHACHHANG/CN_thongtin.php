<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cập nhật thông tin khách hàng</title>
    <link rel="stylesheet" href="../../css/nhanVien.css">
    <script src="../../js/dateTime.js" defer></script>  
<body>

    <div class="header">
        <div class="logo">Logo</div>
        <h1>Trang chủ</h1>
        <div class="date"><span>📅</span><span id="currentDate"></span></div>
        <div class="user-icon"><span>👤</span></div>
    </div>
    </div>

    <div class="container">
     
        <div class="sidebar">
            <button class="menu-item"><a href="http://localhost/quanLyQuanCom/view/KHACHHANG/Thongtin.php">Thông tin cá nhân</a></button>
            <button class="menu-item">Cập nhật thông tin cá nhân</button>
            <button class="menu-item">Theo dõi trạng thái đơn hàng</button>
            <button class="menu-item">Xem ưu đãi</button>
            <button class="menu-item">Xem lịch sử mua hàng </button>
            <button class="menu-item">Đăng xuất</button>
        </div>

        <div class="content">
            <h2 >Cập nhật thông tin cá nhân</h2>
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
                <label>Username:</label>
                <input type="text" placeholder="Nhập username">
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" placeholder="Nhập password">
            </div>
            <div class="form-group">
                <label>Số điện thoại:</label>
                <input type="text" placeholder="Nhập số điện thoại">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" placeholder="Nhập email">
            </div>
            <div class="form-group">
                <label>Trạng thái:</label>
                <input type="text" value="Đang hoạt động" readonly>
            </div>
            <div class="form-group">
                <label>Địa chỉ:</label>
                <input type="text" value="HCM" readonly>
            </div>
            <div class="button-container">
                <button class="button">Cập nhật</button>
                <button class="button cancel">Hủy</button>
            </div>
        </div>
    </div>
</body>
</html>
