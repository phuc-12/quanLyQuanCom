<?php

    include_once("../../controler/cKhachHang.php");
    $p = new CKhachHang();
    if(isset($_GET["idLoai"])){
        $tblKH = $p->getAllKHbyLKH($_GET["idLoai"]);
    }
    else{
        $tblKH = $p->getAllKH();
    }

    if(!$tblKH)
    {
        echo 'Không kết nối được';
    }
    elseif($tblKH==-1)
    {
        echo 'Chưa có dữ liệu khách hàng';
    }
    else
    {	
        $dem=1;
        echo '<table class="table table-striped" style="background-color: white;">
                    <thead class="table-dark">
                        <tr style="text-align:center;">
                            <th>STT</th>
                            <th>Mã Khách Hàng</th>
                            <th>Tên Khách Hàng</th>
                            <th>Mã Loại Khách Hàng</th>
                            <th>Điểm Tích Lũy</th>
                            
                        </tr>
                    </thead>
                    <tbody>';
        while($r=$tblKH->fetch_assoc())
        {	 
            echo '<tr style="text-align: center">';
                echo '<td><a href="?id='.$r['maKH'].'" style="text-decoration:none; color: black;">'.$dem.'</a></td>';
                echo '<td><a href="?id='.$r['maKH'].'" style="text-decoration:none; color: black;">'.$r['maKH'].'</a></td>';
                echo '<td><a href="?id='.$r['maKH'].'" style="text-decoration:none; color: black;">'.$r['hoTen'].'</a></td>';
                
                $rs = $p->GetLKHByIDKH($r['maKH']);
                if($rs->num_rows > 0) {
                    while($row = $rs->fetch_assoc()) {
                        echo '<td><a href="?id='.$r['maKH'].'" style="text-decoration:none; color: black;">'.$row['tenLoaiKH'].'</a></td>';
                    }
                }
                echo '<td><a href="?id='.$r['maKH'].'" style="text-decoration:none; color: black;">'.$r['diemTichLuy'].'</a></td>';

            echo '</tr>';
            $dem++;
        }
        echo '</tbody>';
        echo '</table>';
    }


?>
