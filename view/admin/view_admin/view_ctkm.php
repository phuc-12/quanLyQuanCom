<?php

    include_once("../../controler/cCTKM.php");
    $p = new CCTKM();
    if(isset($_GET["idLoai"])){
        $tblKM = $p->getAllCTKMConHan($_GET["idLoai"]);
    }
    else{
        $tblKM = $p->getAllKM();
    }

    if(!$tblKM)
    {
        echo 'Không kết nối được';
    }
    elseif($tblKM==-1)
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
                            <th>Mã Khuyến Mãi</th>
                            <th>Tên Khuyến Mãi</th>
                            <th>Mô Tả</th>
                            <th>Trạng Thái</th>
                            <th>Chiết Khấu</th>
                            <th>Bắt Đầu</th>
                            <th>Kết Thúc</th>
                        </tr>
                    </thead>
                    <tbody>';
        while($r=$tblKM->fetch_assoc())
        {	 
            echo '<tr style="text-align: center">';
                echo '<td><a href="?id='.$r['maCTKM'].'" style="text-decoration:none; color: black;">'.$dem.'</a></td>';
                echo '<td><a href="?id='.$r['maCTKM'].'" style="text-decoration:none; color: black;">'.$r['maCTKM'].'</a></td>';
                echo '<td><a href="?id='.$r['maCTKM'].'" style="text-decoration:none; color: black;">'.$r['tenKM'].'</a></td>';
                echo '<td><a href="?id='.$r['maCTKM'].'" style="text-decoration:none; color: black;">'.$r['moTa'].'</a></td>';
                // echo '<td><a href="?id='.$r['maCTKM'].'" style="text-decoration:none; color: black;">'.$r['trangThai'].'</a></td>';
                switch($r['trangThai'])
                        {
                            case 2: 

                                {
                                    echo '<td>Hết hạn</td>';
                                    break;
                                }

                            case 1:

                                {
                                    echo '<td>Đang hoạt động</td>';
                                    break;
                                }
                        }       
                echo '<td><a href="?id='.$r['maCTKM'].'" style="text-decoration:none; color: black;">'.$r['chietKhau'].'</a></td>';
                echo '<td><a href="?id='.$r['maCTKM'].'" style="text-decoration:none; color: black;">'.$r['thoiGianBatDau'].'</a></td>';
                echo '<td><a href="?id='.$r['maCTKM'].'" style="text-decoration:none; color: black;">'.$r['thoiGianKetThuc'].'</a></td>';
            echo '</tr>';
            $dem++;
        }
        echo '</tbody>';
        echo '</table>';
    }


?>