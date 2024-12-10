<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" href="../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Trang chủ</title>
</head>
<style>
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

        <div class="form-title">
            <h4 style="position: absolute; padding-top: 20px; font-family:'Courier New', Courier, monospace; font-size: 20px;">Thông tin liên hệ</h4>
            <img src="img/Vector-3-1.svg" alt="" width="250px" height="60px">
        </div>

        <div class="contact">     
            <p id="tt">Chuỗi quán cơm bình dân Chí Phèo với sự ghi nhận và ủng hộ từ khách hàng, quán ăn hứa hẹn sẽ cố gắng cải thiện và phát triển hơn chuỗi cửa hàng để phục vụ quý khách hàng.
               <br> 
            Thông tin liên hệ của chuỗi của hàng đa dạng qua các kênh truyền thông.            </p>
            <div class="ll">
                <a href="https://www.facebook.com/profile.php?id=61553590355575"><img id="fb" src="img/facee.png" alt=""></a>
                <img id="anh" src="img/ChiPheologo.png" alt="">
                <a href="list-res.php"><img id="map" src="img/maplogo.png" alt=""></a>
                <a href="https://zalo.me/0346021604"><img id="zl" src="img/zaloo.png" alt=""></a>
            </div>
        </div>

        <div class="contact-info">
            <div class="info-item">
                <div class="info-content">
                    <div class="ic1">
                        <h3>Quán ăn chính</h3>
                        <p>Số 12 Nguyễn Văn Bảo, Phường 4, Quận Gò Vấp, TPHCM</p>
                    </div>
                    <div class="ic1">
                        <h3>Số điện thoại</h3>
                        <p>0346.021.604</p>
                    </div>
                    <div class="ic1">
                        <h3>Thời gian hoạt động</h3>
                        <p>Thứ 2 - Chủ nhật: 6:00 - 20:00</p>
                    </div>
                    <div class="ic1">
                        <h3>Email</h3>
                        <p>marketing@chipheoquan.com</p>
                    </div>
            </div>
        </div>
       
            <!-- <div class="contact-form">
                <h2 class="form-title">LIÊN HỆ</h2>
                <form>
                    <div class="form-group">
                        <label>Họ tên:</label>
                        <input type="text">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email">
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại:</label>
                        <input type="tel">
                    </div>
                    <div class="form-group">
                        <label>Nội dung:</label>
                        <textarea></textarea>
                    </div>
                    <button type="submit" class="submit-btn">GỬI</button>
                </form>
            </div> -->
        </div>

        <br>
        <div class="form-title">
            <h4 style="position: absolute; padding-top: 20px; font-family:'Courier New', Courier, monospace; font-size: 20px;">Chính sách khách hàng</h4>
            <img src="img/Vector-3-1.svg" alt="" width="250px" height="60px">
        </div>
        <br>
        <div class="info-content">
            <div id="cstt">
                        <h3> Chính sách thanh toán</h3>
                        <p style="margin-left: 20px; font-size: 16px;">
                            Thông tin thanh toán được đảm bảo rõ ràng và minh bạch.<br> 
                            Khách hàng có thể lựa chọn đa dạng hình thức thanh toán : chuyển khoản hoặc thanh toán tiền mặt sau khi hoàn thành đơn hàng.<br>
                            Chúng tôi đưa hình ảnh, thông tin và giá cả của từng món ăn rõ ràng và minh bạch.<br>
                            Thanh toán sẽ được thực hiện trực tiếp với nhân viên bán hàng.
                        </p>
            </div>
            <div id="csbm">
                        <h3> Chính sách bảo mật</h3>
                        <p style="margin-left: 20px; font-size: 16px;">Nếu bạn thực hiện đăng ký và tích điểm tại các quán ăn, chúng tôi sẽ thu thập một số thông tin như:<br></p>
                        <ul style="list-style-type: none; margin-left: 50px; font-size: 16px;">
                            <li>Tên khách hàng</li>
                            <li>Ngày sinh</li>
                            <li>Giới tính</li>
                            <li>Địa chỉ</li>
                            <li>Số điện thoại</li>
                        </ul>
                        <p style="margin-left: 20px; font-size: 16px;"> Chúng tôi sử dụng thông tin cá nhân của bạn phù hợp với Đạo Luật Bảo Vệ Thông Tin Cá Nhân.<br>
                            Mục đích chính của chúng tôi trong việc thu thập thông tin cá nhân là theo dõi dịch vụ, cung cấp cho bạn một dịch vụ<br> khách hàng chuyên nghiệp và hiệu quả.<br>
                        </p>
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
                        <!-- <li><a href="#" class="doc">Cách Đặt Lịch Tại Website</a></li> -->
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
                        <!-- <li>Chí Phèo quán: F4/9C tổ 14 ấp 6C, xã Vĩnh Lộc A, huyện Bình Chánh, TP.HCM</li> -->
                        <!-- <li>Giờ mở cửa: Thứ 2 - Chủ nhật: 6:00 - 20:00</li> -->
                    </ul>
                </div>
                <div class="doc4">
                    <h4>LIÊN KẾT NHANH</h4>
                    <br>
                    <ul>
                        <li><i class="fa fa-exclamation-circle"></i><a href="intro.php" class="doc">  Giới Thiệu</a></li>
                        <li><i class="fa fa-map-marker"></i><a href="list-res.php" class="doc">&nbsp;12 Nguyễn Văn Bảo, Phường 04, Quận Gò Vấp , Thành phố Hồ Chí Minh , Việt Nam</a></li>
                        <!-- <li><a href="#" class="doc">Facebook</a></li> -->
                    </ul>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>