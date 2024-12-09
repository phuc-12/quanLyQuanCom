<?php

    include($_SERVER['DOCUMENT_ROOT'] . "/quanLyQuanCom/model/mCTKM.php");
    class CCTKM{
        public function getAllKM(){
            $p = new MCTKM();
            $tblKM = $p->SelectAllCTKM();
            if($tblKM){
                if($tblKM->num_rows>0){
                    return $tblKM;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }

		public function getAllCTKMConHan($comp){
            $p = new MCTKM();
            $tbl = $p->SelectAllCTKMConHan($comp);
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
		public function getAllCTKMHetHan($comp){
            $p = new MCTKM();
            $tbl = $p->SelectAllCTKMHetHan($comp);
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

        public function GetCountCTKM(){
            $p = new MCTKM();
            $tblMA = $p->SelectCountCTKM();
            if($tblMA){ 
                if($tblMA>0){
                    return $tblMA;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }

        public function GetCountALLCTKM(){
            $p = new MCTKM();
            $tblCTKM = $p->SelectCountALLCTKM();
            if($tblCTKM){ 
                if($tblCTKM>0){
                    return $tblCTKM;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }

        public function GetCountCTKMCon(){
            $p = new MCTKM();
            $tblCTKM = $p->SelectCountCTKMCon();
            if($tblCTKM){ 
                if($tblCTKM>0){
                    return $tblCTKM;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }

        public function GetCountCTKMHet(){
            $p = new MCTKM();
            $tblCTKM = $p->SelectCountCTKMHet();
            if($tblCTKM){ 
                if($tblCTKM>0){
                    return $tblCTKM;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }
    }

?>