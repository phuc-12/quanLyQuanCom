<?php
class tmdt{
	public function connect()
	{
		$con=mysqli_connect("localhost","root","");
		if(!$con)
		{
			echo 'Không kết nối được cơ sở dữ liệu';
			exit();	
		}
		else
		{
			mysqli_select_db($con,"db_chipheo");
			mysqli_query($con,"SET NAMES UTF8");
			return $con;	
		}
	}
	public function uploadfile($name,$tmp_name,$folder){
		$newname=$folder."/".$name;
		if(move_uploaded_file($tmp_name,$newname)){
			return 1;
		}
		else{
			return 0;
		}
	}
	public function themxoasua($sql){
		$link=$this->connect();
		if(mysqli_query($link,$sql)){
			return 1;
		}
		else{
			return 0;
		}
	}
	public function laycot($sql)
	{
		$link=$this->connect();
		$ketqua = mysqli_query($link,$sql);
		$i=mysqli_num_rows($ketqua);
		$trave='';
		if($i>0)
		{
			while($row=mysqli_fetch_array($ketqua))
			{
				$gt=$row[0];
				$trave=$gt;
			}
		}
		return $trave;
	}
	public function xemdanhsachnguyenvatlieu($sql)
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
                            <th>Tên nguyên vật liệu</th>
                            <th>SL</th>
                            <th>Đơn vị</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>';
			$dem=1;
			while($row=mysqli_fetch_array($ketqua))
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
								<button class="delete-button"><a href="bep_xoanvl.php?id='.$maNVL.'" style="text-decoration: none;color:#000">Xóa</a></button>
                            </td>
                        </tr>';
				$dem++;
				
			}
			echo '</tbody>
				</table>';
			
		}
		else
		{
			echo 'Không có dữ liệu';
		}
	}

	public function chondonViTinh($sql,$idchon)
	{
		$link=$this->connect();
		$ketqua = mysqli_query($link,$sql);
		$i=mysqli_num_rows($ketqua);
		if($i>0)
		{
			echo'<select id="donViTinh" name="donViTinh">';
			while($row=mysqli_fetch_array($ketqua))
			{
				$donViTinh=$row['donViTinh'];
				if($idchon==$donViTinh){
					echo '<option value="'.$donViTinh.'" >'.$donViTinh.'</option>';
				}
				else{
					echo '<option value="'.$donViTinh.'">'.$donViTinh.'</option>';
				}
				
			}
			echo '</select>';
		}
		else
		{
			echo 'Không có dữ liệu';
		}
	}



	public function xemdanhsachhoadon($sql)
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
                            <th>Mã hóa đơn</th>
                            <th>Giờ khởi tạo</th>
                            <th>Món ăn</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>';
			$dem=1;
			while($row=mysqli_fetch_array($ketqua))
			{
				$maHD=$row['maHD'];
				// $maMA=$this->laycot("select maMA from chitiethoadon");
				$tenMA=$this->laycot("SELECT ma.tenMA
										FROM hoadon hd
										JOIN chitiethoadon cthd ON hd.maHD = cthd.maHD
										JOIN monan ma ON cthd.maMA = ma.maMA where hd.maHD=$maHD ");
				$ngayThang=$row['ngayThang'];
                echo '<tbody>
                        <tr>
                            <td>'.$dem.'</td>
                            <td>'.$maHD.'</td>
                            <td>'.$ngayThang.' </td>
							<td>'.$tenMA.'</td>
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
			echo 'Không có dữ liệu';
		}
	}
	
	public function xemdanhsachmonan_chitiethoadon($sql)
	{
		$link=$this->connect();
		$ketqua = mysqli_query($link,$sql);
		$i=mysqli_num_rows($ketqua);
		if($i>0)
		{
			$dem=1;
			while($row=mysqli_fetch_array($ketqua))
			{
				$maMA=$row['maMA'];
				$tenMA=$this->laycot("SELECT ma.tenMA
										FROM chitiethoadon cthd
										JOIN monan ma ON cthd.maMA = ma.maMA where cthd.maMA=".$maMA."");
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
			echo 'Không có dữ liệu';
		}
	}
}
?>