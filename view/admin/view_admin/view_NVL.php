<?php

    include_once("../../controler/cNVL.php");
    $p = new CNVL();
    if(isset($_GET["idLoai"])){
        $tblNVL = $p->getAllTrangThaiNVL($_GET["idLoai"]);
    }
    else{
        $tblNVL = $p->getAllNVL();
    }

    if(!$tblNVL)
    {
        echo 'Không kết nối được';
    }
    elseif($tblNVL==-1)
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
                            <th>Mã Nguyên Vật Liệu</th>
                            <th>Tên Nguyên Vật Liệu</th>
                            <th>Số Lượng Tồn</th>
                            <th>Đơn Vị Tính</th>
                            <th>Mô Tả</th>
                            <th>Ngày Nhập</th>
                            <th>Ngày Hết Hạn</th>
                            <th>Trạng Thái</th>
                        </tr>
                    </thead>
                    <tbody>';
        while($r=$tblNVL->fetch_assoc())
        {	 
            echo '<tr style="text-align: center">';
                echo '<td><a href="?id='.$r['maNVL'].'" style="text-decoration:none; color: black;">'.$dem.'</a></td>';
                echo '<td><a href="?id='.$r['maNVL'].'" style="text-decoration:none; color: black;">'.$r['maNVL'].'</a></td>';
                echo '<td><a href="?id='.$r['maNVL'].'" style="text-decoration:none; color: black;">'.$r['tenNVL'].'</a></td>';
                echo '<td><a href="?id='.$r['maNVL'].'" style="text-decoration:none; color: black;">'.$r['slTon'].'</a></td>';
                echo '<td><a href="?id='.$r['maNVL'].'" style="text-decoration:none; color: black;">'.$r['donViTinh'].'</a></td>';
                echo '<td><a href="?id='.$r['maNVL'].'" style="text-decoration:none; color: black;">'.$r['moTa'].'</a></td>';
                echo '<td><a href="?id='.$r['maNVL'].'" style="text-decoration:none; color: black;">'.$r['ngayNhap'].'</a></td>';
                echo '<td><a href="?id='.$r['maNVL'].'" style="text-decoration:none; color: black;">'.$r['ngayHetHan'].'</a></td>';
                switch($r['trangThai'])
                        {
                            case 1: 

                                {
                                    echo '<td>Còn Hàng</td>';
                                    break;
                                }

                            case 2:

                                {
                                    echo '<td>Hết</td>';
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