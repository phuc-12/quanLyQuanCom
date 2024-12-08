<?php

    include($_SERVER['DOCUMENT_ROOT'] . "/quanLyQuanCom/model/mKhachHang.php");
    class CKhachHang {
        public function getAllKH(){
            $p = new MKhachHang();
            $tblKH = $p->SelectAllKH();
            if($tblKH){
                if($tblKH->num_rows>0){
                    return $tblKH;
                }else{
                    return -1; //không có dữ liệu trong bảngS
                }
            }else{
                return false;
            }
        }

        public function GetLKHByIDKH($txt)
		{
			$p = new MKhachHang();
			$result = $p->SelectAllLKHByIDKH($txt);
			if($result)
			{
				if($result->num_rows>0)
				{
					return $result;
				}
				else{
					return -1;//khong co du lieu trong bang
				}
			}
			else
			{
				return false;
			}
		}

        public function GetCountKH(){
            $p = new MKhachHang();
            $tblKH = $p->SelectCountKH();
            if($tblKH){ 
                if($tblKH>0){
                    return $tblKH;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }

        public function GetCountKHByLKH($idLoai){
            $p = new MKhachHang();
            $tblKH = $p->SelectCountKHByLKH($idLoai);
            if($tblKH){ 
                if($tblKH>0){
                    return $tblKH;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }

        public function getAllKHbyLKH($comp){
            $p = new MKhachHang();
            $tbl = $p->SelectAllKHbyLKH($comp);
            if($tbl){
                if($tbl->num_rows>0){
                    return $tbl;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }
    }

?>