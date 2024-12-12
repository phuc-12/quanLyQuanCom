<?php

    include_once("ketnoi.php");
    class MCTKM {
        public function SelectAllCTKM() {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from ctkm";
                $tblKM = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblKM;
            }else{
                return false;
            }
        }

        public function SelectAllTrangThaiCTKM($comp){
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from ctkm where trangThai = $comp";
                $tblKM = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblKM;
            }else{
                return false;
            }
        }

        public function SelectCountCTKM()
        {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "SELECT COUNT(*) as total FROM ctkm";
                $tblKM = $conn->query($str);
                $result = $tblKM->fetch_assoc(); // Lấy kết quả đếm
                $p->dongketnoi($conn);
                return $result['total']; // Trả về số lượng
            } else {
                return false;
            }
        }

        public function SelectCountALLCTKM()
        {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "SELECT COUNT(*) as total FROM ctkm ";
                $tblKM = $conn->query($str);
                $result = $tblKM->fetch_assoc(); // Lấy kết quả đếm
                $p->dongketnoi($conn);
                return $result['total']; // Trả về số lượng
            } else {
                return false;
            }
        }
        
        public function SelectCountCTKMCon()
        {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "SELECT COUNT(*) as total FROM ctkm WHERE trangThai = 1";
                $tblKM = $conn->query($str);
                $result = $tblKM->fetch_assoc(); // Lấy kết quả đếm
                $p->dongketnoi($conn);
                return $result['total']; // Trả về số lượng
            } else {
                return false;
            }
        }

        public function SelectCountCTKMHet()
        {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "SELECT COUNT(*) as total FROM ctkm WHERE trangThai = 2";
                $tblKM = $conn->query($str);
                $result = $tblKM->fetch_assoc(); // Lấy kết quả đếm
                $p->dongketnoi($conn);
                return $result['total']; // Trả về số lượng
            } else {
                return false;
            }
        }
    }
?>