<?php

    include($_SERVER['DOCUMENT_ROOT'] ."/quanLyQuanCom/model/mDonHang.php");
    class CDonHang{
        public function getAllDonHang(){
            $p = new MHoaDon();
            $tblDonHang = $p->SelectAllDonHang();
            if($tblDonHang){
                if($tblDonHang->num_rows>0){
                    return $tblDonHang;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }

		
		public function getAllTrangThaiDH($comp){
            $p = new MHoaDon();
            $tblDonHang = $p->SelectAllTrangThaiDH($comp);
            if($tblDonHang){
                if($tblDonHang->num_rows>0){
                    return $tblDonHang;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }

        public function GetCountALLDonHang(){
            $p = new MHoaDon();
            $tblDonHang = $p->SelectCountDonHang();
            if($tblDonHang){ 
                if($tblDonHang>0){
                    return $tblDonHang;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }

        public function GetCountDHChuaThanhToan(){
            $p = new MHoaDon();
            $tblDonHang = $p->SelectCountDHChuaThanhToan();
            if($tblDonHang){ 
                if($tblDonHang>0){
                    return $tblDonHang;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }

        public function GetCountDHDaThanhToan(){
            $p = new MHoaDon();
            $tblDonHang = $p->SelectCountDHDaThanhToan();
            if($tblDonHang){ 
                if($tblDonHang>0){
                    return $tblDonHang;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }
    }

?>