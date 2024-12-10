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

        <div class="info-menu">
            <div class="menu-section">
                <div class="menu-header">
                    <h2>MENU CỐ ĐỊNH HÀNG TUẦN</h2>
                    <span class="arrow"></span>
                </div>
                <div class="menu-content">
                    <div class="daily-menu">
                        <p>T2: Gà Tẩm Bột Chiên Giòn, Cá Lóc Kho Tộ, Ba Rọi Kho Trứng Cút, Chả Chiên Sốt Cà, Bò Xào Ớt
                            Chuông</p>
                        <p>T3: Vịt Kho Măng, Bò Xào Cải Chua, Heo Xiu Mai Sốt Cà, Cá Hú Kho Thơm, Sườn Non Ram Mặn</p>
                        <p>T4: Gà Kho Nấm Hương, Cá Diêu Hồng Sốt Cà, Bò Xào Khổ Qua, Ba Chỉ Kho Mắm Ruốc, Chả Cá Kho
                            Trứng
                            Cút.</p>
                        <p>T5: Bò Kho Lagu, Tàu Hủ Nhồi Thịt Sốt Cà, Cá Trê Chiên Mắm Gừng, Giò Heo Hầm Măng Khô, Gà Xào
                            Xả
                            Ớt</p>
                        <p>T6: Thịt Heo Nấu Giả Cầy, Lòng Gà Xào Măng Khô, Bò Xào Bông Cải, Heo Xiu Mai Sốt Cà, Cá Basa
                            Chiên Sả.</p>
                        <p>T7: Ba Chỉ Kho Tiêu, Gà Kho Gừng, Trứng Chiên Thịt Bằm, Cá Nục Chiên Giòn,Sườn Kho Kho Cải
                            Chua
                        </p>
                    </div>
                </div>
            </div>

            <div class="menu-section">
            <div class="menu-header">
                    <h2>MÓN CHAY</h2>
                    <span class="arrow"></span>
                </div>
                <div class="menu-content">
                    <div class="daily-menu">
                    <?php 
                        error_reporting(0);
                            include_once("controler/cMonAnTrangChu.php");
                            $p = new CMonAnTrangChu();
                            $tbl = $p->getAllTenMonAnTheoLoai(2);
                            if(!$tbl)
                            {
                                echo 'Không kết nối được';
                            }
                            elseif($tbl==-1)
                            {
                                echo 'Chưa có dữ liệu món ăn';
                            }
                            else
                            {	
                                while($r=$tbl->fetch_assoc())
                                {	 
                                    $ten=$r['tenMA'];
                                    echo '- '.$r['tenMA'].'<br>';
                                }
                            
                            }
                        ?>
                    </div>
                </div>
            </div>

            <div class="menu-section">
                <div class="menu-header">
                    <h2>MÓN MẶN</h2>
                    <span class="arrow"></span>
                </div>
                <div class="menu-content">
                    <div class="daily-menu">
                    <?php 
                        error_reporting(0);
                            include_once("controler/cMonAnTrangChu.php");
                            $p = new CMonAnTrangChu();
                            $tbl = $p->getAllTenMonAnTheoLoai(1);
                            if(!$tbl)
                            {
                                echo 'Không kết nối được';
                            }
                            elseif($tbl==-1)
                            {
                                echo 'Chưa có dữ liệu món ăn';
                            }
                            else
                            {	
                                while($r=$tbl->fetch_assoc())
                                {	 
                                    $ten=$r['tenMA'];
                                    echo '- '.$r['tenMA'].'<br>';
                                }
                            
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="menu-section">
                <div class="menu-header">
                    <h2>NƯỚC GIẢI KHÁT</h2>
                    <span class="arrow"></span>
                </div>
                <div class="menu-content">
                    <div class="daily-menu">
                    <?php 
                        error_reporting(0);
                            include_once("controler/cMonAnTrangChu.php");
                            $p = new CMonAnTrangChu();
                            $tbl = $p->getAllTenMonAnTheoLoai(3);
                            if(!$tbl)
                            {
                                echo 'Không kết nối được';
                            }
                            elseif($tbl==-1)
                            {
                                echo 'Chưa có dữ liệu món ăn';
                            }
                            else
                            {	
                                while($r=$tbl->fetch_assoc())
                                {	 
                                    $ten=$r['tenMA'];
                                    echo '- '.$r['tenMA'].'<br>';
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="menu-section">
                <div class="menu-header">
                    <h2>TRÁNG MIỆNG</h2>
                    <span class="arrow"></span>
                </div>
                <div class="menu-content">
                    <div class="daily-menu">
                    <?php 
                        error_reporting(0);
                            include_once("controler/cMonAnTrangChu.php");
                            $p = new CMonAnTrangChu();
                            $tbl = $p->getAllTenMonAnTheoLoai(4);
                            if(!$tbl)
                            {
                                echo 'Không kết nối được';
                            }
                            elseif($tbl==-1)
                            {
                                echo 'Chưa có dữ liệu món ăn';
                            }
                            else
                            {	
                                while($r=$tbl->fetch_assoc())
                                {	 
                                    $ten=$r['tenMA'];
                                    echo '- '.$r['tenMA'].'<br>';
                                }
                            
                            }
                        ?>
                    </div>
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

        <script>
        document.querySelectorAll('.menu-header').forEach(header => {
            header.addEventListener('click', () => {
                const arrow = header.querySelector('.arrow');
                arrow.classList.toggle('up');
                const content = header.nextElementSibling;
                if (content) {
                    content.style.display = content.style.display === 'none' ? 'block' : 'none';
                }
            });
        });
        </script>
    </div>

</body>

</html>