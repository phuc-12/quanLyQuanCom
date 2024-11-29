<?php
include ("../../model/chucnanghaucan.php");
$p = new haucan();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giao hàng</title>
    <link rel="stylesheet" type="text/css" href="../../css/haucan_css/style.css">
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../js/dateTime.js" defer></script> 
</head>
<body>
<?php
$layid=$_REQUEST['id'];
$laymaMA= $p->laycot("select maMA from chitiethoadon where maHD='$layid'");
$maKH=$p->laycot("SELECT maKH FROM chitiethoadon WHERE maHD='$layid' LIMIT 1");
$layhoTen= $p->laycot("select hoTen from khachhang where maKH=  '$maKH'");
$sodienthoai=$p->laycot("select t.SDT FROM taikhoannguoidung t JOIN khachhang k ON t.username = k.username
                        JOIN chitiethoadon c ON k.maKH = c.maKH
                        WHERE c.maKH = '$maKH';");
$diachi=$p->laycot("select t.diachi FROM taikhoannguoidung t JOIN khachhang k ON t.username = k.username
                        JOIN chitiethoadon c ON k.maKH = c.maKH
                        WHERE c.maKH = '$maKH';");
$laytongtien=$p->laycot("SELECT SUM( soLuong * donGia )FROM chitiethoadon WHERE maHD = '$layid' GROUP BY maHD;");
$laytrangThaiDH= $p->laycot("select trangThaiDH from chitiethoadon where maHD='$layid'");
?>
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
                    <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" style="float:right; margin-top: 20px; padding: 0; margin-right:20px;">👤</a>
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
    <div id="content">
        <button class="back-button" onclick="window.location.href='haucan_danhsachdonhang.php';">◀ <a href="haucan_danhsachdonhang.php" style="font-size: 16px; color: black; text-decoration: none;">Danh sách đơn hàng</a></button>
        <div class="container-xem">
            <div class="header-row-xem">
                <h2>THÔNG TIN CHI TIẾT ĐƠN HÀNG</h2>
            </div>
            <form class="detail-form" method="post" enctype="multipart/form-data" name="form1" id="form1">
                <label for="tenkh">Mã đơn hàng:</label>
                <input type="text" id="madh" name="madh" value="<?php echo $layid;?>">

                <label for="tenkh">Tên khách hàng:</label>
                <input type="text" id="tenkh" name="tenkh" value="<?php echo $layhoTen;?>">

                <label for="sdt">Số điện thoại:</label>
                <input type="text" id="sdt" name="sdt" value="<?php echo $sodienthoai ?>">

                <label for="soluong">Địa chỉ:</label>
                <input type="text" id="diachi" name="diachi" value="<?php echo $diachi;?>">

                <label>Danh sách món ăn:</label>
                <div class="food-list">
                    <!-- <div class="food-item">
                        <div class="soluong">Bún đậu mắm tôm x2 </div>
                        <div class="gia">đ 100.000 </div>  
                    </div>
                    <div class="food-item">
                        <div class="soluong">Bún thêm x1 </div>
                        <div class="gia">đ 30.000 </div>  
                    </div>
                    <div class="food-item">
                        <div class="soluong">Nước ngọt x2 </div>
                        <div class="gia">đ 25.000 </div>  
                    </div>                  -->
                    <?php
                        $p->xemchitietmonan_donhang("SELECT *
                                                            FROM chitiethoadon
                                                            WHERE maHD = '$layid'")
                    ?>
                </div>

                <label for="tongtien">Tổng tiền</label>
                <input type="text" id="tongtien" name="tongtien" value="<?php echo $laytongtien;?>">

                <label for="trangthaiDH">Trạng thái đơn hàng</label>
                <input type="text" id="trangthaiDH" name="trangthaiDH" value="<?php if ($laytrangThaiDH == 0) {
                                                                                        echo "Chưa thanh toán";
                                                                                    } else {
                                                                                        echo "Đã thanh toán";
                                                                                    }?>">

            <!-- <div class="sub-button"> -->
                <button type="submit" class="cancel-button-1" onclick="return confirmDelete()">Hủy đơn hàng</button>
                <script>
                        function confirmDelete() {
                            return confirm("Bạn có chắc chắn muốn Hủy đơn hàng này không?");
                        }
                    </script>
            <!-- </div> -->
                <button type="submit" class="prepare-button" name="nut" id="nut" value="Giao hàng">Giao hàng</button>
                <?php 
                    switch($_POST['nut']){
                        case 'Giao hàng':{ 
                            if($p->themxoasua("UPDATE `quancomchipheo`.`chitiethoadon` SET `trangThaiGH` = '1'
                                          WHERE `chitiethoadon`.`maHD` = '$layid';")==1){
                                echo '<script language="javascript">alert("Chuyển sang trạng thái Đang giao hàng");
                                                                    window.location = "haucan_hoantatgiaohang.php?id='.$layid.'";</script>
                                        </script>';

                            }else{
                                echo '<script language="javascript">alert("Chuyển trạng thái không thành công. Vui lòng thử lại!");
                                window.location = "haucan_danhsachdonhang.php";
                                </script>';
                            }
                        }
                    }
                ?>
            </form>
        </div>
    </div>

    <!-- Thông Báo Hủy Đơn Hàng -->
    <!-- <div class="popup" id="cancelPopup">
        <div class="popup-content">
            <h3>HỦY ĐƠN HÀNG</h3>
            <form class="form">
                <label for="tinhtrang">Tình trạng:</label>
                <select id="tinhtrang" name="tinhtrang" style="padding:10px; margin-left:30px;width:250px;">
                    <option value="available">Khách không còn nhu cầu</option>
                </select>
                <div class="popup-buttons">
                    <button class="back-button-huy">Hủy</button>
                    <button class="confirm-button">Xác nhận Hủy</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openCancelPopup() {
            document.getElementById("cancelPopup").style.display = "flex";
        }
    </script> -->
    
</body>
 