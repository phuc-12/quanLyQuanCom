<?php
    include_once("../../../model/chucnangadmin.php");
    $p = new tmdt();

    $conn = $p->connect();

    $query = "SELECT MAX(maNVL) as maxMa FROM nguyenlieu";
    $result = $conn->query($query);

    $newInvoiceCode = 1; 
    if ($result && $row = $result->fetch_assoc()) {
        $maxMa = $row['maxMa'];
        $newInvoiceCode = $maxMa + 1;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Nguyên Vật Liệu</title>
    
    <script src="../../../js/fontawesome.js"></script>
    <script src="../../../js/jquery-3.7.1.min.js"></script>
    <script src="../../../js/popper.min.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
    <script src="../../../js/CTKM.js"></script>
    <script src="../../../js/themnvl.js"></script>
    
    <link rel="stylesheet" type="text/css" href="../../../css/admin_css/admin_employ.css">
    <link rel="stylesheet" href="../../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../../js/dateTime.js" defer></script> 
    <script src="../../js/themnvl.js"> </script>

    
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
            <div class="nav-item dropdown">
                <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" style="float:right; margin-top: 20px; padding: 0;margin-right: 15px;">👤</a>
                <ul class="dropdown-menu">
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
                        <a class="nav-link" href="../management_gift.php" >
                            <i class="fa fa-gift"></i>
                            Quản lý chương trình khuyến mãi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../management_order.php" >
                            <i class="fa fa-shopping-cart"></i>
                            Quản lý đơn hàng
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="management_materials.php" style="background-color: #E5E5E5;">
                            <i class="fa fa-cubes"></i>
                            Quản lý nguyên liệu
                        </a>
                    </li>
                </ul>
            </div>

            <div class="section">
            <a href="../management_materials.php" class="fa fa-angle-left" style="text-decoration: none; color: black;font-size: 30px;width: 40px; height:40px; text-align: center; padding-top: 5px;"></a>
                <h3>THÊM NGUYÊN VẬT LIỆU</h3>
                <form method="post" enctype="multipart/form-data" name="form1" id="form1" style="width:60%;float: left;">
                    <table style="margin:0; height: 500px;" style="width: 50%; float:left;">
                        <tr>
                            <td style="width: 150px;"><label for="maNVL">Mã Nguyên Vật Liệu:</label></td>
                            <td><input type="input" class="form-control" size="200" id="maNVL" placeholder="Nhập mã nguyên vật liệu" name="maNVL" value="<?php echo $newInvoiceCode?>" readonly></td>
                            <!-- <td style="width: 200px;"><span id="errMa" class="err text-danger"><b style="font-size: 20px;">*</b></span></td> -->
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="tenNVL">Tên Nguyên Vật Liệu:</label></td>
                            <td><input type="input" class="form-control" size="200" id="tenNVL" placeholder="Nhập tên nguyên vật liệu" name="tenNVL"></td>
                            <!-- <td style="width: 200px;"><span id="errTen" class="err text-danger"><b style="font-size: 20px;">*</b></span></td> -->
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="slTon">Số Lượng:</label></td>
                            <td><input type="input" class="form-control" size="200" id="moTa" placeholder="Nhập số lượng" name="slTon"></td>
                            <!-- <td style=" hight: 400px; width: 200px;"><span id="errMoTa" class="err text-danger"><b style="font-size: 20px;">*</b></span></td> -->
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="donViTinh">Đơn Vị Tính:</label></td>
                            <td><input type="input" class="form-control" size="200" id="donViTinh" placeholder="Nhập đơn vị tính" name="donViTinh"></td>
                            <!-- <td><span id="errDVT" class="err text-danger"><b style="font-size: 20px;">*</b></span></td> -->
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="moTa">Mô Tả:</label></td>
                            <td><input type="input" class="form-control" size="200" id="moTa" placeholder="Nhập mô tả" name="moTa"></td>
                            <!-- <td style=" hight: 400px; width: 200px;"><span id="errMoTa" class="err text-danger"><b style="font-size: 20px;">*</b></span></td> -->
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="ngayNhap">Ngày Nhập: </label></td>
                            <td>
                                <input type="date" id="ngayNhap" name="ngayNhap" placeholder="DD/MM/YY" class="form-control">
                                <span class="text-danger" id="tbngayNhap"></span>
                                <script>
                                    // Lấy input element
                                    const inputNgayNhap = document.getElementById('ngayNhap');
                                                        
                                    // Lấy ngày hiện tại
                                    const today = new Date();
                                                        
                                    // Định dạng ngày theo chuẩn yyyy-mm-dd
                                    const formattedDate = today.toISOString().split('T')[0];
                                                        
                                    // Gán giá trị ngày hiện tại vào input
                                    document.getElementById('ngayNhap').value = formattedDate;
                                </script></td>
                            <!-- <td style=" hight: 400px; width: 200px;"><span id="errStartDate" class="err text-danger"><b style="font-size: 20px;">*</b></span></td> -->
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="ngayHetHan">Ngày Hết Hạn: </label></td>
                            <td><input type="date" class="form-control" size="200" id="ngayHetHan"name="ngayHetHan"></td>
                            <!-- <td style=" hight: 400px; width: 200px;"><span id="errEndDate" class="err text-danger"><b style="font-size: 20px;">*</b></span></td> -->
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="trangThai">Trạng Thái:</label></td>
                            <td><input type="input" class="form-control" size="200" id="trangThai"  name="trangThai" value="<?php echo $trangThai=1?>" readonly></td>
                            <!-- <td style="width: 200px;"><span id="" class="err text-danger"><b style="font-size: 20px;">*</b></span></td> -->
                        </tr>
                        
                        
                        <tr>
                            <td colspan=2 style="text-align:center;">
                                <input type="submit" name="btnthem" id="btnthem" value="Thêm" style="display: inline-block;padding: 10px 20px;background-color: #FFCD29;color: white;text-align: center;border-radius: 5px;text-decoration: none; border: 0;">
                                <a href="../management_materials.php" style="display: inline-block;padding: 10px 20px;background-color: #FFCD29;color: white;text-align: center;border-radius: 5px;text-decoration: none;">Hủy</a>
                            </td>

                            
                        </tr>
                    </table>
                    <?php
                        error_reporting(1);        
                        switch($_REQUEST['btnthem'])
                        {
                            case 'Thêm':
                            {
                                $maNVL= $newInvoiceCode;
                                $tenNVL=$_REQUEST['tenNVL'];
                                $slTon=$_REQUEST['slTon'];
                                $donViTinh=$_REQUEST['donViTinh'];
                                $moTa=$_REQUEST['moTa'];
                                $trangThai=$_REQUEST['trangThai'];
                                $ngayNhap= $_REQUEST['ngayNhap'];
                                $ngayHetHan=$_REQUEST['ngayHetHan'];
                                $ngayNhapFormatted = date("Y-m-d", strtotime($ngayNhap));
                                $ngayHetHanFormatted = date("Y-m-d", strtotime($ngayHetHan));
                                if($maNVL !='' && $tenNVL !='' && $slTon !=''&& $donViTinh !='' && $moTa!=''&& $trangThai !='' && $ngayNhapFormatted!=''&& $ngayHetHanFormatted !='')
                                {
                                    $conn = new mysqli('localhost','root','','db_chipheo');
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }
                                        
                                    if($conn)
                                    {
                                        // Chuyển định dạng ngày nếu cần thiết
                                        
                                        $str = "INSERT INTO nguyenlieu (maNVL,tenNVL,slTon,donViTinh,moTa,ngayNhap,ngayHetHan,trangThai) VALUES ('$maNVL',N'$tenNVL','$slTon','$donViTinh','$moTa','$ngayNhapFormatted','$ngayHetHanFormatted','$trangThai')";
                                        
                                        if ($conn->query($str) === TRUE) {
                                            if ($conn->affected_rows > 0) {
                                                echo "<script>alert('Thêm nguyên vật liệu thành công!');</script>";
                                                echo'<script language="javascript">
                                                            window.location="../management_materials.php";
                                                            </script>';
                                            } else {
                                                echo "<script>alert('không có nguyên vật liệu nào được thêm!');</script>";
                                            }
                                        } 
                                        else 
                                        {
                                            echo "Lỗi khi thêm nguyên vật liệu" . $conn->error;
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


                                
                                            