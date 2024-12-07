<?php
    include_once('clsupload.php');
    $p = new upload();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Khách Hàng</title>
    
    <script src="../../../js/fontawesome.js"></script>
    <script src="../../../js/jquery-3.7.1.min.js"></script>
    <script src="../../../js/popper.min.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
    <script src="../../../js/themnhaKHien.js"></script>
    
    <link rel="stylesheet" type="text/css" href="../../../css/admin_css/admin_customer.css">
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
                        <a class="nav-link" href="../management_customer.php">
                            <i class="fa fa-address-card"></i>
                            Quản lý Khách Hàng
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../management_customer.php" style="background-color: #E5E5E5;">
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
            <a href="../management_customer.php" class="fa fa-angle-left" style="text-decoration: none; color: black;font-size: 30px;width: 40px; height:40px; text-align: center; padding-top: 5px;"></a>
                <h3>THÊM kHÁCH HÀNG</h3>
                <form method="post" enctype="multipart/form-data" name="form1" id="form1" style="width:60%;float: left;">
                    <table style="margin:0; height: 500px;" style="width: 50%; float:left;">
                        <tr>
                            <td style="width: 150px;"><label for="maKH">Mã Khách Hàng:</label></td>
                            <td><input type="input" class="form-control" size="200" id="maKH" placeholder="Nhập mã Khách Hàng" name="maKH"></td>
                            <td style="width: 200px;"><span id="errMa" class="err text-danger"><b style="font-size: 20px;">*</b></span></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="hoTen">Họ Tên Khách Hàng:</label></td>
                            <td><input type="input" class="form-control" size="200" id="hoTen" placeholder="Nhập tên Khách Hàng" name="hoTen"></td>
                            <td style="width: 200px;"><span id="errHoTen" class="err text-danger"><b style="font-size: 20px;">*</b></span></td>
                        </tr>
                        
                        <tr>
                            <td style="width: 150px;"><label for="maLoaiKH">Loại Khách Hàng:</label></td>
                            <td>
                                <select name="maLoaiKH" id="maLoaiKH">
                                    <option value="1">Bạc</option>
                                    <option value="2">Vàng</option>
                                    <option value="3">Kim Cương</option>
                                </select>
                            </td>
                            <td style="width: 200px;"><span id="" class="err text-danger"><b style="font-size: 20px;">*</b></span></td>
                        </tr>

                        <tr>
                            <td style="width: 150px;"><label for="diemTL">Điểm Tích Lũy:</label></td>
                            <td><input type="input" class="form-control" size="200" id="diemTL" placeholder="Nhập điểm tích lũy Khách Hàng" name="diemTL"></td>
                            <td style="width: 200px;"><span id="errdiemTL" class="err text-danger"><b style="font-size: 20px;">*</b></span></td>
                        </tr>
                        
                        <tr>
                            <td colspan=2 style="text-align:center;">
                                <input type="submit" name="btnthem" id="btnthem" value="Thêm" style="display: inline-block;padding: 10px 20px;background-color: #FFCD29;color: white;text-align: center;border-radius: 5px;text-decoration: none; border: 0;">
                                <a href="../management_customer.php" style="display: inline-block;padding: 10px 20px;background-color: #FFCD29;color: white;text-align: center;border-radius: 5px;text-decoration: none;">Hủy</a>
                            </td>

                            
                        </tr>
                    </table>
                    <?php
                        error_reporting(1);        
                        switch($_REQUEST['btnthem'])
                        {
                            case 'Thêm':
                            {
                                $maKH=$_REQUEST['maKH'];
                                $hoTen=$_REQUEST['hoTen'];
                                $diemTichLuy=$_REQUEST['diemTL'];
                                $maLoaiKH=$_REQUEST['maLoaiKH'];
                                
                                if($maKH !='' && $hoTen !='' && $diemTichLuy!=''&& $maLoaiKH !='')
                                {
                                    $conn = new mysqli('localhost','root','','db_chipheo');
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }
                                        
                                    if($conn)
                                    {
                                        // Chuyển định dạng ngày nếu cần thiết
                                        
                                        $str = "INSERT INTO khachhang (maKH,hoTen,maLoaiKH,diemTichLuy) VALUES ('$maKH',N'$hoTen','$maLoaiKH','$diemTichLuy')";
                                        
                                        if ($conn->query($str) === TRUE) {
                                            if ($conn->affected_rows > 0) {
                                                echo "<script>alert('Thêm Khách Hàng thành công!');</script>";
                                                
                                            } else {
                                                echo "<script>alert('không có Khách Hàng nào được thêm!');</script>";
                                            }
                                        } 
                                        else 
                                        {
                                            echo "Lỗi khi thêm Khách Hàng" . $conn->error;
                                        }
                                        $conn->close();
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


                                
                                            