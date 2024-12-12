<?php
    include_once("../../../model/chucnangadmin.php");
    $p=new tmdt();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Chương Trình Khuyến Mãi</title>

    <script src="../../../js/fontawesome.js"></script>
    <script src="../../../js/jquery-3.7.1.min.js"></script>
    <script src="../../../js/popper.min.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
    <script src="../../../js/CTKM.js"></script>

    <link rel="stylesheet" type="text/css" href="../../../css/admin_css/admin_employ.css">
    <link rel="stylesheet" href="../../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../../js/dateTime.js" defer></script> 

</head>
<style>
    .fa-angle-left:hover
    {
        background-color: white;
        border-radius: 10px;
    }

</style>
<body>
    <?php
        $layid = $_REQUEST['id'];
        $laytenctkm=$p->laycot("select tenKM from ctkm where maKM = '$layid' limit 1");
        $laymoTa=$p->laycot("select moTa from ctkm where maKM = '$layid' limit 1");
        $layTrangThai=$p->laycot("select trangThai from ctkm where maKM = '$layid' limit 1");
        $layChietKhau=$p->laycot("select chietKhau from ctkm where maKM = '$layid' limit 1");
        $layNgayBatDau=$p->laycot("select thoiGianBatDau from ctkm where maKM = '$layid' limit 1");
        $laytenNgayKetThuc=$p->laycot("select thoiGianKetThuc from ctkm where maKM = '$layid' limit 1");
    ?>
    <div class="container-fluid p-0">
        <div id="ql_header">
        <div class="logo" style="padding: 0; border-radius: 100px;">
                <a href="../../index.php"><img src="../../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
            </div>

            <!-- <a class="trangChu" href="../../../index.php">
                <h4>Trang Chủ</h4>
            </a> -->
            <div class="nav-item dropdown">
                <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" style="float:right; margin-top: 20px; padding: 0;margin-right: 15px;">👤</a>
                <ul class="dropdown-menu">
                    <!-- <li><a class="dropdown-item" href="#">Thông Tin Cá Nhân</a></li>
                    <li><a class="dropdown-item" href="#">Cập Nhật Thông Tin</a></li> -->
                    <li><a class="dropdown-item" href="../../index.php">Đăng Xuất</a></li>
                </ul>
            </div>
            <div class="date" style="float:right; margin-right: 100px; margin: 20px;"><span>📅</span><span id="currentDate"></span></div>
        </div>

        <div id="content">
            <div class="nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../admin.php">
                            <i class="fa fa-tachometer"></i>
                                Tổng quát
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../managementfood.php">
                            <i class="fa fa-spoon"></i>
                                Quản lý thực đơn
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../management_employ.php" >
                            <i class="fa fa-address-card"></i>
                            Quản lý nhân viên
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../management_customer.php">
                            <i class="fa fa-address-card-o"></i>
                            Quản lý khách hàng
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../management_gift.php" style="background-color: #E5E5E5;">
                            <i class="fa fa-gift"></i>
                            Quản lý chương trình khuyến mãi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../management_order.php">
                            <i class="fa fa-shopping-cart"></i>
                            Quản lý đơn hàng
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../management_materials.php">
                            <i class="fa fa-cubes"></i>
                            Quản lý nguyên liệu
                        </a>
                    </li>
                </ul>
            </div>

            <div class="section">
            <a href="../management_gift.php" class="fa fa-angle-left" style="text-decoration: none; color: black;font-size: 30px;width: 40px; height:40px; text-align: center; padding-top: 5px;"></a>
                <h3>THÔNG TIN CHƯƠNG TRÌNH KHUYẾN MÃI</h3>
                <form method="post" enctype="multipart/form-data" name="form1" id="form1" style="width:60%;float: left;">
                    <table style="margin:0; height: 500px;" style="width: 50%; float:left;">
                        <tr>
                            <td style="width: 150px;"><label for="maKM">Mã Chương Trình Khuyến Mãi:</label></td>
                            <td><input type="input" class="form-control" size="200" id="maKM" placeholder="Nhập mã chương trình khuyến mãi" name="maKM" value="<?php echo $layid;?>" readonly></td>
                            <!-- <td style="width: 200px;"><span id="errMa" class="err text-danger"><b style="font-size: 20px;">*</b></span></td> -->
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="tenKM">Tên Khuyến Mãi:</label></td>
                            <td><input type="input" class="form-control" size="200" id="tenKM" placeholder="Nhập tên chương trình khuyến mãi" name="tenKM" value="<?php echo $laytenctkm;?>"></td>
                            <td style="width: 200px;"><span id="errTen" class="err text-danger"><b style="font-size: 20px;">*</b></span></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="moTa">Mô Tả:</label></td>
                            <td><input type="input" class="form-control" size="200" id="moTa" placeholder="Nhập mô tả" name="moTa" value="<?php echo $laymoTa;?>"></td>
                            <td style=" hight: 400px; width: 200px;"><span id="errMoTa" class="err text-danger"><b style="font-size: 20px;">*</b></span></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="trangThai" >Trạng Thái</label></td>
                            <td><input type="input" class="form-control" size="200" id="trangThai" placeholder="Nhập mô tả" name="trangThai" value="<?php echo $layTrangThai;?>"></td>
                            <td style="width: 200px;"><span id="errTrangThai" class="err text-danger"><b style="font-size: 20px;">*</b></span></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="chietKhau">Chiết Khấu:</label></td>
                            <td><input type="input" class="form-control" size="200" id="chietKhau" placeholder="Nhập tên chiết khấu" name="chietKhau" value="<?php echo $layChietKhau;?>"></td>
                            <td style="width: 200px;"><span id="errChietKhau" class="err text-danger"><b style="font-size: 20px;">*</b></span></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="thoiGianBatDau">Thời Gian Bắt Đầu:</label></td>
                            <td><input type="date" class="form-control" size="200" id="thoiGianBatDau" placeholder="Nhập thời gian bắt đầu" name="thoiGianBatDau" value="<?php echo $layNgayBatDau;?>"></td>
                            <td style=" hight: 400px; width: 200px;"><span id="errStartDate" class="err text-danger"><b style="font-size: 20px;">*</b></span></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="thoiGianKetThuc">Thời Gian Kết Thúc:</label></td>
                            <td><input type="date" class="form-control" size="200" id="thoiGianKetThuc" placeholder="Nhập thời gian kết thúc" name="thoiGianKetThuc" value="<?php echo $laytenNgayKetThuc;?>"></td>
                            <td style=" hight: 400px; width: 200px;"><span id="errEndDate" class="err text-danger"><b style="font-size: 20px;">*</b></span></td>
                        </tr>
                        
                        
                        
                        <tr>
                            <td colspan=2 style="text-align:center;">
                            <input type="submit" name="btnsua" id="btnsua" value="Cập Nhật" style="display: inline-block;padding: 10px 20px;background-color: #FFCD29;color: white;text-align: center;border-radius: 5px;text-decoration: none; border: 0;">
                            <a href="../management_gift.php" style="display: inline-block;padding: 10px 20px;background-color: #FFCD29;color: white;text-align: center;border-radius: 5px;text-decoration: none;">Hủy</a>
                            </td>

                            
                        </tr>
                    </table>
                   
                    <?php
                        error_reporting(1);        
                        if($_REQUEST['id']!='')
                        {
                            switch($_REQUEST['btnsua'])
                            {
                                case 'Cập Nhật':
                                {
                                $maKM=$_REQUEST['maKM'];
                                $tenKM=$_REQUEST['tenKM'];
                                $moTa=$_REQUEST['moTa'];
                                $trangThai=$_REQUEST['trangThai'];
                                $chietKhau=$_REQUEST['chietKhau'];
                                $thoiGianBatDau= $_REQUEST['thoiGianBatDau'];
                                $thoiGianKetThuc=$_REQUEST['thoiGianKetThuc'];
                                $ngayBatDauFormatted = date("Y-m-d", strtotime($thoiGianBatDau));
                                $ngayKetThucFormatted = date("Y-m-d", strtotime($thoiGianKetThuc));
                                    if($maKM!='')
                                    {
                                        if($p->themxoasua("UPDATE ctkm SET 
                                            tenKM = '$tenKM', 
                                            moTa = '$moTa', 
                                            trangThai = '$trangThai', 
                                            chietKhau = '$chietKhau', 
                                            thoiGianBatDau = '$ngayBatDauFormatted', 
                                            thoiGianKetThuc = '$ngayKetThucFormatted' 
                                            WHERE maKM = '$maKM' LIMIT 1")==1)
                                        {
                                            echo'<script language="javascript">
                                            alert("Cập nhật thành công");	
                                            window.location="view_updateCTKM.php?id='.$maKM.'";
                                            </script>';
                                        }
                                    }
                                    else
                                    {
                                        echo'<script language="javascript">
                                            alert("Vui lòng chọn chương trình khuyến mãi");	
                                            </script>';
                                    }
                                    break;
                                }

                            }
                        } 
                        else 
                        {
                            echo'<script language="javascript">
                            alert("Vui lòng chọn chương trình khuyến mãi");	
                            window.location="../management_gift.php";
                            </script>';
                        }
                    ?>
                </form>
            <div>
            </div>
        </div>
    </div>
</body>
</html>


                                
                                            