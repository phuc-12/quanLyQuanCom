<?php
include("ketnoi_nga.php");
class haucan extends tmdt{
	public function xemdanhsachdonhang($sql)
	{
		$link=$this->connect();
		$ketqua = mysql_query($sql,$link);
		$i=mysql_num_rows($ketqua);
		if($i>0)
		{
            echo '<table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã đơn hàng</th>
                            <th>Tên người nhận</th>
                            <th>Địa chỉ giao hàng</th>
                            <th>Thời gian yêu cầu giao</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>';
			$dem=1;
			while($row=mysql_fetch_array($ketqua))
			{
				$maHD=$row['maHD'];	
                $maKH=$this->laycot("SELECT maKH FROM chitiethoadon WHERE maHD='$maHD' LIMIT 1");
                $hoTen=$this->laycot("select hoTen from khachhang where maKH='$maKH'");
                $diachi=$this->laycot("select t.diachi FROM taikhoannguoidung t JOIN khachhang k ON t.username = k.username
                                        JOIN chitiethoadon c ON k.maKH = c.maKH
                                        WHERE c.maKH = '$maKH';");
                $ngayNhapDon=$row['ngayNhapDon'];	
                $trangThaiDH=$row['trangThaiDH'];
                $trangThaiGH=$row['trangThaiGH'];
                
                if($trangThaiGH == 0) {
					$trangThaiGHText = "Chưa giao";
				} else if($trangThaiGH == 1) {
					$trangThaiGHText = "Đang giao";
				}else {
					$trangThaiGHText = "Đã hoàn thành";
				}
		
                echo '<tbody>
                        <tr>
                            <td>'.$dem.'</td>
                            <td>'.$maHD.'</td>
                            <td>'.$hoTen.'</td>
                            <td>'.$diachi.'</td>
                            <td>'.$ngayNhapDon.'</td>
                            <td>'.$trangThaiGHText.'</td>
                            <td>
                                <button class="view-button"><a href="haucan_chitietdonhang.php?id='.$maHD.'" style="text-decoration: none;color:#000">Xem chi tiết</a></button>';
                                if ($trangThaiGH == 0) {
                                echo '<button class="view-button"><a href="haucan_giaohang.php?id=' . $maHD . '" style="text-decoration: none;color:#000"> Bắt đầu giao hàng</a></button>';
                                }
                                if($trangThaiGH == 1){
                                echo '<button class="view-button" style="background-color: #3dae3f;"><a href="haucan_hoantatgiaohang.php?id=' . $maHD . '" style="text-decoration: none;color:#000"> Hoàn thành đơn hàng</a></button>';
                                }
                                
                            echo'</td>
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

    public function xemchitietmonan_donhang($sql)
	{
		$link=$this->connect();
		$ketqua = mysql_query($sql,$link);
		$i=mysql_num_rows($ketqua);
		if($i>0)
		{
			$dem=1;
			while($row=mysql_fetch_array($ketqua))
			{
				// $maHD=$row['maHD'];	
                $maMA=$row['maMA'];
                $tenMA=$row['tenMA'];
                $soLuong=$row['soLuong'];
                $donGia=$row['donGia'];
                $tongtienmon= $soLuong * $donGia;
                // $soLuong= $this->laycot("select soLuong from chitiethoadon where maHD='$maHD'");
                // $donGia= $this->laycot("select donGia from chitiethoadon where maMA='$maMA'");

		
                echo '<div class="food-item">
                        <div class="soluong">'.$tenMA.' x'.$soLuong.'</div>
                        <div class="gia">'.$tongtienmon.'đ</div>  
                    </div>';
				
			}
           
		}
		else
		{
			echo 'Khong co du lieu';
		}
	}
}
?>