<?php
include("ketnoi_nga.php");
class bep extends tmdt{
	public function xemdanhsachnguyenvatlieu($sql)
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
                            <th>Tên nguyên vật liệu</th>
                            <th>SL</th>
                            <th>Đơn vị</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>';
			$dem=1;
			while($row=mysql_fetch_array($ketqua))
			{
				$maNVL=$row['maNVL'];	
				$tenNVL=$row['tenNVL'];
				$slTon=$row['slTon'];
				$donViTinh=$row['donViTinh'];
                $trangThai=$row['trangThai'];
			
				if ($trangThai == 0) {
					$trangThaiText = "Hết hàng";
				} else {
					$trangThaiText = "Còn hàng";
				}
                echo '<tbody>
                        <tr>
                            <td>'.$dem.'</td>
                            <td>'.$tenNVL.'</td>
                            <td>'.$slTon.'</td>
                            <td>'.$donViTinh.'</td>
                            <td>'.$trangThaiText.'</td>
                            <td>
                                <button class="view-button"><a href="bep_xemnvl.php?id='.$maNVL.'" style="text-decoration: none;color:#000">Xem</a></button>
								<button class="edit-button" name="nut" id="nut" value="Sua"><a href="bep_capnhatnvl.php?id='.$maNVL.'" style="text-decoration: none;color:#000">Sửa</a></button>
								<button class="delete-button""><a href="bep_xoanvl.php?id='.$maNVL.'" style="text-decoration: none;color:#000">Xóa</a></button>
                            </td>
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

	public function chondonViTinh($sql,$idchon)
	{
		$link=$this->connect();
		$ketqua = mysql_query($sql,$link);
		$i=mysql_num_rows($ketqua);
		if($i>0)
		{
			echo'<select id="donViTinh" name="donViTinh">';
			while($row=mysql_fetch_array($ketqua))
			{
				$donViTinh=$row['donViTinh'];
				if($idchon==$donViTinh){
					echo '<option value="'.$donViTinh.'" >'.$donViTinh.'</option>';
				}
				// if ($donViTinh == 0) {
				// 	echo "Hết NVL";
				// } else {
				// 	echo "Còn hàng";
				// }
				else{
					echo '<option value="'.$donViTinh.'">'.$donViTinh.'</option>';
				}
				
			}
			echo '</select>';
		}
		else
		{
			echo 'Khong co du lieu';
		}
	}



	public function xemdanhsachhoadon($sql)
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
                            <th>Mã hóa đơn</th>
                            <th>Giờ khởi tạo</th>
                            <th>Món ăn</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>';
			$dem=1;
			while($row=mysql_fetch_array($ketqua))
			{
				$maHD=$row['maHD'];	
				$tenMA=$row['tenMA'];
				$ngayNhapDon=$row['ngayNhapDon'];
                echo '<tbody>
                        <tr>
                            <td>'.$dem.'</td>
                            <td>'.$maHD.'</td>
                            <td>'.$ngayNhapDon.' </td>
                            <td>'.$tenMA.',..</td>
                            <td>
                                <button class="view-button"><a href="bep_chitietdonhang.php?id='.$maHD.'" style="text-decoration: none;color:#000">Xem chi tiết</a></button>
								</td>
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
	
	public function xemdanhsachmonan_chitiethoadon($sql)
	{
		$link=$this->connect();
		$ketqua = mysql_query($sql,$link);
		$i=mysql_num_rows($ketqua);
		if($i>0)
		{
			$dem=1;
			while($row=mysql_fetch_array($ketqua))
			{
				$tenMA=$row['tenMA'];	
				$soLuong=$row['soLuong'];
                echo '<div class="food-item">
                        <div class="soluong">'.$tenMA.' x'.$soLuong.'</div>
                    </div>';
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