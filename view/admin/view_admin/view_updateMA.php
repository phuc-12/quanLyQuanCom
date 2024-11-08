<?php
    include_once("../../../model/chucnangadmin.php");
    $p=new tmdt();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Món Ăn</title>
    <link rel="stylesheet" type="text/css" href="../../../css/admin_css/admin_customer.css">
    <link rel="stylesheet" href="../../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
        $layid = $_REQUEST['id'];
        $layten=$p->laycot("select tenMon from ds_monan where maMon = '$layid' limit 1");
        $laysoluong=$p->laycot("select soLuong from ds_monan where maMon = '$layid' limit 1");
        $laydonvitinh=$p->laycot("select donViTinh from ds_monan where maMon = '$layid' limit 1");
		$laygia=$p->laycot("select gia from ds_monan where maMon = '$layid' limit 1");
        $laymaloai=$p->laycot("select maLoaiMon from ds_monan where maMon = '$layid' limit 1");
        $laytrangthai=$p->laycot("select trangThai from ds_monan where maMon = '$layid' limit 1");
		$laymota=$p->laycot("select mota from ds_monan where maMon = '$layid' limit 1");
		$laynguyenlieu=$p->laycot("select nguyenLieu from ds_monan where maMon = '$layid' limit 1");
        $layhinhanh=$p->laycot("select hinhAnh from ds_monan where maMon = '$layid' limit 1");
        switch($laymaloai)
        {
            case 1: {$thucDon="monman";} break;
            case 2: {$thucDon="monchay";} break;
            case 3: {$thucDon="trangmieng";} break;
            case 4: {$thucDon="douong";} break;
        }
        
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
                        <a class="nav-link" href="../managementfood.php" style="background-color: #E5E5E5;">
                            <i class="fa fa-spoon"></i>
                                Quản lý thực đơn
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../management_employ.php">
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
                <h3>THÔNG TIN MÓN ĂN</h3>
                <form method="post" enctype="multipart/form-data" name="form1" id="form1" style="width: 100%;">
                    <table style="margin:0; height: 500px;" style="width: 50%; float:left;">
                        <tr>
                            <td style="width: 150px;"><label for="maMon">Mã Món Ăn:</label></td>
                            <td><input type="input" class="form-control" size="200" id="maMon" value="<?php echo $layid;?>" name="maMon"></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="tenMon">Tên Món Ăn:</label></td>
                            <td><input type="input" class="form-control" size="200" id="tenMon" value="<?php echo $layten;?>" name="tenMon"></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="soLuong">Số Lượng:</label></td>
                            <td><input type="input" class="form-control" size="200" id="soLuong" value="<?php echo $laysoluong;?>" name="soLuong"></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="donViTinh">Đơn Vị Tính:</label></td>
                            <td><input type="input" class="form-control" size="200" id="donViTinh" value="<?php echo $laydonvitinh;?>" name="donViTinh"></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="gia">Giá Món Ăn:</label></td>
                            <td><input type="input" class="form-control" size="200" id="gia" value="<?php echo $laygia;?>" name="gia"></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="maLoaiMon">Loại Món Ăn</label></td>
                            <td width="318" align="left">
                                <?php
                                    $p->choncty("select * from ds_loaimon order by tenLoaiMon asc",$laymaloai);
                                ?> 
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="nguyenLieu">Nguyên Liệu Món:</label></td>
                            <td><input type="input" class="form-control" size="200" id="nguyenLieu" value="<?php echo $laynguyenlieu;?>" name="nguyenLieu"></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="trangThai">Trạng Thái:</label></td>
                            <td><input type="input" class="form-control" size="200" id="trangThai" value="<?php echo $laytrangthai;?>" name="trangThai"></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="moTa">Mô Tả Món Ăn:</label></td>
                            <td><textarea class="form-control" size="200" id="moTa"  name="moTa" rows="5"><?php echo $laymota;?></textarea></td>
                            
                        </tr>
                        <tr>
                            <td colspan=2 style="text-align:center;">
                                <input type="submit" name="btnsua" id="btnsua" value="Cập Nhật" style="display: inline-block;padding: 10px 20px;background-color: #FFCD29;color: white;text-align: center;border-radius: 5px;text-decoration: none; border: 0;">
                                <a href="../managementfood.php" style="display: inline-block;padding: 10px 20px;background-color: #FFCD29;color: white;text-align: center;border-radius: 5px;text-decoration: none;">Hủy</a>
                            </td>

                            
                        </tr>
                    </table>
                    <div style="width: 400px; height: 400px; position: absolute; top: 150px; right: 150px; background-color: black;">
                        <img src="../../../img/<?php echo $thucDon?>/<?php echo $layhinhanh?>" alt="" style="width: 100%; height: 100%;">
                    </div>
                    <?php
                        error_reporting(1);        
                        if($_REQUEST['id']!='')
                        {
                            switch($_REQUEST['btnsua'])
                            {
                                case 'Cập Nhật':
                                {
                                    $maMon=$_REQUEST['maMon'];
                                    $tenMon=$_REQUEST['tenMon'];
                                    $soLuong=$_REQUEST['soLuong'];
                                    $donViTinh=$_REQUEST['donViTinh'];
                                    $gia=$_REQUEST['gia'];
                                    $maLoaiMon=$_REQUEST['maLoaiMon'];
                                    $trangThai=$_REQUEST['trangThai'];
                                    $nguyenLieu=$_REQUEST['nguyenLieu'];
                                    $moTa=$_REQUEST['moTa'];
                                    if($maMon!='')
                                    {
                                        if($p->themxoasua("UPDATE ds_monan SET tenMon = '$tenMon',soLuong = '$soLuong',donViTinh = '$donViTinh',gia = '$gia',maLoaiMon = '$maLoaiMon',trangThai = '$trangThai',nguyenLieu = '$nguyenLieu',moTa = '$moTa' WHERE maMon = '$maMon' LIMIT 1")==1)
                                        {
                                            echo'<script language="javascript">
                                            alert("Cập nhật thành công");	
                                            </script>';
                                        }
                                        echo'<script language="javascript">
                                        window.location="view_updateMA.php?id='.$maMon.'";
                                        </script>';
                                        
                                    }
                                    else
                                    {
                                        echo'<script language="javascript">
                                            alert("Vui lòng chọn món ăn");	
                                            </script>';
                                    }
                                    break;
                                }

                            }
                        } 
                        else 
                        {
                            echo'<script language="javascript">
                            alert("Vui lòng chọn món ăn");	
                            window.location="../managementfood.php";
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


                                
                                            