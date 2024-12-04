<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Trang Đăng Ký</title>
</head>
<body>
    <div class="container-fluid p-0">
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="contact-info">
                <span>0346021604</span>
                <span> - </span>
                <span>Thứ 2 - Chủ nhật 7:00 - 18:00</span>
            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="main-nav">
            <a href="../index.php">Trang chủ</a>
            <a href="../intro-menu.php">Thực đơn</a>
            <div class="logo">
                <img src="../IMG/ChiPheologo.png" alt="">
            </div>
            <a href="../intro.php">Giới Thiệu</a>
            <a href="../contact.php">Liên Hệ</a>
        </nav>

        <div class="contactv1">
            <div class="contact-formv1">
                <h2 class="form-title">ĐĂNG KÝ</h2>
                <form id="formDangKy" action="#" method="post">
                    <div class="form-group">
                        <label>Username:</label>
                        <input type="text" id="txtTND" name="txtTND">
                        <span id="errTDN" class="error-msg"></span>
                    </div>

                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" id="txtPW" name="txtPW">
                        <span id="errPW" class="error-msg"></span>
                    </div>

                    <div class="form-group">
                        <label>Họ Tên:</label>
                        <input type="text" id="txtHoTen" name="hoTen">
                        <span id="errHoTen" class="error-msg"></span>
                    </div>

                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" id="txtEmail" name="email">
                        <span id="errEmail" class="error-msg"></span>
                    </div>

                    <div class="form-group">
                        <label>Địa Chỉ:</label>
                        <input type="text" id="txtDiaChi" name="diaChi">
                        <span id="errDiaChi" class="error-msg"></span>
                    </div>

                    <div class="form-group">
                        <label>Số Điện Thoại:</label>
                        <input type="text" id="txtSDT" name="sdt">
                        <span id="errSDT" class="error-msg"></span>
                    </div>

                    

                    <button type="reset" class="submit-btn">Nhập lại</button>
                    <button type="submit" id="btnDangky" class="submit-btn">Đăng Ký</button>
                    <div>
                        <a href="dangnhap.php">Đăng Nhập</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer">
            <div class="contain1">
                <div class="doc1">
                    <h4>QUÁN CƠM CHÍ PHÈO</h4>
                    <p>GIÁ RẺ - NGON - VỆ SINH - AN TOÀN</p>
                    <img src="../IMG/ChiPheologo.png" alt="">
                    <P>Chúng tôi cam kết mang đến những sản phẩm chất lượng với số lượng lớn đáp ứng nhu cầu đa dạng của từng khách hàng</P>
                </div>
                <div class="doc2">
                    <h4>CHÍNH SÁCH</h4>
                    <ul>
                        <li><a href="#" class="doc">Cách Đặt Lịch Tại Website</a></li>
                        <li><a href="#" class="doc">Chính Sách Bảo Mật</a></li>
                        <li><a href="#" class="doc">Phương Thức Thanh Toán</a></li>
                    </ul>
                </div>
                <div class="doc3">
                    <h4>LIÊN HỆ ĐẶT HÀNG</h4>
                    <ul>
                        <li><a href="https://zalo.me/0346021604" class="doc">Zalo: 0346021604</a></li>
                        <li>Địa chỉ: F4/9C tổ 14 ấp 6C, xã Vĩnh Lộc A, huyện Bình Chánh, TP.HCM</li>
                        <li>Giờ mở cửa: Thứ 2 - Chủ nhật: 6:00 - 20:00</li>
                    </ul>
                </div>
                <div class="doc4">
                    <h4>LIÊN KẾT NHANH</h4>
                    <ul>
                        <li><a href="#" class="doc">Giới Thiệu</a></li>
                        <li><a href="#" class="doc">Liên Hệ-Bản Đồ Đường Đi</a></li>
                        <li><a href="#" class="doc">Facebook</a></li>
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

    if (isset($_REQUEST["btndk"])) {
        $mk = md5($_REQUEST["txtMK"]);
        $p = new cdangky();
        $con = $p->getdangky($_REQUEST["txtTND"], $mk, $_REQUEST["tenname"], $_REQUEST["email"], $_REQUEST["dc"], $_REQUEST["sdt"]);

        if ($con == 1) {
            // Đăng ký thành công, chuyển hướng sang trang đăng nhập với thông báo thành công
            echo "<script>
                    alert('Đăng ký thành công!');
                    window.location.href = 'dangnhap.php'; // Chuyển hướng sang trang đăng nhập
                  </script>";
        } else if ($con) {
            // Nếu tài khoản đã tồn tại, thông báo và chuyển hướng về trang đăng ký
            echo "<script>
                    alert('Tài khoản đã tồn tại, vui lòng chọn tài khoản khác!');
                    window.location.href = 'dangky.php'; // Quay lại trang đăng ký
                  </script>";
        } else {
            // Đăng ký thất bại, quay lại trang đăng nhập
            echo "<script>
                    alert('Đăng ký thất bại!');
                    window.location.href = 'dangnhap.php'; // Quay lại trang đăng nhập
                  </script>";
        }
    }
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        // Kiểm tra thông tin người dùng khi blur ra khỏi trường input
        function ktHoTen() {
            let hoTen = $("#txtHoTen").val().trim();
            let btcq = /^([A-Z][a-z]* )*([A-Z][a-z]*)$/;
            if(hoTen.length == 0) {
                $("#errHoTen").html("Họ tên không được để trống");
                $("#txtHoTen").focus();
                return false;
            } else if (!btcq.test(hoTen)) {
                $("#errHoTen").html("Tên không hợp lệ");
                $("#txtHoTen").focus();
                return false;
            } else {
                $("#errHoTen").html("(*)");
                return true;
            } 
        }

        $("#txtHoTen").blur(function(){
            ktHoTen();
        });

        function ktTDN() {
            let TDN = $("#txtTND").val();
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
        $("#txtTND").blur(function() {
            ktTDN();
        });

        function ktemail() {
            let email = $("#txtEmail").val().trim();
            let btcq = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if(email.length == 0) {
                $("#errEmail").html("Email không được để trống");
                $("#txtEmail").focus();
                return false;
            } else if (!btcq.test(email)) {
                $("#errEmail").html("Email không hợp lệ");
                $("#txtEmail").focus();
                return false;
            } else {
                $("#errEmail").html("(*)");
                return true;
            }
        }
        $("#txtEmail").blur(function(){
            ktemail();
        });

        function ktSDT() {
            let sdt = $("#txtSDT").val();
            let btcq = /^(03|09|08|07)[0-9]{8}$/;
            if (sdt == "") {
                $("#errSDT").html("Số điện thoại không được trống");
                return false;
            } else if (!btcq.test(sdt)) {
                $("#errSDT").html("Số điện thoại có định dạng là 10 con số trong đó luôn bắt đầu 09, 03, 08, 07.");
                return false;
            } else {
                $("#errSDT").html("(*)");
                return true;
            }
        }
        $("#txtSDT").blur(function(){
            ktSDT();
        });

        function ktDiaChi() {
            let diaChi = $("#txtDiaChi").val();
            if (diaChi == "") {
                $("#errDiaChi").html("Địa chỉ không được trống");
                return false;
            } else {
                $("#errDiaChi").html("(*)");
                return true;
            }
        }
        $("#txtDiaChi").blur(function(){
            ktDiaChi();
        });

        function ktpw() {
            let pw = $("#txtPW").val();
            if(pw == "") {
                $("#errPW").html("Mật khẩu không được để trống");
                return false;
            } else {
                $("#errPW").html("(*)");
                return true;
            }
        }
        $("#txtPW").blur(function(){
            ktpw();
        });

        function ktpwa() {
            let pwa = $("#txtPWA").val();
            let pw = $("#txtPW").val();
            if(pwa == "") {
                $("#errPWA").html("Nhập lại mật khẩu");
                return false;
            } else if (pwa !== pw) {
                $("#errPWA").html("Mật khẩu không trùng khớp");
                return false;
            } else {
                $("#errPWA").html("(*)");
                return true;
            }
        }
        $("#txtPWA").blur(function(){
            ktpwa();
        });

        $("#btnDangky").click(function(e){
            e.preventDefault(); // Ngăn không gửi form mặc định
            if (ktHoTen() && ktemail() && ktSDT() && ktpw() && ktpwa()) {
                register();
            } else {
                alert("Thông tin không hợp lệ");
            }
        });

    });

    function register() {
        var hoTen = document.getElementById('txtHoTen').value;
        var email = document.getElementById('txtEmail').value;
        var soDienThoai = document.getElementById('txtSDT').value;
        var diaChi = document.getElementById('txtDiaChi').value;
        var pw = document.getElementById('txtPW').value;
        var TDN = document.getElementById('txtTND').value;

        // Lưu thông tin đăng ký vào local storage
        localStorage.setItem('hoTen', hoTen);
        localStorage.setItem('TDN', TDN);
        localStorage.setItem('email', email);
        localStorage.setItem('soDienThoai', soDienThoai);
        localStorage.setItem('diaChi', diaChi);
        localStorage.setItem('pw', pw);

        alert("Đăng ký thành công!");
        window.location.href = "dangnhap.php";
        return false;
    }
</script>
