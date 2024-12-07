<?php

class tmdt{
    public function connect()
	{
		$con=mysqli_connect("localhost","trieu","123");
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
                            <th>Thời gian yêu cầu giao</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>';
			$dem=1;
			while($row=mysqli_fetch_array($ketqua))
			{
				$maHD=$row['maHD'];	
                $maKH=$row['maKH'];
                $hoTen=$this->laycot("select hoTen from khachhang where maKH='$maKH'");
                $diachi=$this->laycot("select tknd.diachi FROM taikhoannguoidung tknd JOIN khachhang kh ON tknd.idNguoiDung = kh.idNguoiDung
                                        JOIN hoadon hd ON kh.maKH = hd.maKH
                                        WHERE hd.maKH = '$maKH';");
                $ngayThang=$row['ngayThang'];
                $trangThaiGH=$row['trangThaiGH'];
                
                if($trangThaiGH == 0) {
					$trangThaiGHText = "Chưa giao";
				} else if($trangThaiGH == 1) {
					$trangThaiGHText = "Đang giao";
				}else if($trangThaiGH == 2) {
					$trangThaiGHText = "Đã hoàn thành";
				}else {
					$trangThaiGHText = "Đơn hàng đã hủy";
				}
		
                echo '<tbody>
                        <tr>
                            <td>'.$dem.'</td>
                            <td>'.$maHD.'</td>
                            <td>'.$hoTen.'</td>
                            <td>'.$diachi.'</td>
                            <td>'.$ngayThang.'</td>
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
			echo 'Không có dữ liệu';
		}
	}

    public function xemchitietmonan_donhang($sql)
	{
		$link=$this->connect();
		$ketqua = mysqli_query($link,$sql);
		$i=mysqli_num_rows($ketqua);
		if($i>0)
		{
			$dem=1;
			while($row=mysql_fetch_array($ketqua))
			{
				$maHD=$row['maHD'];	
                $maMA=$row['maMA'];
                $tenMA=$this->laycot("select tenMA from monan where maMA=$maMA");
                $soLuong=$this->laycot("select soLuong from chitiethoadon where maMA=$maMA");
                $donGia=$this->laycot("select donGia from monan where maMA=$maMA");
                $tongtienmon= $soLuong * $donGia;
                // $soLuong= $this->laycot("select soLuong from chitiethoadon where maHD='$maHD'");
                // $donGia= $this->laycot("select donGia from chitiethoadon where maMA='$maMA'");

		
                echo '<div class="food-item">
                        <div class="soluong">'.$tenMA.' x'.$soLuong.'</div>
                        <div class="gia">'.$tongtienmon.'.000đ</div>  
                    </div>';
				
			}
           
		}
		else
		{
			echo 'Không có dữ liệu';
		}
	}
}
?>