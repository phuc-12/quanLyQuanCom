<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/product-detail.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/style.css">
    <link rel="stylesheet" href="../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Chi tiết món ăn</title>
</head>
<body>
     <div class="container-fluid">
        <!-- Main Navigation -->
     <nav class="main-nav">
            <a href="index.php">Trang chủ</a>
            <a href="intro-menu.php">Thực đơn</a>
            <div class="logo">
                <img src="../../IMG/ChiPheologo.png" alt="">
            </div>
            <a href="intro.php">Giới Thiệu</a>
            <a href="contact.php">Liên Hệ</a>
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
                <img src="../../IMG/banner1.jpg" style="width:100%; height:800px">
            </div>
            <div class="mySlides fade">
                <img src="../../IMG/banner2.jpg" style="width:100%; height:800px">
            </div>
            <div class="mySlides fade">
                <img src="../../IMG/banner3.jpg" style="width:100%; height:800px">
            </div>
            <div class="mySlides fade">
                <img src="../../IMG/banner4.jpg" style="width:100%; height:800px">
            </div>

            <!-- Chấm điểm điều hướng (dots) -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>
        </div>

    <!-- Product Detail Section -->
    <div class="product-detail">
        <div class="product-images">
            <div class="main-image">
                <div class="image-placeholder">Hình ảnh</div>
            </div>
            <div class="thumbnail-grid">
                <div class="thumbnail">ảnh 1</div>
                <div class="thumbnail">ảnh 2</div>
                <div class="thumbnail">ảnh 3</div>
            </div>
        </div>

        <div class="product-info">
            <h1>Tên món ăn</h1>
            <p class="price">Giá</p>
            <div class="description">
                <p>Mô tả sơ lược</p>
            </div>
            <div class="dimensions">
                <label>Kích thước:</label>
                <input type="text" placeholder="kích thước" class="dimension-input">
            </div>
        </div>

        <div class="promotion-box">
            <h2>Ưu đãi</h2>
        </div>
    </div>

    <!-- Related Products -->
    <section class="related-products">
        <h2>SẢN PHẨM LIÊN QUAN</h2>
        <div class="product-grid">
            <div class="product-card">
                <div class="image-placeholder">Hình ảnh</div>
                <h3>Tên món</h3>
                <p>Giá</p>
            </div>
            <div class="product-card">
                <div class="image-placeholder">Hình ảnh</div>
                <h3>Tên món</h3>
                <p>Giá</p>
            </div>
            <div class="product-card">
                <div class="image-placeholder">Hình ảnh</div>
                <h3>Tên món</h3>
                <p>Giá</p>
            </div>
            <div class="product-card">
                <div class="image-placeholder">Hình ảnh</div>
                <h3>Tên món</h3>
                <p>Giá</p>
            </div>
        </div>
    </section>

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
                    <img src="IMG/ChiPheologo.png" alt="">
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
</body>
</html>