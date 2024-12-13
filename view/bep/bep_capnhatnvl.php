<?php
include ("../../model/chucnangbep.php");
$p = new tmdt();
session_start();
$ma_nhan_vien = $_SESSION['ma_nhan_vien'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật nguyên vật liệu</title>
    <link rel="stylesheet" type="text/css" href="../../css/nvbep_css/danhsachnvl.css">
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../js/dateTime.js" defer></script> 
    <script src="../../js/jquery-3.7.1.min.js"></script>
    <script src="../../js/capnhatnvl.js"> </script>
</head>
<body>
<?php
$layid=$_REQUEST['id'];
$laymaNVL= $p->laycot("select maNVL from nguyenlieu where maNVL='$layid'");
$laytenNVL= $p->laycot("select tenNVL from nguyenlieu where maNVL='$layid'");
$layslTon= $p->laycot("select slTon from nguyenlieu where maNVL='$layid'");
$laytrangThai= $p->laycot("select trangThai from nguyenlieu where maNVL='$layid'");
$laymota= $p->laycot("select mota from nguyenlieu where maNVL='$layid'");
$layngayNhap=$p->laycot("select ngayNhap from nguyenlieu where maNVL='$layid'");
$layngayHetHan=$p->laycot("select ngayHetHan from nguyenlieu where maNVL='$layid'");

?>
    <header>
        <div class="container-fluid p-0">
            <div id="ql_header">
                <div class="logo" style="padding: 0; border-radius: 100px;">
                    <a href=""><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
                </div>

                <div class="nav-item dropdown">
                    <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" style="float:right; margin-top: 20px; padding: 0; margin-right:70px; ">👤</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../NHANVIEN/ThongtinNhanVien.php?id=<?php echo $ma_nhan_vien; ?>">Thông Tin Cá Nhân</a></li>
                        <li><a class="dropdown-item" href="../NHANVIEN/CN_thongtin.php?id=<?php echo $ma_nhan_vien; ?>">Cập Nhật Thông Tin</a></li>
                        <li><a class="dropdown-item" href="../../index.php">Đăng Xuất</a></li>
                    </ul>
                </div>

                <div class="date" style="float:right; margin-right: 100px; margin: 20px;"><span>📅</span><span id="currentDate"></span></div>
                    
            </div>
        </div>
    </header>
    <div class="trangquanly">
        <div class="containerr">
            <div class="sidebar">
                <div class="menu-item " onclick="window.location.href='bep_trangchu.php';">Trang tổng quan</div>
                <div class="menu-item" onclick="window.location.href='bep_trangdonhang.php';">Xem hóa đơn</div>
                <div class="menu-item active" onclick="window.location.href='bep_qlynvl.php';">Quản lý nguyên vật liệu</div>
            </div>
        </div>

        <div id="content">
            <button class="back-button" onclick="window.location.href='bep_qlynvl.php';">◀ <a href="bep_qlynvl.php" style="font-size: 16px; color: black; text-decoration: none;"> Danh sách nguyên vật liệu</a></button>
            <div class="container-xem">
                <div class="header-row-xem">
                    <h2>CẬP NHẬT NGUYÊN VẬT LIỆU</h2>
                </div>
                <form class="detail-form" method="post">
                <label for="ma">Mã nguyên vật liệu:</label>
                    <input type="text" id="ma" name="ma" value="<?php echo $laymaNVL;?>" disabled>

                    <label for="ten">Tên nguyên vật liệu:</label>
                    <input type="text" id="ten" name="ten" value="<?php echo $laytenNVL;?>" disabled>

                    <label for="soluong">Số lượng:</label>
                    <input type="number" id="txtsoluong" value="<?php echo $layslTon;?>" name="txtsoluong">
                    <span class="text-danger" id="tbsoluong"></span>

                    <label for="ngaynhap">Ngày nhập:</label>
                    <input type="date" id="txtngayNhap" name="txtngayNhap" placeholder="DD/MM/YY" class="form-control" style="padding:10px 0" value="<?php echo $layngayNhap;?>">
                    <span class="text-danger" id="tbngayNhap"></span>
                    <!-- <script>
                        // Lấy input element
                        const inputNgayNhap = document.getElementById('txtngayNhap');
                                            
                        // Lấy ngày hiện tại
                        const today = new Date();
                                            
                        // Định dạng ngày theo chuẩn yyyy-mm-dd
                        const formattedDate = today.toISOString().split('T')[0];
                                            
                        // Gán giá trị ngày hiện tại vào input
                        document.getElementById('txtngayNhap').value = formattedDate;
                    </script> -->
                    <label for="ngayhethan">Ngày hết hạn:</label>
                    <input type="date" id="txtngayHetHan" name="txtngayHetHan" placeholder="DD/MM/YY" class="form-control"style="padding:10px 0" value="<?php echo $layngayHetHan;?>">
                    <span class="text-danger" id="tbngayHetHan"></span>

                    <label for="soluong">Mô tả:</label>
                    <input type="text" id="mota" value="<?php echo $laymota;?>" name="mota">

                    <div class="nut">
                        <button type="button" class="add-button-1" style="background-color: #656464; color:#ffff;" onclick="window.location.href='bep_qlynvl.php?id=<?php echo $ma_nhan_vien; ?>';">HỦY</button>
                        <button type="submit" class="add-button-1" name="nut" id="nut" value="Sua">Cập nhật</button> 
                    </div>
                    <?php
                    if (isset($_POST['nut'])) {
                        switch($_POST['nut']){
                            case 'Sua':{
                                $soluong = $_REQUEST['txtsoluong'];
                                $ngayNhap = $_REQUEST['txtngayNhap'];
                                $mota = $_REQUEST['mota'];
                                $ngayHetHan = $_REQUEST['txtngayHetHan'];
                                $maNV = $ma_nhan_vien;
                                // Kiểm tra số lượng
                                if ($soluong == 0) {
                                    $sqlnguyenlieu = "UPDATE `db_chipheo`.`nguyenlieu` 
                                            SET `slTon` = '$soluong', 
                                                `ngayNhap` = '$ngayNhap', 
                                                `ngayHetHan` = '$ngayHetHan', 
                                                `moTa` = '$mota', 
                                                `trangThai` = '2'
                                            WHERE `nguyenlieu`.`maNVL` = '$layid' 
                                            LIMIT 1;";
                                    $sqlmonan= "UPDATE monan
                                                SET trangthai = 0
                                                WHERE maMA IN (
                                                    SELECT maMA
                                                    FROM monan_nguyenlieu tg
                                                    JOIN nguyenlieu nl ON tg.maNVL = nl.maNVL
                                                    GROUP BY maMA
                                                    HAVING SUM(nl.slTon > 0) < COUNT(tg.maNVL)
                                                );";
                                } else {
                                    $sqlnguyenlieu = "UPDATE `db_chipheo`.`nguyenlieu` SET 
                                            `slTon` = '$soluong',
                                            `moTa` = '$mota',
                                            `trangThai` = '1',
                                            `ngayNhap` = '$ngayNhap',
                                            `ngayHetHan` = '$ngayHetHan' WHERE `nguyenlieu`.`maNVL` = '$layid' LIMIT 1 ;";
                                    $sqlmonan= "UPDATE monan
                                                SET trangthai = 1
                                                WHERE maMA NOT IN (
                                                    SELECT maMA
                                                    FROM monan_nguyenlieu tg
                                                    JOIN nguyenlieu nl ON tg.maNVL = nl.maNVL
                                                    GROUP BY maMA
                                                    HAVING SUM(nl.slTon > 0) < COUNT(tg.maNVL)
                                                );";
                                }
                        
                                // Thực hiện truy vấn
                                if ($p->themxoasua($sqlnguyenlieu) == 1 && $p->themxoasua($sqlmonan) == 1) {
                                    echo '<script language="javascript">alert("Cập nhật nguyên vật liệu thành công");</script>';
                                    echo '<script language="javascript">
                                            window.location="bep_qlynvl.php?id='.$maNV.'";
                                        </script>';
                                } else {
                                    echo '<script language="javascript">alert("Cập nhật thất bại. Vui lòng thử lại!");</script>';
                                }
                                break;
                            }
                        }
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>