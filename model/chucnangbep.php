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
								<button class="edit-button"><a href="bep_capnhatnvl.php?id='.$maNVL.'" style="text-decoration: none;color:#000">Sửa</a></button>
                                <button type="button" class="delete-button" onclick="openDeletePopup()" >Xóa</button>
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

	public function chontinhtrang($sql,$idchon)
	{
		$link=$this->connect();
		$ketqua = mysql_query($sql,$link);
		$i=mysql_num_rows($ketqua);
		if($i>0)
		{
			echo'<select id="tinhtrang" name="tinhtrang">';
			while($row=mysql_fetch_array($ketqua))
			{
				$maNVL=$row['maNVL'];	
				$trangThai=$row['trangThai'];
				if ($laytrangThai == 0) {
					echo "Hết NVL";
				} else {
					echo "Còn hàng";
				}
				if($idchon==$maNVL){
					echo '<option value="'.$trangThai.'" >if ($laytrangThai == 0) {
                                                        echo "Hết NVL";
                                                    } else {
                                                        echo "Còn hàng";
                                                    }</option>';
				}
				else{
					echo '<option value="'.$trangThai.'">'.$trangThai.'</option>';
				}
				
			}
			echo '</select>';
		}
		else
		{
			echo 'Khong co du lieu';
		}
	}
}
?>