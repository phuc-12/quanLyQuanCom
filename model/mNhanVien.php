<?php

    include_once("ketnoi.php");
    class MNhanVien {
        public function SelectAllNV() {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from nhanvien";
                $tblNV = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblNV;
            }else{
                return false;
            }
        }

        public function SelectAllNVTop5() {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from nhanvien limit 5";
                $tblNV = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblNV;
            }else{
                return false;
            }
        }


        public function SelectAllLNVByIDNV($txt)
		{
			$p =  new clsKetNoi();
			$con = $p->moketnoi();
			if($con)
			{
                $str = "SELECT tenLoaiNV FROM `nhanvien` s JOIN loainhanvien t on s.maLoaiNV=t.maLoaiNV WHERE maNV = '$txt'";
				$result = $con->query($str);
				$p->dongketnoi($con);
				return $result;
			}
			else
			{
				return false;
			}
		}

        public function SelectAllNVbyLNV($comp){
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from nhanvien where maLoaiNV = $comp";
                $tblNV = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblNV;
            }else{
                return false;
            }
        }

        public function SelectCountNV()
        {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "SELECT COUNT(*) as total FROM nhanvien";
                $tblNV = $conn->query($str);
                $result = $tblNV->fetch_assoc(); // Lấy kết quả đếm
                $p->dongketnoi($conn);
                return $result['total']; // Trả về số lượng
            } else {
                return false;
            }
        }

        // public function SelectCountNVCon()
        // {
        //     $p = new clsKetNoi();
        //     $conn = $p->moketnoi();
        //     $conn->set_charset('utf8');
        //     if($conn){
        //         $str = "SELECT COUNT(*) as total FROM nhanvien WHERE trangLNVai = 1";
        //         $tblNV = $conn->query($str);
        //         $result = $tblNV->fetch_assoc(); // Lấy kết quả đếm
        //         $p->dongketnoi($conn);
        //         return $result['total']; // Trả về số lượng
        //     } else {
        //         return false;
        //     }
        // }

        // public function SelectCountNVHet()
        // {
        //     $p = new clsKetNoi();
        //     $conn = $p->moketnoi();
        //     $conn->set_charset('utf8');
        //     if($conn){
        //         $str = "SELECT COUNT(*) as total FROM nhanvien WHERE trangLNVai = 0";
        //         $tblNV = $conn->query($str);
        //         $result = $tblNV->fetch_assoc(); // Lấy kết quả đếm
        //         $p->dongketnoi($conn);
        //         return $result['total']; // Trả về số lượng
        //     } else {
        //         return false;
        //     }
        // }
    }
?>