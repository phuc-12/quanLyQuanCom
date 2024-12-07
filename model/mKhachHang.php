<?php

    include_once("ketnoi.php");
    class MKhachHang {
        public function SelectAllKH() {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from khachhang";
                $tblKH = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblKH;
            }else{
                return false;
            }
        }

        public function SelectAllLKHByIDKH($txt)
		{
			$p =  new clsKetNoi();
			$con = $p->moketnoi();
			if($con)
			{
                $str = "SELECT tenLoaiKH FROM `loaikhachhang` s JOIN khachhang t on s.maLoaiKH=t.maLoaiKH WHERE maKH = '$txt'";
				$result = $con->query($str);
				$p->dongketnoi($con);
				return $result;
			}
			else
			{
				return false;
			}
		}

        public function SelectCountKH()
        {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "SELECT COUNT(*) as total FROM khachhang";
                $tblKH = $conn->query($str);
                $result = $tblKH->fetch_assoc(); // Lấy kết quả đếm
                $p->dongketnoi($conn);
                return $result['total']; // Trả về số lượng
            } else {
                return false;
            }
        }

        public function SelectCountKHByLKH($idLoai)
        {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "SELECT COUNT(*) as total FROM khachhang WHERE maLoaiKH = $idLoai";
                $tblKH = $conn->query($str);
                $result = $tblKH->fetch_assoc(); // Lấy kết quả đếm
                $p->dongketnoi($conn);
                return $result['total']; // Trả về số lượng
            } else {
                return false;
            }
        }

        public function SelectAllKHbyLKH($comp){
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from khachhang where maLoaiKH = $comp";
                $tblKH = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblKH;
            }else{
                return false;
            }
        }
    }

?>