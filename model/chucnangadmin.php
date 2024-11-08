<?php
    class tmdt
	{
		public function connect()
		{
			$con=mysql_connect('localhost','trieu','123');
			if(!$con)
			{
				echo 'Khong ket noi duoc csdl';
				exit();
			}
			else
			{
				mysql_select_db('db_quancomchipheo');
				//mysqli_query("SET NAME UTF8");
				return $con;	
			}
		}
		
		public function themxoasua($sql)
		{
			$link = $this->connect();
			if(mysql_query($sql,$link))
			{
				return 1;
			}
			else
			{
				return 0;
			}
			
		}
		public function laycot($sql)
		{
			$link=$this->connect();
			$ketqua = mysql_query($sql,$link);
			$i = mysql_num_rows($ketqua);
			$trave = '';
			echo $link;
			echo $ketqua;
			echo $i;
			if($i>0)
			{
				
				while($row=mysql_fetch_array($ketqua))
				{
					$gt = $row[0];
					$trave =$gt;
					
				}
				
			}
			return $trave;
				
		}
	}

?>