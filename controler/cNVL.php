<?php
    include($_SERVER['DOCUMENT_ROOT'] . "/quanLyQuanCom/model/mNVL.php");
    class CNVL{
        public function getAllNVL(){
            $p = new MNVL();
            $tblNVL = $p->SelectAllNVL();
            if($tblNVL){
                if($tblNVL->num_rows>0){
                    return $tblNVL;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }

		public function getAllTrangThaiNVL($comp){
            $p = new MNVL();
            $tblNVL = $p->SelectAllTrangThaiNVL($comp);
            if($tblNVL){
                if($tblNVL->num_rows>0){
                    return $tblNVL;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }

        public function GetCountNVL(){
            $p = new MNVL();
            $tblNVL = $p->SelectCountNVL();
            if($tblNVL){ 
                if($tblNVL>0){
                    return $tblNVL;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }

        public function GetCountALLNVL(){
            $p = new MNVL();
            $tblNVL = $p->SelectCountALLNVL();
            if($tblNVL){ 
                if($tblNVL>0){
                    return $tblNVL;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }

        public function GetCountNVLCon(){
            $p = new MNVL();
            $tblNVL = $p->SelectCountNVLCon();
            if($tblNVL){ 
                if($tblNVL>0){
                    return $tblNVL;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }

        public function GetCountNVLHet(){
            $p = new MNVL();
            $tblNVL = $p->SelectCountNVLHet();
            if($tblNVL){ 
                if($tblNVL>0){
                    return $tblNVL;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }
    }

?>