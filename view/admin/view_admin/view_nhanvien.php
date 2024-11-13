<?php

    include_once("../../controler/cNhanVien.php");
    $p = new CNhanVien();
    if(isset($_GET["idLoai"])){
        $tblNV = $p->getAllNVbyLNV($_GET["idLoai"]);
    }
    else{
        $tblNV = $p->getAllNV();
    }

    if(!$tblNV)
    {
        echo 'Không kết nối được';
    }
    elseif($tblNV==-1)
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
                            <th>Mã Nhân Viên</th>
                            <th>Tên Nhân Viên</th>
                            <th>Ngày Sinh</th>
                            <th>Loại Nhân Viên</th>
                            
                        </tr>
                    </thead>
                    <tbody>';
        while($r=$tblNV->fetch_assoc())
        {	 
            echo '<tr style="text-align: center">';
                echo '<td><a href="?id='.$r['maNV'].'" style="text-decoration:none; color: black;">'.$dem.'</a></td>';
                echo '<td><a href="?id='.$r['maNV'].'" style="text-decoration:none; color: black;">'.$r['maNV'].'</a></td>';
                echo '<td><a href="?id='.$r['maNV'].'" style="text-decoration:none; color: black;">'.$r['hoTen'].'</a></td>';
                echo '<td><a href="?id='.$r['maNV'].'" style="text-decoration:none; color: black;">'.$r['ngaySinh'].'</a></td>';
                $rs = $p->GetLNVByIDNV($r['maNV']);
                if($rs->num_rows > 0) {
                    while($row = $rs->fetch_assoc()) {
                        echo '<td><a href="?id='.$r['maNV'].'" style="text-decoration:none; color: black;">'.$row['tenLoaiNV'].'</a></td>';
                    }
                }
                
            echo '</tr>';
            $dem++;
        }
        echo '</tbody>';
        echo '</table>';
    }


?>
