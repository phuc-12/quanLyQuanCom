<?php

    include($_SERVER['DOCUMENT_ROOT'] . "/quanLyQuanCom/model/mMonAn.php");
    class CMonAn{
        public function getAllMA(){
            $p = new MMonAn();
            $tblMA = $p->SelectAllMA();
            if($tblMA){
                if($tblMA->num_rows>0){
                    return $tblMA;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }

        public function getAllMATop5(){
            $p = new MMonAn();
            $tblMA = $p->SelectAllMATop5();
            if($tblMA){
                if($tblMA->num_rows>0){
                    return $tblMA;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }

        public function getAllMATop5_1(){
            $p = new MMonAn();
            $tblMA = $p->SelectAllMATop5_1();
            if($tblMA){
                if($tblMA->num_rows>0){
                    return $tblMA;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }

        public function GetTHByIDSP($txt)
		{
			$p = new MMonAn();
			$result = $p->SelectAllTHByIDSP($txt);
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

		public function getAllMAbyLoaiMon($comp){
            $p = new MMonAn();
            $tbl = $p->SelectAllMAbyLoaiMon($comp);
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

        public function GetCountMA(){
            $p = new MMonAn();
            $tblMA = $p->SelectCountMA();
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

        public function GetCountMACon(){
            $p = new MMonAn();
            $tblMA = $p->SelectCountMACon();
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

        public function GetCountMAHet(){
            $p = new MMonAn();
            $tblMA = $p->SelectCountMAHet();
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

        public function GetCountMAByLMA($idLoai){
            $p = new MMonAn();
            $tblMA = $p->SelectCountMAByLMA($idLoai);
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

        public function GetCountMAByLMACon($idLoai){
            $p = new MMonAn();
            $tblMA = $p->SelectCountMAByLMACon($idLoai);
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

        public function GetCountMAByLMAHet($idLoai){
            $p = new MMonAn();
            $tblMA = $p->SelectCountMAByLMAHet($idLoai);
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
    }

?>