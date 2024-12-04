<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Nhân Viên</title>
    <link rel="stylesheet" type="text/css" href="../../css/admin_css/admin_employ.css">
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../js/dateTime.js" defer></script> 
</head>
<style>
    #content .section #ds_food .navbar ul li:hover {
        background-color: #E5E5E5;
    }
</style>
<body>
    <?php
        error_reporting(1);
        $layid=$_REQUEST["id"];
    ?>
    <div class="container-fluid p-0">
        <div id="ql_header">
        <div class="logo" style="padding: 0; border-radius: 100px;">
                <a href="../../index.php"><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
            </div>

            <a class="trangChu" href="../../index.php">
                <h4>Trang Chủ</h4>
            </a>
            <div class="date" style="float:right; margin-right: 100px; margin: 20px;"><span>📅</span><span id="currentDate"></span></div>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" style="float:right; margin-top: 20px; padding: 0;">👤</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Thông Tin Cá Nhân</a></li>
                    <li><a class="dropdown-item" href="#">Cập Nhật Thông Tin</a></li>
                    <li><a class="dropdown-item" href="../../index.php">Đăng Xuất</a></li>
                </ul>
            </div>
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
                        <a class="nav-link" href="managementfood.php">
                            <i class="fa fa-spoon"></i>
                                Quản lý thực đơn
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="management_employ.php" style="background-color: #E5E5E5;">
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

            <div class="section" style="background-color: #E5E5E5;">
                <h3 style="margin-bottom: 30px;"><b>QUẢN LÝ NHÂN VIÊN</b></h3>

                <div class="thongKe_food" style="border-radius: 10px;">
                    <div style="width: 100%; height: 60px; padding: 10px; border-bottom: 0.5px solid #E5E5E5;">
                        <p style="font-size: 20px; float: left;">Thống kê số liệu</p>
                        <a href="#ds_food" class="btn btn-outline-secondary" style="float:right;">Tất cả</a>
                    </div>
                    <div style="padding: 50px; width: 100%; height: 150px; border-bottom: 1px solid #E5E5E5;">
                        <div>
                            <i class="fa fa-address-card"></i>
                            <h5 style="width: 250px; height: 30px; float: left; margin-left: 10px;"><b>TỔNG SỐ LƯỢNG</b> <br> <b style="color:red;">
                                <?php
                                    include_once("../../controler/cNhanVien.php");
                                    $p = new CNhanVien();
                                    if(isset($_REQUEST['idLoai']))
                                    {
                                        $idLoai = $_REQUEST['idLoai'];
                                        $countNV = $p->GetCountNVByLNV($idLoai);
                                    }
                                    else 
                                    {
                                        $countNV = $p->GetCountNV();
                                    }
                                    echo $countNV;
                                ?>
                                NHÂN VIÊN
                            </b></h5>
                        </div>
                        
                    </div>
                </div>

                <div id="ds_food">
                    <div style="width: 100%; height: 60px; padding: 10px; border-bottom: 0.5px solid #E5E5E5;">
                        <p style="font-size: 20px; float: left;"><b>DANH SÁCH NHÂN VIÊN</b></p> 
                    </div>
                    <div style="width: 100%; clear: both; height: 60px; background-color: white;">
                                <nav class="navbar navbar-expand-sm bg-white navbar-white p-0" style="width: 50%; float: left; height: 60px;">
                                    
                                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                    <ul class="navbar-nav">
                                    <?php  
                                        $idLoai = $_REQUEST['idLoai'];
                                        if($idLoai=='')
                                        {
                                            echo '<li class="nav-item" style="height: 60px; padding-top: 10px; border-right: 1px solid grey; background-color: #E5E5E5;">
                                        <a class="nav-link" href="management_employ.php" style="color: black;">Tất Cả Nhân Viên</a>
                                        </li>  ';
                                        }
                                        elseif ($idLoai==1||$idLoai==2||$idLoai==3||$idLoai==4)
                                        {
                                            echo '<li class="nav-item" style="height: 60px; padding-top: 10px; border-right: 1px solid grey;">
                                        <a class="nav-link" href="management_employ.php" style="color: black;">Tất Cả Nhân Viên</a>
                                        </li>  ';
                                        }
                                    //BÁN HÀNG
                                        if($idLoai==1)
                                        {
                                            echo '<li class="nav-item" style="height: 60px; padding-top: 10px; border-right: 1px solid grey; background-color: #E5E5E5;">
                                        <a class="nav-link" href="management_employ.php?idLoai=1" style="color: black;">Bán Hàng</a>
                                        </li>';
                                        }
                                        else {
                                            echo '<li class="nav-item" style="height: 60px; padding-top: 10px; border-right: 1px solid grey;">
                                        <a class="nav-link" href="management_employ.php?idLoai=1" style="color: black;">Bán Hàng</a>
                                        </li>';
                                        }
                                    //BẾP
                                        if($idLoai==2)
                                        {
                                            echo '<li class="nav-item" style="height: 60px; padding-top: 10px; border-right: 1px solid grey; background-color: #E5E5E5;">
                                        <a class="nav-link" href="management_employ.php?idLoai=2" style="color: black;">Đứng Bếp</a>
                                        </li> ';
                                        }
                                        else {
                                            echo '<li class="nav-item" style="height: 60px; padding-top: 10px; border-right: 1px solid grey;">
                                        <a class="nav-link" href="management_employ.php?idLoai=2" style="color: black;">Đứng Bếp</a>
                                        </li> ';
                                        }
                                    //HẬU CẦN
                                        if($idLoai==3)
                                        {
                                            echo '<li class="nav-item" style="height: 60px; padding-top: 10px; border-right: 1px solid grey; background-color: #E5E5E5;">
                                        <a class="nav-link" href="management_employ.php?idLoai=3" style="color: black;">Hậu Cần</a>
                                        </li> ';
                                        }
                                        else {
                                            echo '<li class="nav-item" style="height: 60px; padding-top: 10px; border-right: 1px solid grey;">
                                        <a class="nav-link" href="management_employ.php?idLoai=3" style="color: black;">Hậu Cần</a>
                                        </li> ';
                                        }
                    
                                        
                                ?>
                                        
                                        
                                         
                                        
                                    </ul>
                                    </div>

                            </nav>
                            <form method="post" enctype="multipart/form-data" name="form1" id="form1" style="width: 50%; float: right; background-color: white; padding-top: 10px;">
                                <a href="view_admin/view_insertNV.php" style="display: inline-block;padding: 10px 20px;background-color: #FFCD29;color: white;text-align: center;border-radius: 5px;text-decoration: none; float: right; margin-right: 10px; font-weight: 700;">THÊM NHÂN VIÊN</a>
                                <input type="submit" name="btnxoa" id="btnxoa" value="XÓA NHÂN VIÊN" onclick="return confirmDelete(<?php echo $layid; ?>)" style="display: inline-block;padding: 10px 20px;background-color: #FFCD29;color: white;text-align: center;border-radius: 5px;text-decoration: none; border: 0; float: right; margin-right: 10px; font-weight: 700;">
                                <a href="view_admin/view_updateNV.php?id=<?php echo $layid;?>" style="display: inline-block;padding: 10px 20px;background-color: #FFCD29;color: white;text-align: center;border-radius: 5px;text-decoration: none; float: right; margin-right: 10px; font-weight: 700;">CHI TIẾT</a>
                            </form>
                        </div>
                    <?php

                        error_reporting(1);
                        include("view_admin/view_nhanvien.php");

                    ?>
                </div>
                <div>
                <?php
                    // error_reporting(0);
                    include('../../model/chucnangadmin.php');
                    $k=new tmdt();
                    switch ($_POST['btnxoa'])
                    {
                        case 'XÓA NHÂN VIÊN':
                        {
                            if(isset($_REQUEST['id']))
                            {
                                $maXoa = $_REQUEST['id'];
                                // echo $maXoa."<br>";
                                $maLoai = $k->laycot("select maLoaiNV from nhanvien where maNV = '$maXoa' limit 1");
                                // echo $hinh."<br>";
                                // echo $maLoai ."<br>";
                                // echo $thucDon ."<br>";
                                if($maXoa!='')
                                {
                                    if($k->themxoasua("delete from nhanvien where maNV='$maXoa' limit 1")==1)
                                    {
                                        echo'<script language="javascript">
                                            alert("Xóa nhân viên thành công");	
                                            </script>';
                                    }
                                    else 
                                    {
                                        if($k->themxoasua("delete from nhanvien where maNV='$maXoa' limit 1")==1)
                                        {
                                            echo'<script language="javascript">
                                                alert("Xóa nhân viên thành công");	
                                                </script>';
                                        }
                                    }
                                }
                                else
                                {
                                    echo'<script language="javascript">
                                        alert("Vui lòng chọn nhân viên cần xóa");	
                                        </script>';
                                }
                                echo'<script language="javascript">
                                        window.location="management_employ.php";
                                        </script>';
                            }
                            else 
                            {
                                echo'<script language="javascript">
                                    alert("Vui lòng chọn nhân viên cần xóa");	
                                    </script>';
                            }
                            break;
                        }
                    }

                ?>
                </div>
            </div>

            <div>

            </div>
        </div>
    </div>
</body>
<script>
    function confirmDelete() {
        return confirm("Bạn có chắc chắn muốn xóa món ăn này?");
    }

</script>
</html>