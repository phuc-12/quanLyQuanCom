<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý</title>
    <link rel="stylesheet" type="text/css" href="../../css/admin_css/admin.css">    
    <link rel="stylesheet" href="../../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../js/dateTime.js" defer></script> 
</head>
<body>
    <div class="container-fluid p-0">
        <div id="ql_header">
            <div class="logo" style="padding: 0; border-radius: 100px;">
                <a href="../../index.php"><img src="../../img/ChiPheologo.png" alt="" style="width: 100%; height: 100%; border-radius: 100px;"></a>
            </div>

            <a class="trangChu" href="../../index.php">
                <h4>Trang Chủ</h4>
            </a>
            <div class="date" style="float:right; margin-right: 100px; margin: 20px;"><span>📅</span><span id="currentDate"></span></div>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" style="float:right; margin-top: 20px; padding: 0;">👤</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Thông Tin Cá Nhân</a></li>
                    <li><a class="dropdown-item" href="#">Cập Nhật Thông Tin</a></li>
                    <li><a class="dropdown-item" href="../../index.php">Đăng Xuất</a></li>
                </ul>
            </div>
        </div>
        

        <div id="content">
            <div class="nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php" style="background-color: #E5E5E5;">
                            <i class="fa fa-tachometer"></i>
                                Tổng quát
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="managementfood.php">
                            <i class="fa fa-spoon"></i>
                                Quản lý thực đơn
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="management_employ.php">
                            <i class="fa fa-address-card"></i>
                            Quản lý nhân viên
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="management_customer.php">
                            <i class="fa fa-address-card-o"></i>
                            Quản lý khách hàng
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="management_gift.php">
                            <i class="fa fa-gift"></i>
                            Quản lý chương trình khuyến mãi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="management_order.php">
                            <i class="fa fa-shopping-cart"></i>
                            Quản lý đơn hàng
                        </a>
                    </li>
                </ul>
            </div>

            <div class="section">
                <h3 style="margin-bottom: 20px;"><b>TỔNG QUÁT</b></h3>

                <div class="mger_option" style="display:flex; height: 300px;">
                    <a class="option mger_food" href="managementfood.php">
                        <i class="fa fa-spoon" style="font-size: 60px;"></i><br>
                        <p style="font-size: 20px; margin-top: 10px;">QUẢN LÝ THỰC ĐƠN</p>
                    </a>
                    <a class="option mger_employ" href="management_employ.php">
                        <i class="fa fa-address-card" style="font-size: 60px;"></i><br>
                        <p style="font-size: 20px; margin-top: 10px;">QUẢN LÝ NHÂN VIÊN</p>
                    </a>
                    <a class="option mger_customer" href="management_customer.php">
                        <i class="fa fa-address-card-o" style="font-size: 60px;"></i><br>
                        <p style="font-size: 20px; margin-top: 10px;">QUẢN LÝ KHÁCH HÀNG</p>
                    </a>
                    <a class="option mger_gift" href="management_gift.php">
                        <i class="fa fa-gift" style="font-size: 60px;"></i><br>
                        <p style="font-size: 20px; margin-top: 10px;">QUẢN LÝ CHƯƠNG TRÌNH KHUYẾN MÃI</p>
                    </a>
                    <a class="option mger_order" href="management_order.php">
                        <i class="fa fa-shopping-cart" style="font-size: 60px;"></i><br>
                        <p style="font-size: 20px; margin-top: 10px;">QUẢN LÝ ĐƠN HÀNG</p>
                    </a>
                </div>
                <div style="width: 49%; float: left; background-color: white; padding: 20px; border-radius: 10px;">
                <?php
                    error_reporting(0);
                    include_once("../../controler/cMonAn.php");
                    $p = new CMonAn();
                    $tblMA = $p->getAllMATop5();
                    if(!$tblMA)
                    {
                        echo 'Không kết nối được';
                    }
                    elseif($tblMA==-1)
                    {
                        echo 'Chưa có dữ liệu món ăn';
                    }
                    else
                    {	
                        $dem=1;
                        echo '<table class="table table-striped" style="background-color: white;">
                                    <thead class="table-dark">
                                        <tr style="text-align:center;">
                                            <th>STT</th>
                                            <th>Tên Món</th>
                                            <th>Giá Món</th>
                                            <th>Loại Món</th>
                                            <th>Trạng Thái</th>
                                        </tr>
                                    </thead>
                                    <tbody>';
                        while($r=$tblMA->fetch_assoc())
                        {	 
                            echo '<tr style="text-align: center">';
                                echo '<td><a href="?id='.$r['maMA'].'" style="text-decoration:none; color: black;">'.$dem.'</a></td>';
                                // echo '<td><a href="?id='.$r['maMA'].'" style="text-decoration:none; color: black;">'.$r['maMA'].'</a></td>';
                                echo '<td><a href="?id='.$r['maMA'].'" style="text-decoration:none; color: black;">'.$r['tenMA'].'</a></td>';
                                // echo '<td><a href="?id='.$r['maMA'].'" style="text-decoration:none; color: black;">'.$r['soLuong'].'</a></td>';
                                // echo '<td><a href="?id='.$r['maMA'].'" style="text-decoration:none; color: black;">'.$r['donViTinh'].'</a></td>';
                                echo '<td><a href="?id='.$r['maMA'].'" style="text-decoration:none; color: black;">'.$r['donGia'].'</a></td>';
                                $rs = $p->GetTHByIDSP($r['maMA']);
                                if($rs->num_rows > 0) {
                                    while($row = $rs->fetch_assoc()) {
                                        echo '<td><a href="?id='.$r['maMA'].'" style="text-decoration:none; color: black;">'.$row['tenLoaiMA'].'</a></td>';
                                    }
                                }
                                
                                echo '<td><a href="?id='.$r['maMA'].'" style="text-decoration:none; color: black;">'.$r['trangThai'].'</a></td>';
                                
                            echo '</tr>';
                            $dem++;
                        }
                        echo '</tbody>';
                        echo '</table>';
                    }


                    ?>

                </div>

                <div style="width: 49%; float: right; background-color: white; padding: 20px; border-radius: 10px;">
                <?php
                    error_reporting(0);
                    include_once("../../controler/cMonAn.php");
                    $p = new CMonAn();
                    $tblMA = $p->getAllMATop5_1();
                    if(!$tblMA)
                    {
                        echo 'Không kết nối được';
                    }
                    elseif($tblMA==-1)
                    {
                        echo 'Chưa có dữ liệu món ăn';
                    }
                    else
                    {	
                        $dem=1;
                        echo '<table class="table table-striped" style="background-color: white;">
                                    <thead class="table-dark">
                                        <tr style="text-align:center;">
                                            <th>STT</th>
                                            <th>Tên Món</th>
                                            <th>Giá Món</th>
                                            <th>Loại Món</th>
                                            <th>Trạng Thái</th>
                                        </tr>
                                    </thead>
                                    <tbody>';
                        while($r=$tblMA->fetch_assoc())
                        {	 
                            echo '<tr style="text-align: center">';
                                echo '<td><a href="?id='.$r['maMA'].'" style="text-decoration:none; color: black;">'.$dem.'</a></td>';
                                // echo '<td><a href="?id='.$r['maMA'].'" style="text-decoration:none; color: black;">'.$r['maMA'].'</a></td>';
                                echo '<td><a href="?id='.$r['maMA'].'" style="text-decoration:none; color: black;">'.$r['tenMA'].'</a></td>';
                                // echo '<td><a href="?id='.$r['maMA'].'" style="text-decoration:none; color: black;">'.$r['soLuong'].'</a></td>';
                                // echo '<td><a href="?id='.$r['maMA'].'" style="text-decoration:none; color: black;">'.$r['donViTinh'].'</a></td>';
                                echo '<td><a href="?id='.$r['maMA'].'" style="text-decoration:none; color: black;">'.$r['donGia'].'</a></td>';
                                $rs = $p->GetTHByIDSP($r['maMA']);
                                if($rs->num_rows > 0) {
                                    while($row = $rs->fetch_assoc()) {
                                        echo '<td><a href="?id='.$r['maMA'].'" style="text-decoration:none; color: black;">'.$row['tenLoaiMA'].'</a></td>';
                                    }
                                }
                                
                                echo '<td><a href="?id='.$r['maMA'].'" style="text-decoration:none; color: black;">'.$r['trangThai'].'</a></td>';
                                
                            echo '</tr>';
                            $dem++;
                        }
                        echo '</tbody>';
                        echo '</table>';
                    }


                    ?>

                </div>
                
            </div>

            
            </div>
        </div>
    </div>
</body>
</html>