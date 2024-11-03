<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật thông tin nhân viên</title>
    <link rel="stylesheet" href="../../css/nhanVien.css">
    <script src="../../js/dateTime.js" defer></script> 
</head>
<body>
    <div class="header">
        <div class="logo">Logo</div>
        <h1><a href="http://localhost/quanLyQuanCom/view/NHANVIEN/Quanli.php">Trang nhân viên</a></h1>
        <div class="date"><span>📅</span><span id="currentDate"></span></div>
        <div class="user-icon"><span>👤</span></div>
    </div>
    </div>
    <div class="container">
        <div class="sidebar">
            <button class="menu-item"><a href="http://localhost/quanLyQuanCom/view/NHANVIEN/ThongtinNhanVien.php">Thông tin cá nhân</a></button>
            <button class="menu-item">Cập nhật thông tin cá nhân</button>
            <button class="menu-item">Đăng xuất</button>
        </div>
        <div class="content">
            <h2>Cập nhật thông tin cá nhân</h2>
            <div class="form-container">
            <div class="form-group">
                <label>Loại nhân viên:</label>
                <input type="text" value="Nhân viên bán hàng" readonly>
            </div>
            <div class="form-group">
                <label>Mã nhân viên:</label>
                <input type="text" value="0001" readonly>
            </div>
            <div class="form-group">
                <label>Họ và tên:</label>
                <input type="text" value="Nguyễn Văn A" readonly>
            </div>
            <div class="form-group">
                <label>Ngày sinh:</label>
                <input type="datetime" value="11/05/2003" readonly>
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
                <input type="text" value="Đang làm việc" readonly>
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
    </div>
</body>
</html>
