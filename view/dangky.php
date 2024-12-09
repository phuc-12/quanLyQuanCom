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
    <style>
        .error {
    color: red;
    font-size: 12px;
}

    </style>
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
                <form action="#" method="post" onsubmit="return validateForm();">
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
                        <button type="reset" class="submit-btn">Nhập lại</button>
                        <button type="submit" id="btnDangky" class="submit-btn">Đăng Ký</button>
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
                <div class="doc1">
                    <h4>
                        QUÁN CƠM CHÍ PHÈO
                    </h4>
                    <p>
                        GIÁ RẺ - NGON - VỆ SINH - AN TOÀN
                    </p>
                    <img src="../IMG/ChiPheologo.png" alt="">
                    <P>
                        Chúng tôi cam kết mang đến những sản phẩm chất lượng với số lượng lớn đáp ứng nhu cầu đa dạng
                        của
                        từng khách hàng
                    </P>
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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy dữ liệu từ form
        $tdn = trim($_POST['txtTND']);
        $pw = md5(trim($_POST['txtMK'])); // Mã hóa mật khẩu
        $tenname = trim($_POST['tenname']);
        $email = trim($_POST['email']);
        $dc = trim($_POST['dc']);
        $sdt = trim($_POST['sdt']);

        // Kiểm tra dữ liệu
        if (empty($tdn) || empty($pw) || empty($tenname) || empty($email) || empty($dc) || empty($sdt)) {
            echo "<script>alert('Vui lòng điền đầy đủ thông tin!'); window.location.href='dangky.php';</script>";
            exit;
        }

        // Khởi tạo lớp xử lý đăng ký
        $p = new cdangky();
        $result = $p->getdangky($tdn, $pw, $tenname, $email, $dc, $sdt);

        if ($result == 1) {
            // Đăng ký thành công
            echo "<script>alert('Đăng ký thành công!'); window.location.href='dangnhap.php';</script>";
        } elseif ($result == -1) {
            // Tài khoản đã tồn tại
            echo "<script>alert('Tài khoản đã tồn tại!'); window.location.href='dangky.php';</script>";
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

