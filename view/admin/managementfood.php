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
    <script src="../../js/jquery-3.7.1.min.js"></script>
    <script src="../../js/popper.min.js"></script>
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
                            <h5 style="width: 250px; height: 30px; float: left; margin-left: 10px;"><b>MÓN CÒN</b> <br> <b style="color:red;">2 MÓN</b></h5>
                        </div>
                        <div>
                            <i class="fa fa-frown-o"></i>
                            <h5 style="width: 250px; height: 30px; float: left; margin-left: 10px;"><b>MÓN ĐÃ HẾT</b> <br> <b style="color:red;">1 MÓN</b></h5>
                        </div>
                    </div>
                </div>

                <div id="ds_food">
                    <div style="width: 100%; height: 60px; padding: 10px; border-bottom: 0.5px solid #E5E5E5;">
                        <p style="font-size: 20px; float: left;"><b>DANH SÁCH THỰC ĐƠN</b></p>
                        <button type="button" class="btn btn-warning" style="float:right;" data-bs-toggle="modal" data-bs-target="#themMon" id="openModalBtn">Thêm món ăn</button>
                    </div>
                    <?php

                        error_reporting(1);
                        include_once ("view_admin/view_food.php");

                    ?>

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
                            <form action="managementfood.php?ThemMonAn" method="POST" enctype="multipart/form-data" name="form1" id="form1">
                                <div style="width: 65%; float: left;">
                                    <table style="margin:0; height: 500px;">
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
                                            <td style="width: 150px;"><label for="donVi">Đơn Vị Tính:</label></td>
                                            <td><input type="input" class="form-control" size="200" id="donVi" placeholder="Nhập đơn vị tính" name="donVi"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px;"><label for="gia">Giá Món Ăn:</label></td>
                                            <td><input type="input" class="form-control" size="200" id="gia" placeholder="Nhập giá món ăn" name="gia"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px;"><label for="loaiMon">Loại Món Ăn</label></td>
                                            <td>
                                                <?php
                                                    error_reporting(1);
                                                    include_once ("view_admin/view_loaimon.php");
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px;"><label for="moTa">Mô Tả Món Ăn:</label></td>
                                            <td><textarea class="form-control" size="200" id="moTa" placeholder="Nhập mô tả món ăn" name="moTa" rows="5"></textarea></td>
                                            
                                        </tr>
                                        
                                    </table>
                                </div>
                                <div style="width: 35%; float: right; padding: 10px 40px;">
                                    <div style="width: 300px; height: 300px; background-color: #E5E5E5; padding: 20px;">
                                        <img src="" alt="" style="width: 100%; height: 100%; border-radius: 10px;">
                                    </div>
                                    <div align="center" style="margin-top: 10px;">
                                        <!-- <button type="file" class="btn btn" style="background-color: #FFCD29; color:white;">Thêm hình</button> -->
                                        <input type="file" name="hinhAnh" id="hinhAnh">
                                    </div>
                                    
                                </div>
                                    
                            </form>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn" style="background-color: #FFCD29; color:white;" value="Thêm" name="btnThem" id="btn">Thêm</button>
                                <button type="button" class="btn btn" style="background-color: #FFCD29; color:white;" data-bs-dismiss="modal">Hủy</button>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
                
                <?php
                    if(isset($_GET['ThemMonAn']))
					{
						if(isset($_POST["btnThem"])){
                            $maMon=$_POST["maMon"];
                            $tenMon=$_POST["tenMon"];
                            $soLuong=$_POST["soLuong"];
                            $donViTinh=$_POST["donViTinh"];
                            $gia=$_POST["gia"];
                            $maLoaiMon=$_POST["maLoaiMon"];
                            $moTa=$_POST["moTa"];
                            $hinhAnh=$_FILES["hinhAnh"]["name"];
                            if($gia > 0)
                            {
                                if($_FILES["hinhAnh"]["type"]=="image/png" || $_FILES["hinhAnh"]["type"]=="image/jpeg" || $_FILES["hinhAnh"]["type"]=="image/jpg")
                                {
                                    switch($maLoaiMon)
                                    {
                                        case 1: {$tenLoaiMon="monman"; break;}
                                        case 2: {$tenLoaiMon="monchay"; break;}
                                        case 3: {$tenLoaiMon="trangmieng"; break;}
                                        case 4: {$tenLoaiMon="douong"; break;}
                                    }
                                    if(move_uploaded_file($_FILES["hinhAnh"]["tmp_name"],"img/".$tenLoaiMon."/".$hinhanh))
                                    {
                                        include_once("controler/cMonAn.php");
                                        $p = new CMonAn();
                            
                                        $result = $p->themMA($maMon,$tenMon,$soLuong,$donViTinh,$gia,$moTa,$maLoaiMon,$hinhAnh);
                                        if ($result){
                                            echo "<scrip>alert('Thêm thành công');</scrip>";
                                        }else{
                                            echo "<scrip>alert('Thêm thất bại');</scrip>";
                                        }
                                        
                                    }else
                                        echo "<scrip>alert('Upload thất bại');</scrip>";
                                }
                                else{
                                    echo "<scrip>alert('Chỉ chấp nhận loại file ảnh');</scrip>";
                                }
                            }
                            else
                                echo "<scrip>alert('Giá không được số âm');</scrip>";
                        }
					}
                ?>

            </div>

            <div>

            </div>
        </div>
    </div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    const openModalBtn = document.getElementById("openModalBtn");
    // Mở modal và thay đổi URL khi nhấn nút
    openModalBtn.addEventListener("click", function() {    
        // Thay đổi URL của trình duyệt mà không tải lại trang
        history.pushState(null, "", "managementfood.php?ThemMonAn");
        });

    });

</script>
</html>