<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý nguyên vật liệu</title>
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
            <div class="container">
                <div class="header-row">
                    <h2>DANH SÁCH ĐƠN HÀNG</h2>
                    <div class="search-add">
                        <input type="text" placeholder="Tìm kiếm...">
                        <button class="search-button">🔍</button>
                    </div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã hóa đơn</th>
                            <th>Giờ khởi tạo</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>001</td>
                            <td>10:00 AM </td> 
                            <td>Đã thanh toán</td>
                            <td>
                                <button class="view-button" onclick="window.location.href='bep_chitietdonhang.php';">Xem</button>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Thông Báo Hủy Đơn Hàng -->
    <!-- <div class="popup" id="deletePopup">
        <div class="popup-content">
            <h3>Bạn có chắc chắn xóa?</h3>
            <form class="detail-form">
                <div class="popup-buttons">
                    <button class="back-button-huy" onclick="closeDeletePopup() ">Hủy</button>
                    <button class="confirm-button">Xác nhận</button>
                </div>
            </form>
        </div>
    </div> -->
    <!-- <script src="script.js">
        
    </script> -->
</body>