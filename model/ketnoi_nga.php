<?php
class tmdt
{
	public function connect()
	{
		$con=mysql_connect("localhost","ngaa","123456");
		if(!$con)
		{
			echo 'Khong ket noi duoc csdl';
			exit();	
		}
		else
		{
			mysql_select_db("quancomchipheo");
			mysql_query("SET NAMES UTF8");
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
		if(mysql_query($sql,$link)){
			return 1;
		}
		else{
			return 0;
		}
	}
	public function laycot($sql)
	{
		$link=$this->connect();
		$ketqua = mysql_query($sql,$link);
		$i=mysql_num_rows($ketqua);
		$trave='';
		if($i>0)
		{
			while($row=mysql_fetch_array($ketqua))
			{
				$gt=$row[0];
				$trave=$gt;
			}
		}
		return $trave;
	}
	
	
}
?>