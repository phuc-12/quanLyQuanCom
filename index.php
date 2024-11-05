<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <title>Trang chủ</title>
</head>

<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="contact-info">
            <span>0346021604</span>
            <span> - </span>
            <span>Thứ 2 - Chủ nhật 7:00 - 18:00</span>
        </div>
        <div class="auth-buttons">
            <input type="search" placeholder="Bạn cần tìm gì" autocomplete="off">
            <a href="#">Đăng ký</a>
            <a href="#">Đăng nhập</a>
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
        <a href="contact.php">Liên Hệ</a>
    </nav>

    <!-- Category Navigation -->
    <div class="category-nav">
        <b><a href="#">Món chay</a></b>
        <b><a href="#">Món mặn</a></b>
        <b><a href="#">Đồ uống</a></b>
        <b><a href="#">Tráng Miệng</a></b>
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
            <p>Thực đơn cơm văn phòng được các đầu bếp có tay nghề, uyên thâm trong lĩnh vực cơm văn phòng chế biến</p>
            <br><a href="">Chi tiết</a>
        </div>
        <div class="services-box">
            <img src="IMG/service2.jpg" alt="">
            <h2>Dịch vụ giao cơm tận nơi</h2>
            <p>Giao cơm tận nơi là trách nhiệm của chúng tôi, mọi ưu tiên về quyền lợi và sự hài lòng của khách hàng là
                tiêu chí của chúng tôi</p>
            <br><a href="">Chi tiết</a>
        </div>
        <div class="services-box">
            <img src="IMG/service3.jpg" alt="">
            <h2>Chất lương nguyên liệu tươi sống</h2>
            <p>TĐối với ẩm thực, chất lương nguyên liệu luôn luôn đứng đầu trong các lựa chọn để có một món ăn ngon
                miệng, sức khỏe</p>
            <br><a href="">Chi tiết</a>
        </div>
    </div>

    <!-- Image Banner -->
    <div class="image-banner">
        <div class="image-banner-grid">
            <div class="image-banner-item"><img src="IMG/monman/cabasakho.png" alt=""></div>
            <div class="image-banner-item"><img src="IMG/monchay/bokhochay.jpg" alt=""></div>
            <div class="image-banner-item"><img src="IMG/trangmieng/banhchuoihap.png" alt=""></div>
            <div class="image-banner-item"><img src="IMG/douong/epthom.png" alt=""></div>
            <div class="image-banner-item"><img src="IMG/monman/thitkho.jpg" alt=""></div>
            <div class="image-banner-item"><img src="IMG/monman/comthitkhotieu.jpg" alt=""></div>
            <div class="image-banner-item"><img src="IMG/monchay/canh/canhchuanam.png" alt=""></div>

        </div>
    </div>
    <!-- Menu Section -->
    <!-- Món chay  -->
    <div class="menu">
        <h2 class="section-title">MÓN CHAY</h2>
        <div class="menu-grid">
            <div class="menu-item">
                <a href="#">
                    <div class="sp-img">
                        <img src="IMG/monchay/bokhochay.jpg" alt="">
                    </div>
                    <div class="sp-info">
                        <h3>Bò kho chay</h3>
                        <p>10.000đ</p>
                    </div>
                </a>
            </div>
            <div class="menu-item">
                <a href="#">
                    <div class="sp-img">
                        <img src="IMG/monchay/suonnonchiengion.png" alt="">
                    </div>
                    <div class="sp-info">
                        <h3>Sườn non chiên giòn</h3>
                        <p>10.000đ</p>
                    </div>
                </a>
            </div>
            <div class="menu-item">
                <a href="#">
                    <div class="sp-img">
                        <img src="IMG/monchay/heoquaychay.png" alt="">
                    </div>
                    <div class="sp-info">
                        <h3>Heo quay chay</h3>
                        <p>10.000đ</p>
                    </div>
                </a>
            </div>
            <div class="menu-item">
                <a href="#">
                    <div class="sp-img">
                        <img src="IMG/monchay/goiduduchay.png" alt="">
                    </div>
                    <div class="sp-info">
                        <h3>Gỏi đu đủ chay</h3>
                        <p>10.000đ</p>
                    </div>
                </a>
            </div>
            <div class="menu-item">
                <a href="#">
                    <div class="sp-img">
                        <img src="IMG/monchay/dauhukhochay.png" alt="">
                    </div>
                    <div class="sp-info">
                        <h3>Đậu hũ kho chay</h3>
                        <p>10.000đ</p>
                    </div>
                </a>
            </div>
            
        </div>
        </div>
        <!-- Món mặn  -->
        <div class="menu">
            <h2 class="section-title">MÓN MẶN</h2>
            <div class="menu-grid">
                <div class="menu-item">
                    <a href="#">
                        <div class="sp-img">
                            <img src="IMG/monman/comchien.jpg" alt="">
                        </div>
                        <div class="sp-info">
                            <h3>Cơm chiên</h3>
                            <p>10.000đ</p>
                        </div>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="#">
                        <div class="sp-img">
                            <img src="IMG/monman/thitkho.jpg" alt="">
                        </div>
                        <div class="sp-info">
                            <h3>Thịt kho</h3>
                            <p>10.000đ</p>
                        </div>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="#">
                        <div class="sp-img">
                            <img src="IMG/monman/boxaoxaot.png" alt="">
                        </div>
                        <div class="sp-info">
                            <h3>Bò xào xã ớt</h3>
                            <p>10.000đ</p>
                        </div>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="#">
                        <div class="sp-img">
                            <img src="IMG/monman/cabasakho.png" alt="">
                        </div>
                        <div class="sp-info">
                            <h3>Cá ba sa kho</h3>
                            <p>10.000đ</p>
                        </div>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="#">
                        <div class="sp-img">
                            <img src="IMG/monman/trungcuonthitbam.png" alt="">
                        </div>
                        <div class="sp-info">
                            <h3>Trứng cuộn thịt bò</h3>
                            <p>10.000đ</p>
                        </div>
                    </a>
                </div>
            </div>  
            </div>
            <!-- Tráng miệng  -->
            <div class="menu">
                <h2 class="section-title">TRÁNG MIỆNG</h2>
                <div class="menu-grid">
                    <div class="menu-item">
                        <a href="#">
                            <div class="sp-img">
                                <img src="IMG/trangmieng/banhchuoihap.png" alt="">
                            </div>
                            <div class="sp-info">
                                <h3>Bánh chuối hấp</h3>
                                <p>10.000đ</p>
                            </div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="#">
                            <div class="sp-img">
                                <img src="IMG/trangmieng/chevaihatsen.png" alt="">
                            </div>
                            <div class="sp-info">
                                <h3>Chè vải hạt sen</h3>
                                <p>10.000đ</p>
                            </div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="#">
                            <div class="sp-img">
                                <img src="IMG/trangmieng/raucauduatruyenthong.png" alt="">
                            </div>
                            <div class="sp-info">
                                <h3>Rau câu dừa</h3>
                                <p>10.000đ</p>
                            </div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="#">
                            <div class="sp-img">
                                <img src="IMG/trangmieng/suachuatraicay.png" alt="">
                            </div>
                            <div class="sp-info">
                                <h3>Sữa chua trái cây</h3>
                                <p>10.000đ</p>
                            </div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="#">
                            <div class="sp-img">
                                <img src="IMG/trangmieng/yogurtoreo.png" alt="">
                            </div>
                            <div class="sp-info">
                                <h3>Yogurt oreo</h3>
                                <p>10.000đ</p>
                            </div>
                        </a>
                    </div>

                </div>
                </div>
                <!-- Nước giải khát -->
                <div class="menu">
                    <h2 class="section-title">NƯỚC GIẢI KHÁT</h2>
                    <div class="menu-grid">
                        <div class="menu-item">
                            <a href="#">
                                <div class="sp-img">
                                    <img src="IMG/douong/sting.png" alt="">
                                </div>
                                <div class="sp-info">
                                    <h3>Sting</h3>
                                    <p>10.000đ</p>
                                </div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="#">
                                <div class="sp-img">
                                    <img src="IMG/douong/cameptuoi.png" alt="">
                                </div>
                                <div class="sp-info">
                                    <h3>Nước cam ép</h3>
                                    <p>10.000đ</p>
                                </div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="#">
                                <div class="sp-img">
                                    <img src="IMG/douong/dualanh.png" alt="">
                                </div>
                                <div class="sp-info">
                                    <h3>Dừa lạnh</h3>
                                    <p>10.000đ</p>
                                </div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="#">
                                <div class="sp-img">
                                    <img src="IMG/douong/eptao.png" alt="">
                                </div>
                                <div class="sp-info">
                                    <h3>Nước ép táo</h3>
                                    <p>10.000đ</p>
                                </div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="#">
                                <div class="sp-img">
                                    <img src="IMG/douong/dendakhongduong.png" alt="">
                                </div>
                                <div class="sp-info">
                                    <h3>Cafe đá</h3>
                                    <p>10.000đ</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    </div>
                    <!--Menu Section -->
                    <br>
                    <div class="services">
                        <div class="services-box">
                            <img src="IMG/service4.png" alt="">
                            <h3>Thực đơn cơm văn phòng</h3>
                            <p>Thực đơn cơm văn phòng được các đầu bếp có tay nghề, uyên thâm trong lĩnh vực cơm văn
                                phòng chế biến</p>
                        </div>
                        <div class="services-box">
                            <img src="IMG/service5.png" alt="">
                            <h3>Dịch vụ giao cơm tận nơi</h3>
                            <p>Giao cơm tận nơi là trách nhiệm của chúng tôi, mọi ưu tiên về quyền lợi và sự hài lòng
                                của khách hàng là
                                tiêu chí của chúng tôi</p>
                        </div>
                        <div class="services-box">
                            <img src="IMG/service6.png" alt="">
                            <h3>Chất lương nguyên liệu tươi sống</h3>
                            <p>TĐối với ẩm thực, chất lương nguyên liệu luôn luôn đứng đầu trong các lựa chọn để có một
                                món ăn ngon
                                miệng, sức khỏe</p>
                        </div>
                        <div class="services-box">
                            <img src="IMG/service7.png" alt="">
                            <h3>Thực đơn cơm văn phòng</h3>
                            <p>Thực đơn cơm văn phòng được các đầu bếp có tay nghề, uyên thâm trong lĩnh vực cơm văn
                                phòng chế biến</p>
                        </div>
                        <div class="services-box">
                            <img src="IMG/service8.png" alt="">
                            <h3>Dịch vụ giao cơm tận nơi</h3>
                            <p>Giao cơm tận nơi là trách nhiệm của chúng tôi, mọi ưu tiên về quyền lợi và sự hài lòng
                                của khách hàng là
                                tiêu chí của chúng tôi</p>
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
                                <img src="../assets/img/logo-white.png" alt="">
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