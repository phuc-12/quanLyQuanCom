<?php
    include_once('clsupload.php');
    $p = new upload();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Món Ăn</title>
    <link rel="stylesheet" type="text/css" href="../../../css/admin_css/admin_customer.css">
    <link rel="stylesheet" href="../../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
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
                <h3>THÊM MÓN ĂN</h3>   
                <form method="post" enctype="multipart/form-data" name="form1" id="form1">
                    <table style="margin:0; height: 500px;" style="width: 50%; float:left;">
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
                            <td style="width: 150px;"><label for="donViTinh">Đơn Vị Tính:</label></td>
                            <td><input type="input" class="form-control" size="200" id="donViTinh" placeholder="Nhập đơn vị tính" name="donViTinh"></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="gia">Giá Món Ăn:</label></td>
                            <td><input type="input" class="form-control" size="200" id="gia" placeholder="Nhập giá món ăn" name="gia"></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="maLoaiMon">Loại Món Ăn</label></td>
                            <td>
                                <select name="maLoaiMon" id="maLoaiMon">
                                    <option value="1">Món Mặn</option>
                                    <option value="2">Món Chay</option>
                                    <option value="3">Món Tráng Miệng</option>
                                    <option value="4">Đồ Uống</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="nguyenLieu">Nguyên Liệu Món:</label></td>
                            <td><input type="input" class="form-control" size="200" id="nguyenLieu" placeholder="Nhập Nguyên Liệu món ăn" name="nguyenLieu"></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="moTa">Mô Tả Món Ăn:</label></td>
                            <td><textarea class="form-control" size="200" id="moTa" placeholder="Nhập mô tả món ăn" name="moTa" rows="5"></textarea></td>
                            
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="myfile">Chọn Ảnh:</label></td>
                            <td><input type="file" name="myfile" id="myfile"></td>
                        </tr>
                        <tr>
                            <td colspan=2 style="text-align:center;">
                                <input type="submit" name="btnthem" id="btnthem" value="Thêm" style="display: inline-block;padding: 10px 20px;background-color: #FFCD29;color: white;text-align: center;border-radius: 5px;text-decoration: none; border: 0;">
                                <a href="../managementfood.php" style="display: inline-block;padding: 10px 20px;background-color: #FFCD29;color: white;text-align: center;border-radius: 5px;text-decoration: none;">Hủy</a>
                            </td>

                            
                        </tr>
                    </table>
                    <?php
                        error_reporting(1);        
                        switch($_REQUEST['btnthem'])
                        {
                            case 'Thêm':
                            {
                                $maMon=$_REQUEST['maMon'];
                                $tenMon=$_REQUEST['tenMon'];
                                $soLuong=$_REQUEST['soLuong'];
                                $donViTinh=$_REQUEST['donViTinh'];
                                $gia=$_REQUEST['gia'];
                                $maLoaiMon=$_REQUEST['maLoaiMon'];
                                $nguyenLieu=$_REQUEST['nguyenLieu'];
                                $moTa=$_REQUEST['moTa'];
                                if($maMon !='' && $tenMon !='' && $soLuong!=''&& $donViTinh !='' && $gia !='' && $maLoaiMon !='' && $nguyenLieu!=''&& $moTa !='')
                                {
                                    $name=$_FILES['myfile']['name'];
                                    $type=$_FILES['myfile']['type'];
                                    $tmp_name=$_FILES['myfile']['tmp_name'];
                                    // echo $name ."<br>";
                                    // echo $type ."<br>";
                                    // echo $tmp_name ."<br>";
                                    // echo $maMon ."<br>";
                                    // echo $maLoaiMon ."<br>";
                                    switch($maLoaiMon)
                                    {
                                        case 1: {$thucDon="monman";} break;
                                        case 2: {$thucDon="monchay";} break;
                                        case 3: {$thucDon="trangmieng";} break;
                                        case 4: {$thucDon="douong";} break;
                                    }
                                    // echo $thucDon;
                                    if($name!='')
                                    {
                                        if ($type =='image/jpeg' || $type =='image/png' || $type =='image/jpg')
                                        {
                                            if($p->uploadfile($name,$tmp_name,"quanLyQuanCom/img/$thucDon",$maMon,$maLoaiMon))
                                            {	
                                                $conn = new mysqli('localhost','trieu','123','db_quancomchipheo');
                                                if ($conn->connect_error) {
                                                    die("Connection failed: " . $conn->connect_error);
                                                }
                                                    
                                                if($conn)
                                                {
                                                    $tenanh=$name;
                                                    $str = "INSERT INTO ds_monan (maMon,tenMon,soLuong,donViTinh,gia,maLoaiMon,nguyenLieu,moTa,hinhAnh) VALUES ('$maMon',N'$tenMon','$soLuong',N'$donViTinh','$gia','$maLoaiMon',N'$nguyenLieu',N'$moTa','$tenanh')";
                                                    
                                                    if ($conn->query($str) === TRUE) {
                                                        if ($conn->affected_rows > 0) {
                                                            echo "<script>alert('Thêm món ăn thành công!');</script>";
                                                            
                                                        } else {
                                                            echo "<script>alert('không có món ăn nào được thêm!');</script>";
                                                        }
                                                    } 
                                                    else 
                                                    {
                                                        echo "Lỗi khi thêm món ăn" . $conn->error;
                                                    }
                                                    $conn->close();
                                                }
                                            }
                                            else
                                            {
                                                echo 'upload hình khong thanh cong' ."<br>";
                                                
                                            }
                                        }
                                        else
                                        {
                                            echo'chỉ được upload ảnh ';
                                        }
                                    }
                                    else
                                    {
                                        echo'chua tai ảnh lên!';
                                        return 0;	
                                    }
                                }
                                else
                                {
                                    echo"Vui lòng nhập đủ thông tin!!!";
                                    
                                }
                                break;
                            }

                        }
                    ?>
                </form>
            <div>

            </div>
        </div>
    </div>
</body>
</html>


                                
                                            