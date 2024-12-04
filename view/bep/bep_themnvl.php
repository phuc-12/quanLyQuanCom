<?php
include ("../../model/chucnangbep.php");
$p = new tmdt();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm nguyên vật liệu</title>
    <link rel="stylesheet" type="text/css" href="../../css/nvbep_css/danhsachnvl.css">
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../js/jquery-3.7.1.min.js"></script>
    <script src="../../js/dateTime.js" defer></script> 
    <script src="../../js/themnvl.js"> </script>
</head>
<body>
    <header>
        <div class="container-fluid p-0">
            <div id="ql_header">
                <div class="logo" style="padding: 0; border-radius: 100px;">
                    <a href="../../index.php"><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
                </div>

                <a class="trangChu" href="../../index.php">
                    <p>Trang Chủ</p>
                </a>

                <div class="nav-item dropdown">
                    <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" style="float:right; margin-top: 20px; padding: 0; margin-right:70px;">👤</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Thông Tin Cá Nhân</a></li>
                        <li><a class="dropdown-item" href="#">Cập Nhật Thông Tin</a></li>
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
        <button class="back-button" onclick="window.location.href='bep_qlynvl.php';">◀<a href="bep_qlynvl.php" style="font-size: 16px; color: black; text-decoration: none;"> Danh sách nguyên vật liệu</a></button>
        
        <div class="container-xem">
            <div class="header-row-xem">
                
                <h2>THÊM NGUYÊN VẬT LIỆU</h2>
            </div>
            <form class="detail-form" method="post" enctype="multipart/form-data" name="form1" id="form1">

                <label for="ten">Tên nguyên vật liệu:</label>
                <input type="text" id="txttenNVL" name="txttenNVL">
                <span class="text-danger" id="tbtenNVL"></span>

                <label for="soluong">Số lượng:</label>
                <input type="number" id="txtsoluong"  name="txtsoluong">
                <span class="text-danger" id="tbsoluong"></span>

                 <label for="donViTinh">Đơn vị tính:</label>
                 <input type="text" id="txtdonViTinh"  name="txtdonViTinh">
                 <span class="text-danger" id="tbdonViTinh"></span>
                <!--<select id="donViTinh" name="donViTinh">
                    <option value="1">Còn hàng</option>
                    <option value="2">Hết hàng</option>
                </select> -->
                
                    <!-- $laytrangThai=$p->laycot("select donViTinh from nguyenlieu ");
                	$p->chondonViTinh("select * from nguyenlieu group by donViTinh",$laydonViTinh); -->
		        

                <label for="ngaynhap">Ngày nhập:</label>
                <input type="date" id="txtngayNhap" name="txtngayNhap" placeholder="DD/MM/YY" class="form-control">
                <span class="text-danger" id="tbngayNhap"></span>
                <script>
                    // Lấy input element
                    const inputNgayNhap = document.getElementById('txtngayNhap');
                                        
                    // Lấy ngày hiện tại
                    const today = new Date();
                                        
                    // Định dạng ngày theo chuẩn yyyy-mm-dd
                    const formattedDate = today.toISOString().split('T')[0];
                                        
                    // Gán giá trị ngày hiện tại vào input
                    document.getElementById('txtngayNhap').value = formattedDate;
                </script>
                <label for="ngayhethan">Ngày hết hạn:</label>
                <input type="date" id="txtngayHetHan" name="txtngayHetHan" placeholder="DD/MM/YY" class="form-control">
                <span class="text-danger" id="tbngayHetHan"></span>

                <label for="ten">Ghi chú:</label>
                <input type="text" id="txtmota" name="txtmota">
                
                <button type="submit" class="add-button-1" name="nut" id="nut" value="Thêm sản phẩm">THÊM</button>
            <?php
                switch($_POST['nut']){
                    case 'Thêm sản phẩm':{
                        $tenNVL = $_REQUEST['txttenNVL'];
                        $soluong = $_REQUEST['txtsoluong'];
                        $donvitinh = $_REQUEST['txtdonViTinh'];
                        $ngaynhap = $_REQUEST['txtngayNhap'];
                        $ngayhethan = $_REQUEST['txtngayHetHan'];
                        $mota = $_REQUEST['txtmota'];
                        $tenNVLdb=$p->laycot("select tenNVL from nguyenlieu where tenNVL='$tenNVL'");
                        
                        if($p->themxoasua("INSERT INTO `db_chipheo`.`nguyenlieu` (`tenNVL`, `slTon`, `donViTinh`, `moTa`, `trangThai`, `ngaynhap`, `ngayhethan`)
        VALUES ('$tenNVL', '$soluong', '$donvitinh', '$mota', '1', '$ngaynhap', '$ngayhethan')")==1){
                            echo '<script language="javascript">alert("Thêm nguyên vật liệu thành công");</script>';
                        }else{
                            echo '<script language="javascript">alert("Thêm nguyên vật liệu không thành công. Vui lòng thử lại!");
                            </script>';
                        }
                        if($tenNVLdb){
                            echo '<script language="javascript">alert("Tên nguyên vật liệu đã tồn tại!");window.location="bep_themnvl.php"</script>';
                        
                        }
                    echo '<script language="javascript">
                            window.location="bep_qlynvl.php";
                            </script>';
                    break;
                    }
                
            }
            
            ?>
               </form> 
            </div>
        </div>
    </div>
</body>