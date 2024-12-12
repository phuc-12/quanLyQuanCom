<?php
    include_once("../model/chucnangnhanvien.php");
    $tmdt = new tmdt();
    $conn = $tmdt->connect();
    $query = "SELECT MAX(idNguoiDung) as maxidNguoiDung FROM taikhoannguoidung";
    $result = $conn->query($query);

    $newInvoiceCode = 1; // Giá trị mặc định nếu không có hóa đơn nào trong cơ sở dữ liệu
    if ($result && $row = $result->fetch_assoc()) {
        $maxidNguoiDung = $row['maxidNguoiDung'];
        $newInvoiceCode = $maxidNguoiDung + 1; 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Trang Đăng Ký</title>
    <style>
    .error {
        color: red;
        font-size: 12px;
    }
    span, i{
        color : white ;
        padding-left: 15px;
    }
    .contact-info a{
        text-decoration: none;
        color : white ;
        margin-left: -5px ;
    }
    .contact-info a:hover{
        color: #4e4202;
    }
    .auth-buttons a{
        text-decoration: none;
        color : white ;
    }
    .auth-buttons a:hover{
        color: #4e4202;
    }
    li i{
        padding-left: 5px;
        color: #ffc107;
    }
    </style>
</head>
<body>
<div class="container-fluid p-0">
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="contact-info">
                <i class="fa fa-phone" style ="font-size: 20px;">
                <a href="https://zalo.me/0346021604"></i>0346021604</a>
                <i class="fa fa-clock-o" style ="font-size: 20px;"></i>
                <span style=" margin-left: -20px ;">Thứ 2 - Chủ nhật / 7:00 - 18:00</span>
            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="main-nav">
            <a href="../index.php">TRANG CHỦ</a>
            <a href="intro-menu.php">THỰC ĐƠN</a>
            <div class="logo">
                <img src="../IMG/ChiPheologo.png" alt="">
            </div>
            <a href="intro.php">GIỚI THIỆU</a>
            <a href="#">KHUYẾN MÃI</a>
        </nav>
        <div class="contactv1">
            <div class="contact-formv1">
                <h2 class="form-title">ĐĂNG KÝ</h2>
                <form action="#" method="post" onsubmit="return validateForm();">
                <div class="form-group">
                    <!-- <label>ID Nguoi Dung:</label> -->
                    <input type="text" value =<?php echo $newInvoiceCode ?> style="display: none;">
                    
                    <!-- <span id="errTDN" class="error"></span> -->
                </div>
                <div class="form-group">
                    <label>Mã Khách Hàng:</label>
                    <input type="text" name="txtmaKH">
                    <!-- <span id="errTDN" class="error"></span> -->
                </div>
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="txtTND">
                    <span id="errTDN" class="error"></span>
                </div>

                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" name="txtMK">
                    <span id="errPW" class="error"></span>
                </div>

                <div class="form-group">
                    <label>Họ Tên:</label>
                    <input type="text" name="tenname">
                    <span id="errHoTen" class="error"></span>
                </div>

                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" name="email">
                    <span id="errEmail" class="error"></span>
                </div>

                <div class="form-group">
                    <label>Địa Chỉ:</label>
                    <input type="text" name="dc">
                    <span id="errDiaChi" class="error"></span>
                </div>

                <div class="form-group">
                    <label>Số Điện Thoại:</label>
                    <input type="text" name="sdt">
                    <span id="errSDT" class="error"></span>
                </div>
                    
                     <tr>
                        <button type="submit" id="btnDangky" class="submit-btn">Đăng Ký</button>
                        <button type="reset" class="submit-btn">Nhập lại</button>
                    </tr>
                    <tr>
                        <td>
                            <a href="dangnhap.php">Đăng Nhập</a>
                        </td>
                    </tr>
                </form>
            </div>
            
        </div>
        <!-- Footer -->
        <footer class="footer">
            <div class="contain1">
                <div class="row-title">
                    <h2><b>QUÁN CƠM CHÍ PHÈO</b></h2>
                </div>
                <div class="doc1">
                <img src="img/ChiPheologo.png" alt="">
                    <p>
                        CHẤT LƯỢNG - VỆ SINH - AN TOÀN
                    </p>
                    <br>
                    <P>
                        Chúng tôi cam kết mang đến những sản phẩm chất lượng với số lượng lớn đáp ứng nhu
                        cầu đa
                        dạng
                        của
                        từng khách hàng
                    </P>
                </div>
                <div class="doc2">
                    <h4>CHÍNH SÁCH</h4>
                    <br>
                    <ul>
                        <li><i class="fa fa-lock"></i>  <a href="contact.php#csbm" class="doc">  Chính sách bảo mật</a></li>
                        <li style="margin-left:-6px;"><i class="fa fa-money"></i> <a href="contact.php#cstt" class="doc">  Chính sách thanh toán</a></li>
                    </ul>
                </div>
                <div class="doc3">
                    <h4>THÔNG TIN LIÊN HỆ</h4>
                    <br>
                    <ul>
                        <li><i class="fa fa-exclamation-circle"></i><a href="contact.php" class="doc"> Thông tin chung</a></li>
                        <li><i class="fa fa-phone"></i>     <a href="https://zalo.me/0346021604" class="doc"> Zalo: 0346021604</a></li>
                        <li style="margin-left:-3px;"><i class="fa fa-envelope"></i>  Marketing@chipheoquan.com</li>
                        <li><i class="fa fa-facebook-square"></i><a href="https://www.facebook.com/profile.php?id=61553590355575" class="doc">  Facebook : ChíPhèo quán</a></li>
                    </ul>
                </div>
                <div class="doc4">
                    <h4>LIÊN KẾT NHANH</h4>
                    <br>
                    <ul>
                        <li><i class="fa fa-exclamation-circle"></i><a href="intro.php" class="doc">  Giới Thiệu</a></li>
                        <li><i class="fa fa-map-marker"></i><a href="list-res.php" class="doc">&nbsp;12 Nguyễn Văn Bảo, Phường 04, Quận Gò Vấp , Thành phố Hồ Chí Minh , Việt Nam</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>

</body>
</html>
<!-- <?php
    // if(isset($_REQUEST['btndk'])){
    //     include_once('controller/cDangky.php');
    //     $p = new cdangky;
    //     // $p -> cDK01ND($_POST['name'],$_POST['pw'],$_POST['tenname'],$_POST['dc'],$_POST['sdt'],$_POST['email']);
    //     $p->cDK01ND($_POST['txtTND'], $_POST['txtMK'], $_POST['tenname'], $_POST['email'], $_POST['dc'], $_POST['sdt']);
    // }
?> -->

<?php

    include_once("../controler/cDangky.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy dữ liệu từ form
        $idNguoiDung = $newInvoiceCode;
        $tdn = trim($_POST['txtTND']);
        $pw = md5(trim($_POST['txtMK'])); // Mã hóa mật khẩu
        $tenname = trim($_POST['tenname']);
        $email = trim($_POST['email']);
        $dc = trim($_POST['dc']);
        $sdt = trim($_POST['sdt']);
        $maKH = trim($_POST['txtmaKH']);
        // Kiểm tra dữ liệu
        if (empty($maKH) || empty($idNguoiDung) || empty($tdn) || empty($pw) || empty($tenname) || empty($email) || empty($dc) || empty($sdt)) {
            echo "<script>alert('Vui lòng điền đầy đủ thông tin!'); window.location.href='dangky.php';</script>";
            exit;
        }

        // Khởi tạo lớp xử lý đăng ký
        $p = new cdangky();
        $result = $p->getdangky($idNguoiDung, $tdn, $pw, $tenname, $email, $dc, $sdt);
        if ($result == 1) {
            // echo "<script>alert('Đăng ký thành công!'); window.location.href='dangnhap.php';</script>";

                $conn = new mysqli('localhost','root','','db_chipheo');
                    
                if($conn)
                {
                    
                    $str = "INSERT INTO khachhang (maKH,hoTen,username,maLoaiKH,idNguoiDung,diemTichLuy) VALUES ('$maKH','$tenname','$tdn','4','$idNguoiDung','0')";
                    
                    if ($conn->query($str) === TRUE) {
                        // echo "<script>alert('Đăng ký thành công!'); window.location.href='dangnhap.php';</script>";
                        if ($conn->affected_rows > 0) {
                            echo "<script>alert('Đăng ký thành công!'); window.location.href='dangnhap.php';</script>";
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
        } else {
            // Đăng ký thất bại
            echo "<script>alert('Đăng ký thất bại!'); window.location.href='dangky.php';</script>";
        }
    } 


?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Kiểm tra từng trường thông tin
        function ktHoTen() {
            let hoTen = $("input[name='tenname']").val().trim();
            let btcq = /^[A-Za-zÀ-ỹà-ỹ\s]+$/;
            if (hoTen.length == 0) {
                $("#errHoTen").html("Họ tên không được để trống");
                return false;
            } else if (!btcq.test(hoTen)) {
                $("#errHoTen").html("Tên không hợp lệ");
                return false;
            } else {
                $("#errHoTen").html("(*)");
                return true;
            }
        }
        $("input[name='tenname']").blur(function () {
            ktHoTen();
        });

        function ktTDN() {
            let TDN = $("input[name='txtTND']").val();
            let btcq = /^[a-zA-Z0-9]{6,}$/;
            if (TDN == "") {
                $("#errTDN").html("Tài khoản không được trống");
                return false;
            } else if (!btcq.test(TDN)) {
                $("#errTDN").html("Tài khoản phải chứa ít nhất 6 ký tự");
                return false;
            } else {
                $("#errTDN").html("(*)");
                return true;
            }
        }
        $("input[name='txtTND']").blur(function () {
            ktTDN();
        });

        function ktemail() {
            let email = $("input[name='email']").val().trim();
            let btcq = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (email.length == 0) {
                $("#errEmail").html("Email không được để trống");
                return false;
            } else if (!btcq.test(email)) {
                $("#errEmail").html("Email không hợp lệ");
                return false;
            } else {
                $("#errEmail").html("(*)");
                return true;
            }
        }
        $("input[name='email']").blur(function () {
            ktemail();
        });

        function ktSDT() {
            let sdt = $("input[name='sdt']").val();
            let btcq = /^(03|09|08|07)[0-9]{8}$/;
            if (sdt == "") {
                $("#errSDT").html("Số điện thoại không được trống");
                return false;
            } else if (!btcq.test(sdt)) {
                $("#errSDT").html("Số điện thoại phải có định dạng 10 số, bắt đầu bằng 03, 09, 08, 07");
                return false;
            } else {
                $("#errSDT").html("(*)");
                return true;
            }
        }
        $("input[name='sdt']").blur(function () {
            ktSDT();
        });

        function ktDiaChi() {
            let diaChi = $("input[name='dc']").val();
            if (diaChi == "") {
                $("#errDiaChi").html("Địa chỉ không được trống");
                return false;
            } else {
                $("#errDiaChi").html("(*)");
                return true;
            }
        }
        $("input[name='dc']").blur(function () {
            ktDiaChi();
        });

        function ktpw() {
            let pw = $("input[name='txtMK']").val();
            let btcq = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*(),.?":{}|<>])[A-Za-z\d!@#$%^&*(),.?":{}|<>]{8,}$/;
            if (pw == "") {
                $("#errPW").html("Mật khẩu không được để trống");
                return false;
            
            } else if (pw.length < 8) {
                $("#errPW").html("Mật khẩu phải chứa ít nhất 8 ký tự");
                return false;
            }else if (!btcq.test(pw)) {
                $("#errPW").html("Mật khẩu phải gồm chữ hoa chữ thường số và kí tự đặt biệt");
                return false;
            }else {
                $("#errPW").html("(*)");
                return true;
            }
        }
        $("input[name='txtMK']").blur(function () {
            ktpw();
        });

        // Xử lý khi nhấn nút đăng ký
        $("input[name='btndk']").click(function (e) {
            e.preventDefault(); // Ngăn gửi form nếu chưa hợp lệ

            if (ktHoTen() && ktemail() && ktSDT() && ktpw() && ktDiaChi() && ktTDN()) {
                $("form").submit(); // Nếu hợp lệ, gửi form
            } else {
                alert("Vui lòng kiểm tra lại thông tin nhập!");
            }
        });
    });

    // xử lý
    function validateForm() {
    var hoTen = document.querySelector("input[name='tenname']").value.trim();
    var email = document.querySelector("input[name='email']").value.trim();
    var soDienThoai = document.querySelector("input[name='sdt']").value.trim();
    var diaChi = document.querySelector("input[name='dc']").value.trim();
    var pw = document.querySelector("input[name='txtMK']").value.trim();
    var TDN = document.querySelector("input[name='txtTND']").value.trim();

    // Kiểm tra thông tin
    if (!hoTen || !email || !soDienThoai || !diaChi || !pw || !TDN) {
        alert("Vui lòng nhập đầy đủ thông tin!");
        return false;
    }

    // Kiểm tra định dạng thông tin (ví dụ: email hợp lệ, số điện thoại đúng định dạng)
    if (!validateEmail(email)) {
        alert("Email không hợp lệ!");
        return false;
    }

    if (!validatePhoneNumber(soDienThoai)) {
        alert("Số điện thoại không hợp lệ!");
        return false;
    }

    if (pw.length < 8) {
        alert("Mật khẩu phải có ít nhất 8 ký tự!");
        return false;
    }

    // Nếu tất cả đều hợp lệ, gửi form
    return true;
}

function validateEmail(email) {
    var re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return re.test(email);
}

function validatePhoneNumber(phone) {
    var re = /^(03|09|08|07)[0-9]{8}$/;
    return re.test(phone);
}

</script>

