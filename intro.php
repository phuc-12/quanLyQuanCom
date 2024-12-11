<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Trang chủ</title>
</head>
<style>
    .intro p,b{
        font-family: 'Courier New', Courier, monospace;
        font-size: 18px;
        margin-left: 25px;
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
            <div class="auth-buttons">
                <a href="view/dangky.php">Đăng ký</a>
                <a href="view/dangnhap.php">Đăng nhập</a>
            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="main-nav">
            <a href="index.php">TRANG CHỦ</a>
            <a href="intro-menu.php">THỰC ĐƠN</a>
            <div class="logo">
                <img src="IMG/ChiPheologo.png" alt="">
            </div>
            <a href="intro.php">GIỚI THIỆU</a>
            <a href="#">KHUYẾN MÃI</a>
        </nav>

        <!-- Category Navigation -->
        <div class="category-nav">
            <a href="category-food.php?id=1">Món chay</a>
            <a href="category-food.php?id=2">Món mặn</a>
            <a href="category-food.php?id=3">Đồ uống</a>
            <a href="category-food.php?id=4">Tráng Miệng</a>
        </div>

        <div class="intro">
            <br>
            <div class="form-title">
                <h4 style="position: absolute; padding-top: 20px; font-size: 20px;">Giới thiệu</h4>
                <img src="img/Vector-3-1.svg" alt="" width="150px" height="60px">
            </div>
            <p>     Chào mừng đến với Cơm Chí Phèo – Hương vị đậm đà, dân dã! <br>
                Tại Cơm Chí Phèo, chúng tôi không chỉ phục vụ những bữa ăn no nê, mà còn mang đến cho bạn cảm giác thân
                quen
                như đang thưởng thức cơm nhà. Được đặt theo tên nhân vật nổi tiếng trong tác phẩm văn học Việt Nam, quán
                Chí
                Phèo là nơi bạn tìm thấy sự chân thật, giản dị và ấm áp trong từng món ăn.
                Chúng tôi chuyên phục vụ các món cơm truyền thống với hương vị đặc trưng của quê hương, từ các món mặn
                đến
                những món chay đều có hương vị đậm đà. Tất cả nguyên liệu đều được chọn lọc kỹ lưỡng từ các nguồn cung
                ứng
                uy tín, đảm bảo sự tươi ngon và chất lượng cho từng bữa cơm.
                Với không gian gần gũi, ấm cúng và phong cách phục vụ thân thiện, Cơm Chí Phèo hy vọng sẽ là địa điểm
                yêu
                thích của bạn và gia đình, nơi lưu giữ và truyền tải hương vị của một vùng quê Việt Nam chân chất. Hãy
                đến
                và cảm nhận sự khác biệt trong từng món ăn của chúng tôi!
                <br><br><b>Địa chỉ: F4/9C tổ 14 ấp 6C, xã Vĩnh Lộc A, huyện Bình Chánh, TP.HCM</b>
                <br><b>Giờ mở cửa: Thứ 2 - Chủ nhật / 7:00 - 18:00 </b> 
                <br><b>Hotline: 0346021604</b>
            </p><br>
        </div>

        <div class="form-title">
            <h4 style="position: absolute; padding-top: 20px; font-size: 20px;">Sứ mệnh</h4>
            <img src="img/Vector-3-1.svg" alt="" width="150px" height="60px">
        </div>
        <div class="intro">
            <p>     Mang đến những bữa cơm đậm đà, giản dị như cơm nhà, Cơm Chí Phèo cam kết đem lại hương vị truyền thống
                Việt
                Nam từ nguyên liệu tươi ngon, an toàn.
                Với sự tận tâm, chúng tôi hy vọng trở thành điểm đến quen thuộc cho mọi bữa ăn ấm cúng, chân thành.
            </p><br>
        </div>

        <div class="form-title">
            <h4 style="position: absolute; padding-top: 20px; font-size: 20px;">Thành viên</h4>
            <img src="img/Vector-3-1.svg" alt="" width="150px" height="60px">
        </div>
        <div class="user-grid">
            <div class="user-item">
                <div class="img-placeholder"><img src="IMG/1.jpg" alt=""></div>
                <h3>Nguyễn Đăng Hồng Phúc</h3>
                <p>Quản lý cửa hàng</p>
            </div>
            <div class="user-item">
                <div class="img-placeholder"><img src="IMG/1.jpg" alt=""></div>
                <h3>Lương Công Triều</h3>
                <p>Giám sát viên</p>
            </div>
            <div class="user-item">
                <div class="img-placeholder"><img src="IMG/1.jpg" alt=""></div>
                <h3>Nguyễn Thị Nga</h3>
                <br>
                <p>Giám sát viên</p>
            </div>
            <div class="user-item">
                <div class="img-placeholder"><img src="IMG/1.jpg" alt=""></div>
                <h3>Lê Văn Vinh</h3>
                <br>
                <p>Giám sát viên</p>
            </div>
            <div class="user-item">
                <div class="img-placeholder"><img src="IMG/1.jpg" alt=""></div>
                <h3>Ngô Thành Phước</h3>
                <p>Giám sát viên</p>
            </div>
            <div class="user-item">
                <div class="img-placeholder"><img src="IMG/1.jpg" alt=""></div>
                <h3>Lâm Thị Huyền Trân</h3>
                <p>Giám sát viên</p>
            </div>
            <div class="user-item">
                <div class="img-placeholder"><img src="IMG/1.jpg" alt=""></div>
                <h3>Phạm Văn Tuyên</h3>
                <p>Giám sát viên</p>
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