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

<body>
    <div class="container-fluid p-0">
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="contact-info">
                <span>0346021604</span>
                <span> / </span>
                <span>Thứ 2 - Chủ nhật / 7:00 - 18:00</span>
            </div>
            <div class="auth-buttons">
                <div class="search">
                    <input type="search" placeholder="" autocomplete="off" id="s">
                    <input type="submit" name="btn" id="btn" value="Search">
                </div>
                <a href="view/dangky.php">Đăng ký</a>
                <a href="view/dangnhap.php">Đăng nhập</a>
            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="main-nav">
            <a href="index.php">Trang chủ</a>
            <a href="intro-menu.php">Thực đơn</a>
            <div class="logo">
                <img src="IMG/ChiPheologo.png" alt="">
            </div>
            <a href="intro.php">Giới Thiệu</a>
            <a href="contact.php">Liên Hệ - Chính sách</a>
        </nav>

        <!-- Category Navigation -->
        <div class="category-nav">
            <a href="category-food.php">Món chay</a>
            <a href="#">Món mặn</a>
            <a href="#">Đồ uống</a>
            <a href="#">Tráng Miệng</a>
        </div>

        <!-- Banner -->
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="IMG/banner1.jpg" style="width:100% height:800px">
            </div>
            <div class="mySlides fade">
                <img src="IMG/banner2.jpg" style="width:100% height:800px">
            </div>
            <div class="mySlides fade">
                <img src="IMG/banner3.jpg" style="width:100% height:800px">
            </div>
            <div class="mySlides fade">
                <img src="IMG/banner4.jpg" style="width:100% height:800px">
            </div>

            <!-- Chấm điểm điều hướng (dots) -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>
        </div>

        <!--Menu services -->
        <div class="services">
            <div class="services-box">
                <img src="IMG/service1.png" alt="">
                <h2>Thực đơn cơm văn phòng</h2>
                <p>Thực đơn cơm văn phòng được các đầu bếp có tay nghề, uyên thâm trong lĩnh vực cơm văn phòng chế biến
                </p>
                <!-- <br><a href="">Chi tiết</a> -->
            </div>
            <div class="services-box">
                <img src="IMG/service2.jpg" alt="">
                <h2>Dịch vụ giao cơm tận nơi</h2>
                <p>Giao cơm tận nơi là trách nhiệm của chúng tôi, mọi ưu tiên về quyền lợi và sự hài lòng của khách hàng
                    là
                    tiêu chí của chúng tôi</p>
                <!-- <br><a href="">Chi tiết</a> -->
            </div>
            <div class="services-box">
                <img src="IMG/service3.jpg" alt="">
                <h2>Chất lương nguyên liệu tươi sống</h2>
                <p>Chất lương nguyên liệu luôn luôn đứng đầu trong các lựa chọn để có một món ăn ngon
                    miệng, sức khỏe</p>
                <!-- <br><a href="">Chi tiết</a> -->
            </div>
        </div>

        <!-- Image Banner -->
        <div class="image-banner">
            <div class="image-banner-grid">
                <div class="image-banner-item"><img src="IMG/monman/cabasakho.png" alt=""></div>
                <!-- <div class="image-banner-item"><img src="IMG/monchay/bokhochay.jpg" alt=""></div> -->
                <div class="image-banner-item"><img src="IMG/trangmieng/banhchuoihap.png" alt=""></div>
                <div class="image-banner-item"><img src="IMG/douong/epthom.png" alt=""></div>
                <div class="image-banner-item"><img src="IMG/monman/thitkho.jpg" alt=""></div>
                <div class="image-banner-item"><img src="IMG/monman/comthitkhotieu.jpg" alt=""></div>
                <div class="image-banner-item"><img src="IMG/monchay/canh/canhchuanam.png" alt=""></div>

            </div>
        </div>
        <!-- Menu Section -->
        <!-- Món mặn  -->
        <h1 class="section-title">THỰC ĐƠN BÁN CHẠY</h1>
        <div class="menu">
            <h2 class="section-title">MÓN MẶN</h2>
            <div class="menu-grid">
                <?php
                    error_reporting(0);
                    include("view/view_trangchu/view_monMan.php");
                ?>
            </div>
        </div>
        <!-- Món chạy  -->
        <div class="menu">
            <h2 class="section-title">MÓN CHAY</h2>
            <div class="menu-grid">
                <?php
                    error_reporting(0);
                    include("view/view_trangchu/view_monChay.php");
                ?>
            </div>
        </div>
        <!-- Tráng miệng  -->
        <div class="menu">
            <h2 class="section-title">MÓN TRÁNG MIỆN</h2>
            <div class="menu-grid">
                <?php
                    error_reporting(0);
                    include("view/view_trangchu/view_monTrangMieng.php");
                ?>
            </div>
        </div>
        <!-- Nước giải khát -->
        <div class="menu">
            <h2 class="section-title">NƯỚC GIẢI KHÁT</h2>
            <div class="menu-grid">
                <?php
                    error_reporting(0);
                    include("view/view_trangchu/view_DoUong.php");
                ?>
            </div>
        </div>
        <!--Menu Section -->
        <br>
        <div class="services">
            <div class="services-box">
                <img src="IMG/service4.png" alt="">
                <h3>Thực đơn Đa Dạng</h3>
                <p>Thực đơn cơm văn phòng được thay đổi hàng ngày với hàng trăm món ăn khác nhau</p>
            </div>
            <div class="services-box">
                <img src="IMG/service5.png" alt="">
                <h3>Chất Lượng Hàng Đầu</h3>
                <p>Chúng tôi luôn hướng đến việc đưa ra thị trường những món ăn có chất lượng cao về dinh dưỡng và thẩm
                    mỹ, đó là kim chỉ nam của Cơm Nhà</p>
            </div>
            <div class="services-box">
                <img src="IMG/service6.png" alt="">
                <h3>Địa Chỉ Uy Tín</h3>
                <p>Với chất lượng sản phẩm, sự chuyên nghiệp hóa và tận tâm, chúng tôi là địa chỉ uy tín cung cấp các
                    sản phẩm dịch vụ cung cấp suất ăn văn phòng</p>
            </div>
            <div class="services-box">
                <img src="IMG/service7.png" alt="">
                <h3>Định Hướng Rõ Ràng</h3>
                <p>Với định hướng rõ ràng, mục tiêu cụ thể, chúng tôi phấn đấu là đơn vị cung cấp suất ăn văn phòng,
                    suất ăn công nghiệp uy tín nhất ở TP. Hồ Chí Minh</p>
            </div>
            <div class="services-box">
                <img src="IMG/service8.png" alt="">
                <h3>Phát Triển Bền Vững</h3>
                <p>Đội ngũ nhân viên trẻ, tài năng và tâm huyết, chúng tôi luôn mong muốn đồng hành và phát triển cùng
                    khách hàng</p>
            </div>
        </div>
        <!-- Footer -->
        <footer class="footer">
            <div class="contain1">
                <div class="row" style="background-color: rgb(245, 245, 245); height: 50px;">
                    <h2 style="color: rgb(84, 81, 81); font-family:Copperplate; margin-left: 10px; margin-top: 15px; padding-top: 10px"><b>QUÁN CƠM CHÍ PHÈO</b></h2>
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
                        <li><a href="#" class="doc">Cách Đặt Lịch Tại Website</a></li>
                        <li><a href="#" class="doc">Chính Sách Bảo Mật</a></li>
                        <li><a href="#" class="doc">Phương Thức Thanh Toán</a></li>
                    </ul>
                </div>
                <div class="doc3">
                    <h4>THÔNG TIN LIÊN HỆ</h4>
                    <br>
                    <ul>
                        <li><a href="https://zalo.me/0346021604" class="doc">Zalo: 0346021604</a></li>
                        <li>Email: marketing@chipheoquan.com</li>
                        <li><a href="https://www.facebook.com/profile.php?id=61553590355575" class="doc">Facebook : ChíPhèo quán</a></li>
                        <li>Chí Phèo quán: F4/9C tổ 14 ấp 6C, xã Vĩnh Lộc A, huyện Bình Chánh, TP.HCM</li>
                        <!-- <li>Giờ mở cửa: Thứ 2 - Chủ nhật: 6:00 - 20:00</li> -->
                    </ul>
                </div>
                <div class="doc4">
                    <h4>LIÊN KẾT NHANH</h4>
                    <br>
                    <ul>
                        <li><a href="#" class="doc">Giới Thiệu</a></li>
                        <li><a href="#" class="doc">Liên Hệ-Bản Đồ Đường Đi</a></li>
                        <li><a href="#" class="doc">Facebook</a></li>
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