<?php
    include_once('clsupload.php');
    $p = new upload();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Nhân Viên</title>
    <link rel="stylesheet" type="text/css" href="../../../css/admin_css/admin_customer.css">
    <link rel="stylesheet" href="../../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid p-0">
        <div id="ql_header">
        <div class="logo" style="padding: 0; border-radius: 100px;">
                <a href="../../index.php"><img src="../../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
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
                <h3>THÊM NHÂN VIÊN</h3>
                <form method="post" enctype="multipart/form-data" name="form1" id="form1">
                    <table style="margin:0; height: 500px;" style="width: 50%; float:left;">
                        <tr>
                            <td style="width: 150px;"><label for="maNV">Mã Nhân Viên:</label></td>
                            <td><input type="input" class="form-control" size="200" id="maNV" placeholder="Nhập mã nhân viên" name="maNV"></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="hoTen">Họ Tên Nhân Viên:</label></td>
                            <td><input type="input" class="form-control" size="200" id="hoTen" placeholder="Nhập tên nhân viên" name="hoTen"></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="ngaySinh">Ngày Sinh:</label></td>
                            <td><input type="input" class="form-control" size="200" id="ngaySinh" placeholder="Nhập ngày sinh nhân viên" name="ngaySinh"></td>
                        </tr>
                        
                        <tr>
                            <td style="width: 150px;"><label for="maLoaiNV">Loại Nhân Viên:</label></td>
                            <td>
                                <select name="maLoaiNV" id="maLoaiNV">
                                    <option value="1">Bán Hàng</option>
                                    <option value="2">Bếp</option>
                                    <option value="3">Hậu Cần</option>
                                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan=2 style="text-align:center;">
                                <input type="submit" name="btnthem" id="btnthem" value="Thêm" style="display: inline-block;padding: 10px 20px;background-color: #FFCD29;color: white;text-align: center;border-radius: 5px;text-decoration: none; border: 0;">
                                <a href="../management_employ.php" style="display: inline-block;padding: 10px 20px;background-color: #FFCD29;color: white;text-align: center;border-radius: 5px;text-decoration: none;">Hủy</a>
                            </td>

                            
                        </tr>
                    </table>
                    <?php
                        error_reporting(1);        
                        switch($_REQUEST['btnthem'])
                        {
                            case 'Thêm':
                            {
                                $maNV=$_REQUEST['maNV'];
                                $hoTen=$_REQUEST['hoTen'];
                                $ngaySinh=$_REQUEST['ngaySinh'];
                                $maLoaiNV=$_REQUEST['maLoaiNV'];
                                $ngaySinhFormatted = date("Y-m-d", strtotime($ngaySinh));
                                if($maNV !='' && $hoTen !='' && $ngaySinh!=''&& $maLoaiNV !='')
                                {
                                    $conn = new mysqli('localhost','trieu','123','db_chipheo');
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }
                                        
                                    if($conn)
                                    {
                                        // Chuyển định dạng ngày nếu cần thiết
                                        
                                        $str = "INSERT INTO nhanvien (maNV,hoTen,ngaySinh,maLoaiNV) VALUES ('$maNV',N'$hoTen','$ngaySinhFormatted','$maLoaiNV')";
                                        
                                        if ($conn->query($str) === TRUE) {
                                            if ($conn->affected_rows > 0) {
                                                echo "<script>alert('Thêm nhân viên thành công!');</script>";
                                                
                                            } else {
                                                echo "<script>alert('không có nhân viên nào được thêm!');</script>";
                                            }
                                        } 
                                        else 
                                        {
                                            echo "Lỗi khi thêm nhân viên" . $conn->error;
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


                                
                                            