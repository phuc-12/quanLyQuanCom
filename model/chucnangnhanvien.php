<?php
    class tmdt
	{
		private $host = 'localhost';
		private $username = 'trieu';
		private $password = '123';
		private $database = 'db_chipheo';

		public function connect()
		{
			$con = new mysqli($this->host, $this->username, $this->password, $this->database);
			
			if($con->connect_error) {
				die('Không thể kết nối CSDL: ' . $con->connect_error);
			}

			$con->set_charset("utf8"); // Thiết lập UTF-8 nếu cần
			return $con;
		}
		
		
		public function themxoasua($sql)
		{
			$link = $this->connect();
			if($link->query($sql) === TRUE) {
				return 1;
			} else {
				return 0;
			}
		}
		

		public function laycot($sql)
		{
			$link = $this->connect();
			$ketqua = $link->query($sql);
			$trave = '';

			if($ketqua && $ketqua->num_rows > 0) {
				while($row = $ketqua->fetch_array()) {
					$trave = $row[0];
				}
			}

			return $trave;
		}
		public function laydanhsach($sql)
		{
			$link = $this->connect();
			$ketqua = $link->query($sql);
			$danhsach = [];

			if ($ketqua && $ketqua->num_rows > 0) {
				while ($row = $ketqua->fetch_assoc()) {
					$danhsach[] = $row; // Thêm từng dòng vào mảng kết quả
				}
			}

			return $danhsach; // Trả về danh sách
		}
		public function layTatCaSanPham($maLoaiMA = null)
	{
		$sql = "SELECT maMA, tenMA, donGia, hinhAnh FROM monan";
		
		if ($maLoaiMA) {
			$sql .= " WHERE maLoaiMA = " . intval($maLoaiMA); // Lọc theo mã loại món ăn
		}
		
		return $this->laydanhsach($sql); // Trả về danh sách sản phẩm đã lọc
	}

				
		public function chonloai($sql, $maChon)
		{
			$link = $this->connect();
			$ketqua = $link->query($sql); // Thay mysql_query bằng $link->query
			if($ketqua && $ketqua->num_rows > 0) // Thay mysql_num_rows bằng $ketqua->num_rows
			{	
				echo '<select name="maLoaiMA" id="maLoaiMA">';
				while($row = $ketqua->fetch_array()) // Thay mysql_fetch_array bằng $ketqua->fetch_array()
				{
					$maLoaiMA = $row['maLoaiMA'];
					$tenLoaiMA = $row['tenLoaiMA'];
					if($maChon == $maLoaiMA)
					{
						echo '<option value="'.$maLoaiMA.'" selected>'.$tenLoaiMA.'</option>';
					}
					else
					{
						echo '<option value="'.$maLoaiMA.'">'.$tenLoaiMA.'</option>';
					}
				}
				echo '</select>';
			}
			else
			{
				echo 'Đang cập nhật dữ liệu';	
			} 	
		}

		public function chonloaiNV($sql, $maChon)
		{
			$link = $this->connect();
			$ketqua = $link->query($sql); // Thay mysql_query bằng $link->query
			if($ketqua && $ketqua->num_rows > 0) // Thay mysql_num_rows bằng $ketqua->num_rows
			{	
				echo '<select name="maLoaiNV" id="maLoaiNV">';
				while($row = $ketqua->fetch_array()) // Thay mysql_fetch_array bằng $ketqua->fetch_array()
				{
					$maLoaiNV = $row['maLoaiNV'];
					$tenLoaiNV = $row['tenLoaiNV'];
					if($maChon == $maLoaiNV)
					{
						echo '<option value="'.$maLoaiNV.'" selected>'.$tenLoaiNV.'</option>';
					}
					else
					{
						echo '<option value="'.$maLoaiNV.'">'.$tenLoaiNV.'</option>';
					}
				}
				echo '</select>';
			}
			else
			{
				echo 'Đang cập nhật dữ liệu';	
			} 	
		}
	
	

	}

?>
