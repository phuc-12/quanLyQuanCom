<?php

    include_once("../../controler/cDonHang.php");
    $p = new CDonHang();
    if(isset($_GET["idLoai"])){
        $tblDonHang = $p->getAllTrangThaiDH($_GET["idLoai"]);
    }
    else{
        $tblDonHang = $p->getAllDonHang();
    }

    if(!$tblDonHang)
    {
        echo 'Không kết nối được';
    }
    elseif($tblDonHang==-1)
    {
        echo 'Chưa có dữ liệu đơn hàng';
    }
    else
    {	
        $dem=1;
        echo '<table class="table table-striped" style="background-color: white;">
                    <thead class="table-dark">
                        <tr style="text-align:center;">
                            <th>STT</th>
                            <th>Mã Đơn Hàng</th>
                            <th>Mã Khách Hàng</th>
                            <th>Ngày Tháng</th>
                            <th>Trạng Thái</th>
                        </tr>
                    </thead>
                    <tbody>';
        while($r=$tblDonHang->fetch_assoc())
        {	 
            echo '<tr style="text-align: center">';
                echo '<td><a href="?id='.$r['maHD'].'" style="text-decoration:none; color: black;">'.$dem.'</a></td>';
                echo '<td><a href="?id='.$r['maHD'].'" style="text-decoration:none; color: black;">'.$r['maHD'].'</a></td>';
                echo '<td><a href="?id='.$r['maHD'].'" style="text-decoration:none; color: black;">'.$r['maKH'].'</a></td>';
                echo '<td><a href="?id='.$r['maHD'].'" style="text-decoration:none; color: black;">'.$r['ngayThang'].'</a></td>';
                switch($r['trangThai'])
                        {
                            case 2: 

                                {
                                    echo '<td>Chưa Thanh Toán</td>';
                                    break;
                                }

                            case 1:

                                {
                                    echo '<td>Đã Thanh Toán</td>';
                                    break;
                                }
                        }       
            echo '</tr>';
            $dem++;
        }
        echo '</tbody>';
        echo '</table>';
    }


?>