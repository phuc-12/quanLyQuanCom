<?php
    include_once("../../../model/chucnangadmin.php");
    $p=new tmdt();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Nhân Viên</title>
    <link rel="stylesheet" type="text/css" href="../../../css/admin_css/admin_customer.css">
    <link rel="stylesheet" href="../../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
        $layid = $_REQUEST['id'];
        $layten=$p->laycot("select hoTen from nhanvien where maNV = '$layid' limit 1");
        $layngaysinh=$p->laycot("select ngaySinh from nhanvien where maNV = '$layid' limit 1");
        $laymaloai=$p->laycot("select maLoaiNV from nhanvien where maNV = '$layid' limit 1");
		// $laydonGia=$p->laycot("select donGia from monan where maNV = '$layid' limit 1");
        // $laymaloai=$p->laycot("select maLoaiNV from monan where maNV = '$layid' limit 1");
        // $laytrangthai=$p->laycot("select trangThai from monan where maNV = '$layid' limit 1");
		// $laymota=$p->laycot("select mota from monan where maNV = '$layid' limit 1");
		// $laynguyenlieu=$p->laycot("select nguyenLieu from monan where maNV = '$layid' limit 1");
        // $layhinhanh=$p->laycot("select hinhAnh from monan where maNV = '$layid' limit 1");
        // switch($laymaloai)
        // {
        //     case 1: {$thucDon="monman";} break;
        //     case 2: {$thucDon="monchay";} break;
        //     case 3: {$thucDon="trangmieng";} break;
        //     case 4: {$thucDon="douong";} break;
        // }
        
    ?>
    <div class="container-fluid p-0">
        <div id="ql_header">
            <div class="logo">
                <p>logo</p>
            </div>

            <a class="trangChu" href="../../../index.php">
                <h4>Trang Chủ</h4>
            </a>
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
                        <a class="nav-link" href="../management_employ.php" style="background-color: #E5E5E5;">
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
                        <a class="nav-link" href="../management_gift.php">
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
                </ul>
            </div>

            <div class="section">
                <h3>THÔNG TIN NHÂN VIÊN</h3>
                <form method="post" enctype="multipart/form-data" name="form1" id="form1" style="width: 100%;">
                    <table style="margin:0; height: 500px;" style="width: 50%; float:left;">
                        <tr>
                            <td style="width: 150px;"><label for="maNV">Mã Nhân Viên:</label></td>
                            <td><input type="input" class="form-control" size="200" id="maNV" value="<?php echo $layid;?>" name="maNV"></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="hoTen">Họ Tên Nhân Viên:</label></td>
                            <td><input type="input" class="form-control" size="200" id="hoTen" value="<?php echo $layten;?>" name="hoTen"></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="ngaySinh">Ngày Sinh:</label></td>
                            <td><input type="input" class="form-control" size="200" id="ngaySinh" value="<?php echo $layngaysinh;?>" name="ngaySinh"></td>
                        </tr>
                        
                        <tr>
                            <td style="width: 150px;"><label for="maLoaiNV">Loại Nhân Viên:</label></td>
                            <td width="318" align="left">
                                <?php
                                    $p->chonloaiNV("select * from loainhanvien order by tenLoaiNV asc",$laymaloai);
                                ?> 
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan=2 style="text-align:center;">
                                <input type="submit" name="btnsua" id="btnsua" value="Cập Nhật" style="display: inline-block;padding: 10px 20px;background-color: #FFCD29;color: white;text-align: center;border-radius: 5px;text-decoration: none; border: 0;">
                                <a href="../management_employ.php" style="display: inline-block;padding: 10px 20px;background-color: #FFCD29;color: white;text-align: center;border-radius: 5px;text-decoration: none;">Hủy</a>
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
                                    $maNV=$_REQUEST['maNV'];
                                    $hoTen=$_REQUEST['hoTen'];
                                    $ngaySinh=$_REQUEST['ngaySinh'];
                                    $maLoaiNV=$_REQUEST['maLoaiNV'];
                                    $ngaySinhFormatted = date("Y-m-d", strtotime($ngaySinh));
                                    if($maNV!='')
                                    {
                                        if($p->themxoasua("UPDATE nhanvien SET hoTen = '$hoTen',ngaySinh = '$ngaySinhFormatted',maLoaiNV = '$maLoaiNV' WHERE maNV = '$maNV' LIMIT 1")==1)
                                        {
                                            echo'<script language="javascript">
                                            alert("Cập nhật thành công");	
                                            </script>';
                                        }
                                        echo'<script language="javascript">
                                        window.location="view_updateNV.php?id='.$maNV.'";
                                        </script>';
                                        
                                    }
                                    else
                                    {
                                        echo'<script language="javascript">
                                            alert("Vui lòng chọn nhân viên");	
                                            </script>';
                                    }
                                    break;
                                }

                            }
                        } 
                        else 
                        {
                            echo'<script language="javascript">
                            alert("Vui lòng chọn nhân viên");	
                            window.location="../management_employ.php";
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


                                
                                            