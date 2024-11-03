<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin nhân viên</title>
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
            <button class="menu-item">Thông tin cá nhân</button>
            <button class="menu-item"><a href="http://localhost/quanLyQuanCom/view/NHANVIEN/CN_thongtin.php">Cập nhật thông tin cá nhân</a></button>
            <button class="menu-item">Đăng xuất</button>
        </div>
        <div class="content">
            <h2>Thông tin cá nhân</h2>
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
                <label>Số điện thoại:</label>
                <input type="number" value="0906666254"readonly>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" value="nguyenvanA123@hmail.com"readonly>
            </div>
            <div class="form-group">
                <label>Trạng thái:</label>
                <input type="text" value="Đang làm việc" readonly>
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
