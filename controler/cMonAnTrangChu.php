<?php

    include_once($_SERVER['DOCUMENT_ROOT'] . "/quanLyQuanCom/model/mMonAnTrangChu.php");
    class CMonAnTrangChu{
        public function getAllMonMan(){
            $p = new MMonAnTrangChu();
            $tblMA = $p->SelectAllMonMan();
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
        public function getAllMonChay(){
            $p = new MMonAnTrangChu();
            $tblMA = $p->SelectAllMonChay();
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
        public function getAllDoUong(){
            $p = new MMonAnTrangChu();
            $tblMA = $p->SelectAllDoUong();
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
        public function getAllTrangMieng(){
            $p = new MMonAnTrangChu();
            $tblMA = $p->SelectAllTrangMieng();
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
        public function getAllTenMonAnTheoLoai($idLoai){
            $p = new MMonAnTrangChu();
            $tblMA = $p->SelectAllTenMonAnTheoLoai($idLoai);
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

    }

?>