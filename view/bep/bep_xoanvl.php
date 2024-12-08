<?php
include ("../../model/chucnangbep.php");
$p = new tmdt();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa nguyên vật liệu</title>
    <link rel="stylesheet" type="text/css" href="../../css/nvbep_css/danhsachnvl.css">
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../js/dateTime.js" defer></script> 
</head>
<body>
<?php
$layid=$_REQUEST['id'];
$laymaNVL= $p->laycot("select maNVL from nguyenlieu where maNVL='$layid'");
$laytenNVL= $p->laycot("select tenNVL from nguyenlieu where maNVL='$layid'");
$layslTon= $p->laycot("select slTon from nguyenlieu where maNVL='$layid'");
$laytrangThai= $p->laycot("select trangThai from nguyenlieu where maNVL='$layid'");
$layngayNhap= $p->laycot("select ngayNhap from nguyenlieu where maNVL='$layid'");
$layngayHetHan= $p->laycot("select ngayHetHan from nguyenlieu where maNVL='$layid'");
$laymoTa= $p->laycot("select moTa from nguyenlieu where maNVL='$layid'");
?>
    <header>
        <div class="container-fluid p-0">
            <div id="ql_header">
                <div class="logo" style="padding: 0; border-radius: 100px;">
                    <a href="../../index.php"><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
                </div>
                
                <!-- <div class="nav-item dropdown">
                    <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" style="float:right; margin-top: 20px; padding: 0; margin-right:70px;">👤</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Thông Tin Cá Nhân</a></li>
                        <li><a class="dropdown-item" href="#">Cập Nhật Thông Tin</a></li>
                        <li><a class="dropdown-item" href="../../index.php">Đăng Xuất</a></li>
                    </ul>
                </div> -->

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
                    <h2>THÔNG TIN CHI TIẾT NGUYÊN VẬT LIỆU</h2>
                </div>
                <form class="detail-form" method="post" enctype="multipart/form-data" name="form1" id="form1">
                    <label>Mã nguyên vật liệu:</label>
                    <input name="txtid" id="txtid" type="text" value="<?php echo $laymaNVL;?>" readonly>

                    <label>Tên nguyên vật liệu:</label>
                    <input type="text" value="<?php echo $laytenNVL;?>" readonly>

                    <label>Số lượng:</label>
                    <input type="text" value="<?php echo $layslTon;?>" readonly>

                    <label>Tình trạng:</label>
                    <input type="text" value="<?php if ($laytrangThai == 0) {
                                                        echo "Hết NVL";
                                                    } else {
                                                        echo "Còn hàng";
                                                    }?>" readonly>
                    <label>Ngày nhập:</label>
                    <input type="text" value="<?php echo $layngayNhap;?>" readonly>

                    <label>Ngày hết hạn:</label>
                    <input type="text" value="<?php echo $layngayHetHan;?>" readonly>

                    <label>Mô tả:</label>
                    <input type="text" value="<?php echo $laymoTa;?>" readonly>
                    
                    <div class="nut">
                        <button type="button" class="add-button-1" style="background-color: #656464; color:#ffff;" onclick="window.location.href='bep_qlynvl.php';">HỦY</button>
                        <button type="submit" class="add-button-1" name="nut" id="nut" value="Xoa">Xóa</button> 
                    </div>                    <script>
                        function confirmDelete() {
                            return confirm("Bạn có chắc chắn muốn xóa nguyên vật liệu này không?");
                        }
                    </script>

                    
                    <?php
                    if (isset($_POST['nut'])) {
                        switch($_POST['nut']){
                            case 'Xoa':{ 
                                if ($p->themxoasua("DELETE FROM nguyenlieu WHERE maNVL = '$laymaNVL'") == 1) {
                                    echo '<script language="javascript">alert("Xóa nguyên vật liệu thành công");
                                    window.location = "bep_qlynvl.php";</script>';
                                }else{
                                    echo '<script language="javascript">alert("Xóa nguyên vật liệu không thành công. Vui lòng thử lại!");
                                    window.location = "bep_qlynvl.php";
                                    </script>';
                                }
                            }
                        } 
                    }   
                    ?>
                
                </form>
            </div>
        </div>
    </div>
</body>
<?php
            
            
