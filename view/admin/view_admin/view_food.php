<?php

    include_once("../../controler/cMonAn.php");
    $p = new CMonAn();
    if(isset($_GET["idLoai"])){
        $tblMA = $p->getAllMAbyLoaiMon($_GET["idLoai"]);
    }
    else{
        $tblMA = $p->getAllMA();
    }

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
                            <th>Mã Món</th>
                            <th>Tên Món</th>
                            <th>Số Lượng</th>
                            <th>Đơn Vị Tính</th>
                            <th>Giá Món</th>
                            <th>Loại Món</th>
                            <th>Trạng Thái</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>';
        while($r=$tblMA->fetch_assoc())
        {	 
            echo '<tr style="text-align: center">';
                echo '<td><a href="?id='.$r['maMA'].'" style="text-decoration:none; color: black;">'.$dem.'</a></td>';
                echo '<td><a href="?id='.$r['maMA'].'" style="text-decoration:none; color: black;">'.$r['maMA'].'</a></td>';
                echo '<td><a href="?id='.$r['maMA'].'" style="text-decoration:none; color: black;">'.$r['tenMA'].'</a></td>';
                echo '<td><a href="?id='.$r['maMA'].'" style="text-decoration:none; color: black;">'.$r['soLuong'].'</a></td>';
                echo '<td><a href="?id='.$r['maMA'].'" style="text-decoration:none; color: black;">'.$r['donViTinh'].'</a></td>';
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
