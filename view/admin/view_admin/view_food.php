<?php

    include("../../controler/cMonAn.php");
    $p = new CMonAn();
    $tblMA = $p->getAllMA();
    if(!$tblMA)
    {
        echo 'Khong ket noi duoc';
    }
    elseif($tblMA==-1)
    {
        echo 'chua co du lieu';
    }
    else
    {	
        $dem=1;
        echo '<table class="table" style="background-color: white;">
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
                echo '<td>'.$dem.'</td>';
                echo '<td>'.$r['maMon'].'</td>';
                echo '<td>'.$r['tenMon'].'</td>';
                echo '<td>'.$r['soLuong'].'</td>';
                echo '<td>'.$r['donViTinh'].'</td>';
                echo '<td>'.$r['gia'].'</td>';
                $rs = $p->GetTHByIDSP($r['maMon']);
                if($rs->num_rows > 0) {
                    while($row = $rs->fetch_assoc()) {
                        echo '<td>'.$row['tenLoaiMon'].'</td>';
                    }
                }
                // echo '<td>'.$r['maLoaiMon'].'</td>';
                echo '<td>'.$r['trangThai'].'</td>';
                echo '<td>
                        <button type="button" class="btn btn-outline-dark">Chi tiết</button>
                        <button type="button" class="btn btn-outline-dark">Cập nhật</button>
                        <button type="button" class="btn btn-outline-dark">Xóa món</button>
                    </td>';
            echo '</tr>';
            $dem++;
        }
        echo '</tbody>';
        echo '</table>';
    }


?>