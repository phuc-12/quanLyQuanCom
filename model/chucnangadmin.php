<?php
    class tmdt
	{
		private $host = 'localhost';
		private $username = 'trieu';
		private $password = '123';
		private $database = 'db_quancomchipheo';

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
		
		public function choncty($sql, $maChon)
		{
			$link = $this->connect();
			$ketqua = $link->query($sql); // Thay mysql_query bằng $link->query
			if($ketqua && $ketqua->num_rows > 0) // Thay mysql_num_rows bằng $ketqua->num_rows
			{	
				echo '<select name="maLoaiMon" id="maLoaiMon">';
				while($row = $ketqua->fetch_array()) // Thay mysql_fetch_array bằng $ketqua->fetch_array()
				{
					$maLoaiMon = $row['maLoaiMon'];
					$tenLoaiMon = $row['tenLoaiMon'];
					if($maChon == $maLoaiMon)
					{
						echo '<option value="'.$maLoaiMon.'" selected>'.$tenLoaiMon.'</option>';
					}
					else
					{
						echo '<option value="'.$maLoaiMon.'">'.$tenLoaiMon.'</option>';
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