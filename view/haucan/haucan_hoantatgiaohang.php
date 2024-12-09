<?php
include ("../../model/chucnanghaucan.php");
$p = new tmdt();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoàn tất giao hàng</title>
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
$maKH=$p->laycot("SELECT maKH FROM hoadon WHERE maHD='$layid' LIMIT 1");
$layhoTen= $p->laycot("select hoTen from khachhang where maKH=  '$maKH'");
$sodienthoai=$p->laycot("select tknd.SDT FROM taikhoannguoidung tknd JOIN khachhang kh ON tknd.idNguoiDung = kh.idNguoiDung
                                        JOIN hoadon hd ON kh.maKH = hd.maKH
                                        WHERE hd.maKH = '$maKH';");
$diachi=$p->laycot("select tknd.diachi FROM taikhoannguoidung tknd JOIN khachhang kh ON tknd.idNguoiDung = kh.idNguoiDung
                                        JOIN hoadon hd ON kh.maKH = hd.maKH
                                        WHERE hd.maKH = '$maKH';");
$laytongtien=$p->laycot("SELECT SUM( cthd.soLuong * ma.donGia )FROM chitiethoadon cthd join monan ma on cthd.maMA=ma.maMA WHERE maHD = '$layid' GROUP BY maHD;");
$laytrangThaiGH= $p->laycot("select trangThaiGH from hoadon where maHD='$layid'");
$laytrangThai= $p->laycot("select trangThai from hoadon where maHD='$layid'");
?>
    <header>
        <div class="container-fluid p-0">
            <div id="ql_header">
                <div class="logo" style="padding: 0; border-radius: 100px;">
                    <a href="../../index.php"><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
                </div>

                <div class="date" style="float:right; margin-right: 100px; margin: 20px;"><span>📅</span><span id="currentDate"></span></div>
                    
            </div>
        </div>
    </header>
    <div id="content">
        <button class="back-button" onclick="window.location.href='haucan_DANHSACHDONHANG.php';">◀ <a href="haucan_danhsachdonhang.php" style="font-size: 16px; color: black; text-decoration: none;">Danh sách đơn hàng</a></button>
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
                    </div>                   -->
                    <?php
                        $p->xemchitietmonan_donhang("SELECT *
                                                            FROM chitiethoadon
                                                            WHERE maHD = '$layid'")
                    ?>

                </div>

                <label for="soluong">Tổng tiền</label>
                <input type="text" id="tongtien" name="tongtien" value="<?php echo $laytongtien;?>">
                
                <label for="trangthai">Trạng thái đơn hàng</label>
                <input type="text" id="trangthai" name="trangthai" value="<?php if ($laytrangThai == 0) {
                                                                                        echo "Chưa thanh toán";
                                                                                    } else {
                                                                                        echo "Đã thanh toán";
                                                                                    }?>">

                <label for="image-upload">Tải ảnh lên:</label>
                <input type="file" name="myfile" id="myfile" accept="image/*">
            <!-- <div class="sub-button"> -->
                <button type="submit" class="cancel-button-1" name="nut" id="nut" value="Huy don hang" onclick="return confirmDelete()">Hủy đơn hàng</button>
                <script>
                    function confirmDelete() {
                        return confirm("Bạn có chắc chắn muốn Hủy đơn hàng này không?");
                    }
                </script>                                    
            <!-- </div> -->
                <button type="submit" class="complete-button" name="nut" id="nut" value="HTGH">Hoàn tất giao hàng</button>
                <?php
                if (isset($_POST['nut'])) {
                    switch($_POST['nut']){
                        case 'HTGH':{
                            $name = $_FILES['myfile']['name'];
			                $tmp_name=$_FILES['myfile']['tmp_name'];
                            if($tmp_name!=''){
                                $name = time()."_".$name;
                                if($p->uploadfile($name,$tmp_name,"../../img/giaohang")==1){
                                    if($p->themxoasua("UPDATE `db_chipheo`.`hoadon` SET `trangThaiGH` = '2',`trangThai` = '1',`img` = '$name' WHERE `hoadon`.`maHD` ='$layid' ;")==1){
                                        echo '<script language="javascript">alert("Giao hàng thành công");
                                                                            window.location = "haucan_danhsachdonhang.php?";</script>
                                                </script>';

                                    }else{
                                        echo '<script language="javascript">alert("Giao hàng không thành công. Vui lòng thử lại!");
                                        window.location = "haucan_danhsachdonhang.php";
                                        </script>';
                                    }
                                }else{
                                    echo '<script language="javascript">
                                alert("Tải hình thất bại");
                                </script>';
                                }
                            }
                            else{
                                echo '<script language="javascript">
                                alert("Vui lòng thêm ảnh đã giao hàng");
                                </script>';
                            }
                            echo '<script language="javascript">
                                window.location="haucan_hoantatgiaohang.php?id='.$layid.'";
                                </script>';
                            break;
                        }
                        case 'Huy don hang':
                            {
                                if($p->themxoasua("UPDATE `db_chipheo`.`hoadon` SET `trangThaiGH` = '3' WHERE `hoadon`.`maHD` ='$layid' ;")==1){
                                    echo '<script language="javascript">alert("Hủy đơn hàng thành công");
                                                                        window.location = "haucan_danhsachdonhang.php";</script>
                                            </script>';
    
                                }else{
                                    echo '<script language="javascript">alert("Hủy đơn hàng không thành công. Vui lòng thử lại!");
                                    window.location = "haucan_hoantatgiaohang.php?id='.$layid.'";
                                    </script>';
                                }
                            }
                    }
                }
                ?>
            </form>                                                                    
        </div>
    </div>
</body>
 