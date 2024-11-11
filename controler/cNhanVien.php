<?php

    include($_SERVER['DOCUMENT_ROOT'] . "/quanLyQuanCom/model/mNhanVien.php");
    class CNhanVien{
        public function getAllNV(){
            $p = new MNhanVien();
            $tblNV = $p->SelectAllNV();
            if($tblNV){
                if($tblNV->num_rows>0){
                    return $tblNV;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }

        public function getAllNVTop5(){
            $p = new MMonAn();
            $tblNV = $p->SelectAllNVTop5();
            if($tblNV){
                if($tblNV->num_rows>0){
                    return $tblNV;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }

        // public function getAllNVTop5_1(){
        //     $p = new MMonAn();
        //     $tblNV = $p->SelectAllNVTop5_1();
        //     if($tblNV){
        //         if($tblNV->num_rows>0){
        //             return $tblNV;
        //         }else{
        //             return -1; //không có dữ liệu trong bảng
        //         }
        //     }else{
        //         return false;
        //     }
        // }

        public function GetLNVByIDNV($txt)
		{
			$p = new MMonAn();
			$result = $p->SelectAllLNVByIDNV($txt);
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

		public function getAllNVbyLNV($comp){
            $p = new MMonAn();
            $tbl = $p->SelectAllNVbyLNV($comp);
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

        public function GetCountNV(){
            $p = new MMonAn();
            $tblNV = $p->SelectCountNV();
            if($tblNV){ 
                if($tblNV>0){
                    return $tblNV;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }

        // public function GetCountNVCon(){
        //     $p = new MMonAn();
        //     $tblNV = $p->SelectCountNVCon();
        //     if($tblNV){ 
        //         if($tblNV>0){
        //             return $tblNV;
        //         }else{
        //             return -1; //không có dữ liệu trong bảng
        //         }
        //     }else{
        //         return false;
        //     }
        // }

        // public function GetCountNVHet(){
        //     $p = new MMonAn();
        //     $tblNV = $p->SelectCountNVHet();
        //     if($tblNV){ 
        //         if($tblNV>0){
        //             return $tblNV;
        //         }else{
        //             return -1; //không có dữ liệu trong bảng
        //         }
        //     }else{
        //         return false;
        //     }
        // }
    }

?>