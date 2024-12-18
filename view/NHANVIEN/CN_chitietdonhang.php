<?php
include_once("../../model/chucnangnhanvien.php");
$tmdt = new tmdt();
$maLoaiMA = isset($_GET['product-group']) ? $_GET['product-group'] : null;
$sanphamList = $tmdt->layTatCaSanPham($maLoaiMA);
$conn = $tmdt->connect();
// Truy vấn lấy mã hóa đơn lớn nhất hiện tại
$query = "SELECT MAX(maHD) as maxMaHoaDon FROM hoadon";
$result = $conn->query($query);

$newInvoiceCode = 1; // Giá trị mặc định nếu không có hóa đơn nào trong cơ sở dữ liệu
if ($result && $row = $result->fetch_assoc()) {
    $maxMaHoaDon = $row['maxMaHoaDon'];
    $newInvoiceCode = $maxMaHoaDon + 1; // Tăng mã hóa đơn lên 1
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật đơn hàng</title>
    <link rel="stylesheet" href="../../css/donhang.css">
    <link rel="stylesheet" href="../../css/thongtin.css">
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../js/hoadonn.js" defer></script> 
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
    <?php
    $layid = $_REQUEST['id'];
    ?>
<div class="container-fluid p-0">
            <div id="ql_header">
                <div class="logo" style="padding: 0; border-radius: 100px;">
                    <a href="../../index.php"><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
                </div>
                

                <div class="nav-item dropdown">
                    <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" style="float:right; margin-top: 20px; padding: 0; margin-right:70px; ">👤</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="ThongtinNhanVien.php?id=8">Thông Tin Cá Nhân</a></li>
                        <li><a class="dropdown-item" href="CN_thongtin.php?id=8">Cập Nhật Thông Tin</a></li>
                        <li><a class="dropdown-item" href="../../index.php">Đăng Xuất</a></li>
                    </ul>
                </div>
                <div class="date" style="float:right; margin-right: 100px; margin: 20px;"><span>📅</span><span id="currentDate"></span></div>
                    
            </div>

        <div class="container" style="width:100%">      
        <!-- Bảng Sản Phẩm -->
             <!-- Dropdown lọc nhóm sản phẩm -->
            <div class="left-column">
                <div class="filter-group">
                    <label for="product-group">Chọn nhóm sản phẩm:</label>
                    <form method="GET" action="">
                        <select name="product-group" id="product-group" onchange="this.form.submit()">
                            <option value="">Tất cả sản phẩm</option>
                            <option value="1" <?php if(isset($_GET['product-group']) && $_GET['product-group'] == '1') echo 'selected'; ?>>Món mặn</option>
                            <option value="2" <?php if(isset($_GET['product-group']) && $_GET['product-group'] == '2') echo 'selected'; ?>>Món chay</option>
                            <option value="3" <?php if(isset($_GET['product-group']) && $_GET['product-group'] == '3') echo 'selected'; ?>>Nước uống</option>
                            <option value="4" <?php if(isset($_GET['product-group']) && $_GET['product-group'] == '4') echo 'selected'; ?>>Tráng miệng</option>
                        </select>
                    </form>
                </div>

                <div class="table-container">
                    <table class="menu-table">
                        <thead>
                            <tr>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <!-- <th>Hình ảnh</th> -->
                                <th>Thêm</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            // Kiểm tra nếu có sản phẩm
                            if (!empty($sanphamList)) {
                                // Duyệt qua danh sách sản phẩm và hiển thị
                                foreach ($sanphamList as $sanpham) {
                                    // Ẩn sản phẩm miễn phí nếu maMA = 21
                                    if ($sanpham['maMA'] == 21) {
                                        continue; // Bỏ qua sản phẩm miễn phí
                                    }
                                    echo "<tr data-id='" . $sanpham['maMA'] . "'>";
                                    echo "<td>" . $sanpham['maMA'] . "</td>";
                                    echo "<td>" . $sanpham['tenMA'] . "</td>"; // Product name
                                    echo "<td>" . $sanpham['donGia'] . " VND</td>"; // Price
                                    // echo "<td><img src='" . $sanpham['hinhAnh'] . "' width='50' height='50'></td>";
                                    echo "<td class='add-btn'>
                                                <button onclick='addToCart(" . $sanpham['maMA'] . ")'> + </button>
                                            </td>";
                                    echo "</tr>";
                                }
                            } else {
                                // Nếu không có sản phẩm, hiển thị thông báo
                                echo "<tr><td colspan='5'>Không có sản phẩm nào.</td></tr>";
                            }
                         ?>
                           
                        </tbody>
                    </table>
                </div>
            </div>
                <!-- Bảng Hóa Đơn -->
            <div class="right-column">
                <div class="invoice">
                    <div class="invoice-header">
                        <h2>HÓA ĐƠN</h2>
                        <div class="invoice-field">
                            <label for="invoice-code">Mã hóa đơn</label>
                            <input id="invoice-code" type="text" value="<?php echo $newInvoiceCode; ?>" readonly>        
                        </div>
                        <div class="invoice-field">
                            <label for="employee">Nhân viên</label>
                            <input id="employee" type="text" value='<?php echo $layid;?>'readonly>

                            <!-- <label for="">Khuyến mãi</label>
                            <input id="employee" type="text"> -->
                        </div>
                        <div class="invoice-field">
                            <label for="customerCode">Khách Hàng</label>
                            <input id="customerCode" type="text" value="111">
                            <small style="color: gray;">Thay đổi mã nếu là thành viên</small>
                            <!-- <button id="search-button" onclick="searchDiscount()">🔍</button> -->          
                        </div>
                    </div>
                    <div class="table-container">
                        <div class="invoice-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã Món</th>
                                        <th>Tên Sản Phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                        <th>Khuyến mãi</th>
                                        <th>Bỏ</th>
                                    </tr>
                                </thead>
                                <tbody id="invoiceBody">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Nút Hành Động -->
                <div class="actions">
                    <button class="xacnhan" onclick="confirmOrder()">Xác nhận</button>
                    <button  class="huy" >Hủy</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
