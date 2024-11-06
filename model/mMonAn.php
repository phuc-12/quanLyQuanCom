<?php

    include_once("ketnoi.php");
    class MMonAn {
        public function SelectAllMA() {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from ds_monan";
                $tblMA = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblMA;
            }else{
                return false;
            }
        }

        public function SelectAllTHByIDSP($txt)
		{
			$p =  new clsKetNoi();
			$con = $p->moketnoi();
			if($con)
			{
                $str = "SELECT tenLoaiMon FROM `ds_monan` s JOIN ds_loaimon t on s.maLoaiMon=t.maLoaiMon WHERE maMon = '$txt'";
				$result = $con->query($str);
				$p->dongketnoi($con);
				return $result;
			}
			else
			{
				return false;
			}
		}

        public function themMA($maMon,$tenMon,$soLuong,$donViTinh,$gia,$moTa,$maLoaiMon,$hinhAnh){
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset("utf8");
            if($conn){
                $str = "insert into ds_monan(maMon,tenMon,soLuong,donViTinh,gia,moTa,maLoaiMon,hinhAnh) 
						values ('$maMon','$tenMon','$soLuong','$donViTinh','$gia','$moTa','$maLoaiMon','$hinhAnh')";
                $result = $conn-> query($str);
                $p->dongketnoi($conn);
                return $result;
                echo "Thêm thành công";
            }else{
                return false;
                echo "Thêm thất bại";
            }
        }
    }
?>