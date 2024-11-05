<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Thực Đơn</title>
    <link rel="stylesheet" href="../../css/admin_css/adminfood.css">
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid p-0">
        <div id="ql_header">
            <div class="logo">
                <p>logo</p>
            </div>

            <a class="trangChu" href="../../index.php">
                <h4>Trang Chủ</h4>
            </a>
        </div>

        <div id="content">
            <div class="nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">
                            <i class="fa fa-tachometer"></i>
                                Tổng quát
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="managementfood.php" style="background-color: #E5E5E5;">
                            <i class="fa fa-spoon"></i>
                                Quản lý thực đơn
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="management_employ.php">
                            <i class="fa fa-address-card"></i>
                            Quản lý nhân viên
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="management_customer.php">
                            <i class="fa fa-address-card-o"></i>
                            Quản lý khách hàng
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="management_gift.php">
                            <i class="fa fa-gift"></i>
                            Quản lý chương trình khuyến mãi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="management_order.php">
                            <i class="fa fa-shopping-cart"></i>
                            Quản lý đơn hàng
                        </a>
                    </li>
                </ul>
            </div>

            <div class="section">
                <h3 style="margin-bottom: 30px;"><b>QUẢN LÝ THỰC ĐƠN</b></h3>

                <div class="thongKe_food">
                    <div style="width: 100%; height: 60px; padding: 10px; border-bottom: 0.5px solid #E5E5E5;">
                        <p style="font-size: 20px; float: left;">Thống kê số liệu</p>
                        <a href="#ds_food" class="btn btn-outline-secondary" style="float:right;">Tất cả</a>
                    </div>
                    <div style="padding: 50px; width: 100%; height: 150px; border-bottom: 1px solid #E5E5E5;">
                        <div>
                            <i class="fa fa-spoon"></i>
                            <h5 style="width: 250px; height: 30px; float: left; margin-left: 10px;"><b>TỔNG SỐ LƯỢNG</b> <br> <b style="color:red;">3 MÓN</b></h5>
                        </div>
                        <div>
                            <i class="fa fa-smile-o"></i>
                            <h5 style="width: 250px; height: 30px; float: left; margin-left: 10px;"><b>TỔNG SỐ LƯỢNG</b> <br> <b style="color:red;">2 MÓN</b></h5>
                        </div>
                        <div>
                            <i class="fa fa-frown-o"></i>
                            <h5 style="width: 250px; height: 30px; float: left; margin-left: 10px;"><b>TỔNG SỐ LƯỢNG</b> <br> <b style="color:red;">1 MÓN</b></h5>
                        </div>
                    </div>
                </div>

                <div id="ds_food">
                    <div style="width: 100%; height: 60px; padding: 10px; border-bottom: 0.5px solid #E5E5E5;">
                        <p style="font-size: 20px; float: left;"><b>DANH SÁCH THỰC ĐƠN</b></p>
                        <button type="button" class="btn btn-warning" style="float:right;" data-bs-toggle="modal" data-bs-target="#themMon">Thêm món ăn</button>
                    </div>
                    <table class="table" style="background-color: white;">
                        <thead class="table-dark">
                        <tr style="text-align:center;">
                            <th>STT</th>
                            <th>Mã Món</th>
                            <th>Tên Món</th>
                            <th>Số Lượng</th>
                            <th>Đơn Vị Tính</th>
                            <th>Giá Món</th>
                            <th>Mô Tả</th>
                            <th>Trạng Thái</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr style="text-align:center;">
                            <td>1</td>
                            <td>MA001</td>
                            <td>Cơm Gà Xối Mỡ</td>
                            <td>10</td>
                            <td>Phần</td>
                            <td>30.000đ</td>
                            <td>Món ăn là cơm gà</td>
                            <td>Còn</td>
                            <td>
                                <button type="button" class="btn btn-outline-dark">Cập nhật</button>
                                <button type="button" class="btn btn-outline-dark">Xóa món</button>
                            </td>
                        </tr>
                        <tr style="text-align:center;">
                            <td>2</td>
                            <td>MA002</td>
                            <td>Mì Xào</td>
                            <td>5</td>
                            <td>Phần</td>
                            <td>25.000đ</td>
                            <td>Món ăn là mì xào</td>
                            <td>Hết</td>
                            <td>
                                <button type="button" class="btn btn-outline-dark">Cập nhật</button>
                                <button type="button" class="btn btn-outline-dark">Xóa món</button>
                            </td>
                        </tr>
                        <tr style="text-align:center;">
                            <td>3</td>
                            <td>DU001</td>
                            <td>Sting</td>
                            <td>20</td>
                            <td>Chai</td>
                            <td>15.000đ</td>
                            <td>Tài lộc quá lớn</td>
                            <td>Còn</td>
                            <td>
                                <button type="button" class="btn btn-outline-dark">Cập nhật</button>
                                <button type="button" class="btn btn-outline-dark">Xóa món</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <!-- Modal THÊM MÓN -->
                    <div class="modal" id="themMon">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header" style="width: 100%;">
                                <h4 class="modal-title" style="float: left; margin: 0px;"><b>THÊM MÓN ĂN</b></h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" style="float: right;"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body" style="margin: 0px;">
                            <form action="/action_page.php">
                                <div style="width: 50%; float: left;">
                                    <table style="margin:0;">
                                        <tr>
                                            <td style="width: 150px;"><label for="maMon">Mã Món Ăn:</label></td>
                                            <td><input type="input" class="form-control" size="200" id="maMon" placeholder="Nhập mã món ăn" name="maMon"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px;"><label for="tenMon">Tên Món Ăn:</label></td>
                                            <td><input type="input" class="form-control" size="200" id="tenMon" placeholder="Nhập tên món ăn" name="tenMon"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px;"><label for="soLuong">Số Lượng:</label></td>
                                            <td><input type="input" class="form-control" size="200" id="soLuong" placeholder="Nhập số lượng món ăn" name="soLuong"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px;"><label for="gia">Giá Món Ăn:</label></td>
                                            <td><input type="input" class="form-control" size="200" id="gia" placeholder="Nhập giá món ăn" name="gia"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px;"><label for="moTa">Mô Tả Món Ăn:</label></td>
                                            <td><textarea class="form-control" size="200" id="moTa" placeholder="Nhập mô tả món ăn" name="moTa" rows="5"></textarea></td>
                                            
                                        </tr>
                                        <tr>
                                            <td style="width: 150px;"><label for="tenMon">Tên Món Ăn:</label></td>
                                            <td><input type="input" class="form-control" size="200" id="tenMon" placeholder="Nhập tên món ăn" name="tenMon"></td>
                                        </tr>
                                    </table>
                                </div>
                                <!-- <div class="mb-3 mt-3">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                    </div>
                                    <div class="mb-3">
                                    <label for="pwd">Password:</label>
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                                    </div>
                                    <div class="form-check mb-3">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                    </label>
                                    </div> -->
                                    
                            </form>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn" style="background-color: #FFCD29; color:white;" data-bs-dismiss="modal">Thêm</button>
                                <button type="button" class="btn btn" style="background-color: #FFCD29; color:white;" data-bs-dismiss="modal">Hủy</button>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>

            </div>
        </div>
    </div>
</body>
</html>