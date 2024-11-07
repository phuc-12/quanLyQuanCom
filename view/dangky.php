<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <title>Đăng ký</title>
</head>
<body>
<!-- Top Bar -->
<div class="top-bar">
        <div class="contact-info">
            <span>1900-1900</span>
            <span>Thứ 2 - Chủ nhật 7:00 - 18:00</span>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="main-nav">
        <a href="../index.php">Trang chủ</a>
       
    </nav>

    <!-- Category Navigation -->
    <div class="category-nav">
        <h1 class="form-title">Đăng Ký</h>
    </div>

    <div class="intro">
        <div class="contact1">
                <form>
                    <div class="form-group">
                        <label>Username:</label>
                        <input type="text" name="txtTND">
                    </div>
                
                
                    <div class="form-group">
                        <label>password:</label>
                        <input type="password" name="txtMK">
                    </div>
                    <div class="form-group">
                        <label>Họ Tên:</label>
                        <input type="text" name="tenname">
                    </div>
                    <div class="form-group">
                        <label>Địa Chỉ:</label>
                        <td><input type="text" name="dc"></td>
                    </div>
                    <div class="form-group">
                        <label>Số Điện Thoại:</label>
                        <td><input type="text" name="sdt"></td>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" name="email">
                    </div>
                    <tr>
                        <td><input type="reset" value="Nhập Lại"></td>
                        <td><input type="submit" value="Đăng ký" name="guiDK"></td>
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
                QUÁN CƠM CHI PHÈO
            </h4>
            <p>
                GIÁ RẺ - NGON - VỆ SINH - AN TOÀN
            </p>
            <img src="IMG/ChiPheologo.png" alt="">
            <ul>
                <li><a href="https://zalo.me/0346021604" class="doc">Zalo: 0346021604</a></li>
                <li>Địa chỉ: F4/9C tổ 14 ấp 6C, xã Vĩnh Lộc A, huyện Bình Chánh, TP.HCM</li>
                <li>Giờ mở cửa: Thứ 2 - Chủ nhật: 6:00 - 20:00</li>
            </ul>
        </div>
    </div>
    </footer>
</body>
</html>
<?php
    if(isset($_POST['guiDK'])){
        include_once('controller/cDangky.php');
        $p = new cdangky;
        $p -> cDK01ND($_POST['name'],$_POST['pw'],$_POST['tenname'],$_POST['dc'],$_POST['sdt'],$_POST['email']);
    }

?>