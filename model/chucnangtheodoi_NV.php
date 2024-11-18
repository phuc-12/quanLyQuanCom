<?php
    include("chucnangnhanvien.php");

    class nhanvien extends tmdt {
        public function xemdanhsachdonhang($sql)
        {
            $link=$this->connect();
            $ketqua = mysqli_query($link,$sql);
            $i=mysqli_num_rows($ketqua);
            if($i>0)
            {
                echo '<table>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã đơn hàng</th>
                                <th>Tên người nhận</th>
                                <th>Địa chỉ giao hàng</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>';
                $dem=1;
                while($row=mysqli_fetch_array($ketqua))
                {
                    $maHD=$row['maHD'];	
                    $maKH=$this->laycot("SELECT maKH FROM chitiethoadon WHERE maHD='$maHD' LIMIT 1");
                    $hoTen=$this->laycot("select hoTen from khachhang where maKH='$maKH'");
                    $diachi=$this->laycot("select t.diaChi FROM taikhoannguoidung t JOIN khachhang k ON t.username = k.username
                                            JOIN chitiethoadon c ON k.maKH = c.maKH
                                            WHERE c.maKH = '$maKH';");
    
                    $trangThaiDH=$row['trangThaiDH'];
                    if ($trangThaiDH == 0) {
                        $trangThaiDHText = "Chưa giao";
                    } else if($trangThaiDH == 1) {
                        $trangThaiDHText = "Đang giao";
                    }else {
                        $trangThaiDHText = "Đã hoàn thành";
                    }
            
                    echo '<tbody>
                            <tr>
                                <td>'.$dem.'</td>
                                <td>'.$maHD.'</td>
                                <td>'.$hoTen.'</td>
                                <td>'.$diachi.'</td>
                                <td>'.$trangThaiDHText.'</td>
                                
                            </tr>';
                    $dem++;
                    
                }
                echo '</tbody>
                    </table>';
                
            }
            else
            {
                echo 'Khong co du lieu';
            }
        }
    
      
    }
    ?>