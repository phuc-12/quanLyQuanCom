<?php
    include_once("../../model/chucnangnhanvien.php");
    $p=new tmdt();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Thông tin khách hàng</title>
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
        $layid = $_REQUEST['id'];
        $layten=$p->laycot("select hoTen from khachhang where maKH = '$layid' limit 1");
        $laymakh=$p->laycot("select maKH from khachhang where maKH = '$layid' limit 1");
        $laytenloaikh=$p->laycot("select t.tenLoaiKH from khachhang n join loaikhachhang t on n.maLoaiKH = t.maLoaiKH where maKH = '$layid' limit 1");
        $laydiemtichluy=$p->laycot("select diemTichLuy from khachhang where maKH = '$layid' limit 1");
        $layemail=$p->laycot("select t.email from khachhang n join taikhoannguoidung t on n.idNguoiDung = t.idNguoiDung where maKH = '$layid' limit 1");
        // $layusername=$p->laycot("select username from khachhang where maKH = '$layid' limit 1");
        $layusername = $p->laycot("SELECT t.username FROM taikhoannguoidung t 
                           JOIN khachhang n ON n.idNguoiDung = t.idNguoiDung 
                           WHERE maKH = '$layid' LIMIT 1");
        $laysdt=$p->laycot("select t.SDT from khachhang n join taikhoannguoidung t on n.idNguoiDung = t.idNguoiDung where maKH = '$layid' limit 1");
        $laypassword=$p->laycot("select t.pass from khachhang n join taikhoannguoidung t on n.idNguoiDung = t.idNguoiDung where maKH = '$layid' limit 1");
        $laytrangthai=$p->laycot("select t.trangThai from khachhang n join taikhoannguoidung t on n.idNguoiDung = t.idNguoiDung where maKH = '$layid' limit 1");
        $laydiachi=$p->laycot("select t.diaChi from khachhang n join taikhoannguoidung t on n.idNguoiDung = t.idNguoiDung where maKH = '$layid' limit 1");

    ?>
<div class="container-fluid p-0">
    <div class="header">
        <div class="logo" style="padding: 0; border-radius: 100px;">
                <a href="../../index.php"><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
        </div>
        <h1><a href="../../index.php">Trang Chủ</a></h1>
        <div class="date" style="float:right; margin-right: 50px; margin-top: -20px;"><span>📅</span><span id="currentDate"></span></div>
        <div class="menu-icon" style="float:right;" onclick="toggleSidebar()">👤</div> 
    </div>
        <div class="sidebar" id="sidebar">
            <button class="menu-item"><a href="Thongtin.php?id=<?php echo $layid ?>">Thông tin cá nhân</a></button>
                <button class="menu-item"><a href="CN_thongtin.php?id=<?php echo $layid ?>">Cập nhật thông tin cá nhân</a></button>
                <button class="menu-item">Theo dõi trạng thái đơn hàng</button>
                <button class="menu-item">Xem ưu đãi</button>
                <button class="menu-item">Xem lịch sử mua hàng </button>
                <button class="menu-item"><a href="../../index.php">Đăng xuất</a></button>
        </div>
     <div class="container" style="width:100%;">
        <div class="content" align="center">
            <h2 >Thông tin cá nhân</h2>
            <div class="form-container">
                <form method="post" enctype="multipart/form-data" name="form1" id="form1" style="width: 100%; height: 100px;">
                        <table style="margin:0; width: 500px; height:500px">
                            <tr>
                                <td style="width: 150px;"><label for="tenLoaiKH">Loại Khách Hàng:</label></td>
                                <td><input type="input" class="form-control" size="200" id="tenLoaiKH" value="<?php echo $laytenloaikh;?>" name="tenLoaiKH"></td> 
                                
                                
                            </tr>
                            <tr>
                                <td style="width: 150px;"><label for="maKH">Mã Khách hàng:</label></td>
                                <td><input type="input" class="form-control" size="200" id="maKH" value="<?php echo $laymakh;?>" name="maKH"></td>
                                <!-- <td style="width: 200px;"><span id="errMa" class="err text-danger"></span></td> -->
                            </tr>
                            <tr>
                                <td style="width: 150px;"><label for="hoTen">Họ và Tên:</label></td>
                                <td><input type="input" class="form-control" size="200" id="hoTen" value="<?php echo $layten;?>" name="hoTen"></td>
                                <!-- <td style="width: 200px;"><span id="errHoTen" class="err text-danger"></span></td> -->
                            </tr>
                            <tr>
                                <td style="width: 150px;"><label for="diemTichLuy">Điểm Tích Lũy:</label></td>
                                <td><input type="input" class="form-control" size="200" id="diemTichLuy" value="<?php echo $laydiemtichluy;?>" name="diemTichLuy"></td>
                                <!-- <td style="width: 200px;"><span id="errNgaySinh" class="err text-danger"></span></td> -->
                            </tr>
                            <tr>
                                <td style="width: 150px;"><label for="sdt">Số Điện Thoại:</label></td>
                                <td><input type="input" class="form-control" size="200" id="sdt" value="<?php echo $laysdt;?>" name="sdt" ></td>
                                <!-- <td style="width: 200px;"><span id="errMa" class="err text-danger"></span></td> -->
                            </tr>
                            <tr>
                                <td style="width: 150px;"><label for="email">Email:</label></td>
                                <td><input type="input" class="form-control" size="200" id="email" value="<?php echo $layemail;?>" name="email" ></td>
                                <!-- <td style="width: 200px;"><span id="errHoTen" class="err text-danger"></span></td> -->
                            </tr>
                            <tr>
                                <td style="width: 150px;"><label for="trangThai">Trạng Thái:</label></td>
                                <?php
                                switch($laytrangthai)
                                {
                                    case 0: 
                                        {

                                            echo '<td><input type="input" class="form-control" size="200" id="trangThai" value="Hết hoạt động" name="trangThai"></td>';

                                            echo '<td><input type="input" class="form-control" size="200" id="trangThai" value="Ngừng hoạt động" name="trangThai"></td>';

                                            break;
                                        }
                                    case 1: 
                                        {

                                            echo '<td><input type="input" class="form-control" size="200" id="trangThai" value="Còn hoạt động" name="trangThai"></td>';
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
            </div>
        </div>
    </div>

</div>
</body>
</html>
