<?php
    include_once("../../../model/chucnangadmin.php");
    $p = new tmdt();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Món Ăn</title>
    <script src="../../../js/fontawesome.js"></script>
    <script src="../../../js/jquery-3.7.1.min.js"></script>
    <script src="../../../js/popper.min.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
    <script src="../../../js/themmonan.js"></script>

    <link rel="stylesheet" type="text/css" href="../../../css/admin_css/adminfood.css">
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
    <div class="container-fluid p-0">
        <div id="ql_header">
        <div class="logo" style="padding: 0; border-radius: 100px;">
                <a href="../../index.php"><img src="../../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
            </div>

            <a class="trangChu" href="../../../index.php">
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
                        <a class="nav-link" href="../admin.php">
                            <i class="fa fa-tachometer text-body"></i>
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
            <a href="../managementfood.php" class="fa fa-angle-left" style="text-decoration: none; color: black;font-size: 30px;width: 40px; height:40px; text-align: center; padding-top: 5px;"></a>
                <h3>THÊM MÓN ĂN</h3>   
                <form method="post" enctype="multipart/form-data" name="form1" id="form1" style="width: 80%;">
                    <table style="margin:0; height: 500px;" style="width: 50%; float:left;">
                        <tr>
                            <td style="width: 150px;"><label for="maMA">Mã Món Ăn:</label></td>
                            <td><input type="input" class="form-control" size="200" id="maMA" placeholder="Nhập mã món ăn" name="maMA"></td>
                            <td style="width: 200px;"><span id="errMa" class="err text-danger"><b style="font-size: 20px;">*</b></span></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="tenMA">Tên Món Ăn:</label></td>
                            <td><input type="input" class="form-control" size="200" id="tenMA" placeholder="Nhập tên món ăn" name="tenMA"></td>
                            <td style="width: 300px;"><span id="errTen" class="err text-danger"><b style="font-size: 20px;">*</b></span></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="soLuong">Số Lượng:</label></td>
                            <td><input type="input" class="form-control" size="200" id="soLuong" placeholder="Nhập số lượng món ăn" name="soLuong"></td>
                            <td><span id="errSL" class="err text-danger"><b style="font-size: 20px;">*</b></span></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="donViTinh">Đơn Vị Tính:</label></td>
                            <td><input type="input" class="form-control" size="200" id="donViTinh" placeholder="Nhập đơn vị tính" name="donViTinh"></td>
                            <td><span id="errDVT" class="err text-danger"><b style="font-size: 20px;">*</b></span></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="donGia">Giá Món Ăn:</label></td>
                            <td><input type="input" class="form-control" size="200" id="donGia" placeholder="Nhập giá món ăn" name="donGia"></td>
                            <td><span id="errGia" class="err text-danger"><b style="font-size: 20px;">*</b></span></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="maLoaiMA">Loại Món Ăn:</label></td>
                            <td>
                                <select name="maLoaiMA" id="maLoaiMA">
                                    <option value="1">Món Mặn</option>
                                    <option value="2">Món Chay</option>
                                    <option value="3">Nước Uống</option>
                                    <option value="4">Tráng Miệng</option>
                                </select>
                            </td>
                            <td><span id="errLoai" class="err text-danger"><b style="font-size: 20px;">*</b></span></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="nguyenLieu">Nguyên Liệu Món:</label></td>
                            <td><input type="input" class="form-control" size="200" id="nguyenLieu" placeholder="Nhập Nguyên Liệu món ăn" name="nguyenLieu"></td>
                            <td><span id="errNL" class="err text-danger"><b style="font-size: 20px;">*</b></span></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="moTa">Mô Tả Món Ăn:</label></td>
                            <td><textarea class="form-control" size="200" id="moTa" placeholder="Nhập mô tả món ăn" name="moTa" rows="5"></textarea></td>
                            <td><span id="errMoTa" class="err text-danger"><b style="font-size: 20px;">*</b></span></td>
                            
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="myfile">Chọn Ảnh:</label></td>
                            <td><input type="file" name="myfile" id="myfile"></td>
                            <td><span id="errAnh" class="err text-danger"><b style="font-size: 20px;">*</b></span></td>
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
                                $maMA=$_REQUEST['maMA'];
                                $tenMA=$_REQUEST['tenMA'];
                                $soLuong=$_REQUEST['soLuong'];
                                $donViTinh=$_REQUEST['donViTinh'];
                                $donGia=$_REQUEST['donGia'];
                                $maLoaiMA=$_REQUEST['maLoaiMA'];
                                $nguyenLieu=$_REQUEST['nguyenLieu'];
                                $moTa=$_REQUEST['moTa'];
                                if($maMA !='' && $tenMA !='' && $soLuong!=''&& $donViTinh !='' && $donGia !='' && $maLoaiMA !='' && $nguyenLieu!=''&& $moTa !='')
                                {
                                    $name=$_FILES['myfile']['name'];
                                    $type=$_FILES['myfile']['type'];
                                    $tmp_name=$_FILES['myfile']['tmp_name'];
                                    // echo $name ."<br>";
                                    // echo $type ."<br>";
                                    // echo $tmp_name ."<br>";
                                    // echo $maMA ."<br>";
                                    // echo $maLoaiMA ."<br>";
                                    switch($maLoaiMA)
                                    {
                                        case 1: {$thucDon="monman";} break;
                                        case 2: {$thucDon="monchay";} break;
                                        case 3: {$thucDon="douong";} break;
                                        case 4: {$thucDon="trangmieng";} break;
                                    }
                                    // echo $thucDon;
                                    if($name!='')
                                    {
                                        if ($type =='image/jpeg' || $type =='image/png' || $type =='image/jpg')
                                        {
                                            if($p->uploadfile($name,$tmp_name,"quanLyQuanCom/img/$thucDon",$maMA,$maLoaiMA))
                                            {	
                                                $conn = new mysqli('localhost','root','','db_chipheo');
                                                if ($conn->connect_error) {
                                                    die("Connection failed: " . $conn->connect_error);
                                                }
                                                    
                                                if($conn)
                                                {
                                                    $tenanh=$name;
                                                    $str = "INSERT INTO monan (maMA,tenMA,soLuong,donViTinh,donGia,maLoaiMA,nguyenLieu,moTa,hinhAnh) VALUES ('$maMA',N'$tenMA','$soLuong',N'$donViTinh','$donGia','$maLoaiMA',N'$nguyenLieu',N'$moTa','$tenanh')";
                                                    
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
                                        echo'Chưa tải ảnh lên!';
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


                                
                                            