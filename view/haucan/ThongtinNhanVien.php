<?php
    include_once("../../model/chucnangnhanvien.php");
    $p=new tmdt();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin nhân viên</title>
    <link rel="stylesheet" href="../../css/nhanVien.css">
    <link rel="stylesheet" href="../../css/thongtin.css">
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../js/dateTime.js" defer></script> 
    <script src="../../js/thongtin.js" defer></script> 
    <style>
        .header h1 {
    margin-top: -40px;
    margin-left: 100px;
    }
    </style>
</head>
<body>
    <?php
        $layidnguoidung = $_REQUEST['id'];
        $layid = $p->laycot("select maNV from nhanvien where idNguoiDung = '$layidnguoidung' limit 1");
        $layten=$p->laycot("select hoTen from nhanvien where maNV = '$layid' limit 1");
        $layngaysinh=$p->laycot("select ngaySinh from nhanvien where maNV = '$layid' limit 1");
        $laymaloai=$p->laycot("select maLoaiNV from nhanvien where maNV = '$layid' limit 1");
        $laysdt=$p->laycot("select t.SDT from nhanvien n join taikhoannguoidung t on n.idNguoiDung = t.idNguoiDung where maNV = '$layid' limit 1");
        $layemail=$p->laycot("select t.email from nhanvien n join taikhoannguoidung t on n.idNguoiDung = t.idNguoiDung where maNV = '$layid' limit 1");
        $laytrangthai=$p->laycot("select t.trangThai from nhanvien n join taikhoannguoidung t on n.idNguoiDung = t.idNguoiDung where maNV = '$layid' limit 1");
        $laydiachi=$p->laycot("select t.diaChi from nhanvien n join taikhoannguoidung t on n.idNguoiDung = t.idNguoiDung where maNV = '$layid' limit 1");

    ?>
    <div class="container-fluid p-0">
    <div class="header">
         <div class="logo" style="padding: 0; border-radius: 100px;">
                <a href="../../index.php"><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
        </div>
        <h1><a href="bep_trangchu.php?id=5">Trang quản lý</a></h1>
        <div class="date" style="float:right; margin-right: 50px; margin-top: -20px;"><span>📅</span><span id="currentDate"></span></div>
        <div class="menu-icon" style="float:right;" onclick="toggleSidebar()">👤</div> 
    </div>

    <div class="sidebar" id="sidebar">
            <button class="menu-item"><a href="ThongtinNhanVien.php?id=8">Thông tin cá nhân</a></button>
            <button class="menu-item"><a href="CN_thongtin.php?id=8">Cập nhật thông tin cá nhân</a></button>
            <button class="menu-item"><a href="../../index.php">Đăng xuất</a></button>
    </div>
    <div class="container" style="width:100%;">
        <div class="content" align="center">
        <h3>THÔNG TIN NHÂN VIÊN</h3>
            <div class="form-container">
                <form method="post" enctype="multipart/form-data" name="form1" id="form1" style="width: 100%;">
                    <table style="margin:0; height: 500px; width: 500px;">
                        <tr>
                            <td style="width: 150px;"><label for="maLoaiNV">Loại Nhân Viên:</label></td>
                            
                                <?php
                                    switch($laymaloai)
                                    {
                                        case 1:
                                            {
                                                echo '<td><input type="input" class="form-control" size="200" id="maLoaiNV" value="Nhân Viên Bán Hàng" name="maLoaiNV"></td>';
                                                break;
                                            }
                                        case 2:
                                            {
                                                echo '<td><input type="input" class="form-control" size="200" id="maLoaiNV" value="Nhân Viên Bếp" name="maLoaiNV"></td>';
                                                break;
                                            }
                                        case 3:
                                            {
                                                echo '<td><input type="input" class="form-control" size="200" id="maLoaiNV" value="Nhân Viên Hậu Cần" name="maLoaiNV"></td>';
                                                break;
                                            }
                                    }
                                ?> 
                            
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="maNV">Mã Nhân Viên:</label></td>
                            <td><input type="input" class="form-control" size="200" id="maNV" value="<?php echo $layid;?>" name="maNV"></td>
                            <!-- <td style="width: 200px;"><span id="errMa" class="err text-danger"></span></td> -->
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="hoTen">Họ và Tên:</label></td>
                            <td><input type="input" class="form-control" size="200" id="hoTen" value="<?php echo $layten;?>" name="hoTen"></td>
                            <!-- <td style="width: 200px;"><span id="errHoTen" class="err text-danger"></span></td> -->
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="ngaySinh">Ngày Sinh:</label></td>
                            <td><input type="input" class="form-control" size="200" id="ngaySinh" value="<?php echo $layngaysinh;?>" name="ngaySinh"></td>
                            <!-- <td style="width: 200px;"><span id="errNgaySinh" class="err text-danger"></span></td> -->
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="sdt">Số Điện Thoại:</label></td>
                            <td><input type="input" class="form-control" size="200" id="sdt" value="<?php echo $laysdt;?>" name="sdt"></td>
                            <!-- <td style="width: 200px;"><span id="errMa" class="err text-danger"></span></td> -->
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="email">Email:</label></td>
                            <td><input type="input" class="form-control" size="200" id="email" value="<?php echo $layemail;?>" name="email"></td>
                            <!-- <td style="width: 200px;"><span id="errHoTen" class="err text-danger"></span></td> -->
                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="trangThai">Trạng Thái:</label></td>

                            
                            <?php
                                switch($laytrangthai)
                                {
                                    case 0: 
                                        {
                                            echo '<td><input type="input" class="form-control" size="200" id="trangThai" value="Hết làm việc" name="trangThai"></td>';
                                            break;
                                        }
                                    case 1: 
                                        {
                                            echo '<td><input type="input" class="form-control" size="200" id="trangThai" value="Còn làm việc" name="trangThai"></td>';
                                            break;
                                        }
                                }
                            ?>

                        </tr>
                        <tr>
                            <td style="width: 150px;"><label for="diaChi">Địa Chỉ:</label></td>
                            <td><input type="input" class="form-control" size="200" id="diaChi" value="<?php echo $laydiachi;?>" name="diaChi"></td>
                            <!-- <td style="width: 200px;"><span id="errHoTen" class="err text-danger"></span></td> -->
                        </tr>
                        

                    </table>
                </form>
                <!-- <h2>Thông tin cá nhân</h2>
                <div class="form-container">
                    <div class="form-group">
                        <label>Loại nhân viên:</label>
                        <input type="text" value="Nhân viên bán hàng" readonly>
                    </div>
                    <div class="form-group">
                        <label>Mã nhân viên:</label>
                        <input type="text" value="0001" readonly>
                    </div>
                    <div class="form-group">
                        <label>Họ và tên:</label>
                        <input type="text" value="Nguyễn Văn A" readonly>
                    </div>
                    <div class="form-group">
                        <label>Ngày sinh:</label>
                        <input type="text" value="11/05/2003" readonly>
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại:</label>
                        <input type="text" value="0906666254" readonly>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" value="nguyenvanA123@hmail.com" readonly>
                    </div>
                    <div class="form-group">
                        <label>Trạng thái:</label>
                        <input type="text" value="Đang làm việc" readonly>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ:</label>
                        <input type="text" value="HCM" readonly>
                    </div>
                </div> -->
            </div>
    </div>        


</body>
</html>
