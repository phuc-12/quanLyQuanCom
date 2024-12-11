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

        <div class="category-nav">
            <a href="category-food.php?id=1">Món chay</a>
            <a href="category-food.php?id=2">Món mặn</a>
            <a href="category-food.php?id=3">Đồ uống</a>
            <a href="category-food.php?id=4">Tráng Miệng</a>
        </div>
        
        <div class="wrapper">
            <div class="main">
              <div>
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.8581690523774!2d106.68465671472212!3d10.822164161307272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174deb3ef536f31%3A0x8b7bb8b7c956157b!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2hp4buHcCBUUC5IQ00!5e0!3m2!1svi!2s!4v1678715881876!5m2!1svi!2s"
                  width="100%"
                  height="600"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
                </div>
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


        <script>
            let slideIndex = 0; // Chỉ số ảnh hiện tại
            showSlides(); // Gọi hàm để hiển thị slideshow đầu tiên

            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");

                // Ẩn tất cả các ảnh
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }

                // Tăng chỉ số ảnh
                slideIndex++;
                // Nếu slideIndex vượt quá số lượng ảnh, quay về ảnh đầu tiên
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }

                // Hiển thị ảnh hiện tại
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";

                // Tự động chuyển đến ảnh tiếp theo sau 3 giây
                setTimeout(showSlides, 3000); // Thay đổi ảnh mỗi 3 giây
            }

            // Hàm để chuyển đến ảnh hiện tại khi nhấn vào dấu chấm
            function currentSlide(n) {
                slideIndex = n - 1; // Cập nhật chỉ số ảnh hiện tại
                showSlides(); // Gọi lại hàm showSlides để hiển thị ảnh tương ứng
            }
        </script>
    </div>
</body>

</html>