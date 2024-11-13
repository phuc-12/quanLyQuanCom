<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật thông tin cá nhân</title>
    <link rel="stylesheet" href="Css/profile-update.css">
</head>
<body>
    <!-- Header -->
    <header class="top-bar">
        <div class="logo-section">
            <div class="logo">Logo</div>
            <span>Trang chủ</span>
        </div>
        <div class="header-right">
            <div class="date">DD/MM/YY</div>
            <div class="user-icon">Icon</div>
        </div>
    </header>

    <!-- Page Title -->
    <div class="page-title">
        <h1>Cập nhật thông tin cá nhân</h1>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="nav-item active">Thông tin cá nhân</div>
            <select class="nav-select">
                <option>Cập nhật thông tin cá nhân</option>
            </select>
            <button class="logout-btn">Đăng xuất</button>
        </aside>

        <!-- Form Section -->
        <main class="form-section">
            <form class="profile-form">
                <div class="form-group">
                    <label>Mã khách hàng:</label>
                    <span>0007</span>
                </div>

                <div class="form-group">
                    <label>Họ và tên:</label>
                    <span>Nguyễn Văn A</span>
                </div>

                <div class="form-group">
                    <label>Ngày sinh:</label>
                    <span>02/11/2004</span>
                </div>

                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" class="form-control">
                </div>

                <div class="form-group">
                    <label>Số điện thoại:</label>
                    <input type="tel" class="form-control">
                </div>

                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control">
                </div>

                <div class="form-group">
                    <label>Trạng thái:</label>
                    <span>đang hoạt động</span>
                </div>

                <div class="form-group">
                    <label>Địa chỉ:</label>
                    <span>HCM</span>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-update">Cập nhật</button>
                    <button type="button" class="btn btn-cancel">Hủy</button>
                </div>
            </form>
        </main>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <span>Footer</span>
    </footer>
</body>
</html>