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
                    return -1; //không có dữ liệu trong bảngS
                }
            }else{
                return false;
            }
        }

        public function getAllNVTop5(){
            $p = new MNhanVien();
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
        //     $p = new MNhanVien();
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
			$p = new MNhanVien();
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
            $p = new MNhanVien();
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
            $p = new MNhanVien();
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
        //     $p = new MNhanVien();
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
        //     $p = new MNhanVien();
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

        public function GetCountNVByLNV($idLoai){
            $p = new MNhanVien();
            $tblNV = $p->SelectCountNVByLNV($idLoai);
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
    }

?>