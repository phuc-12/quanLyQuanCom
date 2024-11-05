<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <title>Trang chủ</title>
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

    <div class="category-nav">
        <h2 class="form-title">Đăng Nhập</h2>
    </div>

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
                 <tr>
                    <td colspan="2" class="button-row">
                        <input type="reset" name="reset" value="Nhập lại">
                        <input type="submit" name="btn_DangNhap" value="Đăng nhập">
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="dangky.php">Đăng ký tài khoản</a>
                    </td>
                </tr>
            </form>
            
       
 
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
            <img src="../assets/img/logo-white.png" alt="">
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
    if(isset($_POST['btn_DangNhap'])){
        include_once('controller/cNguoiDung.php');
        $p = new cNguoiDung();
        $con = $p -> get01NguoiDung($_REQUEST['txtTND'],$_REQUEST['txtMK']);
    }

?>