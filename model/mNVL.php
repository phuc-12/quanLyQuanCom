<?php

    include_once("ketnoi.php");
    class MNVL {
        public function SelectAllNVL() {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from nguyenlieu";
                $tblNVL = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblNVL;
            }else{
                return false;
            }
        }

        public function SelectAllTrangThaiNVL($comp){
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from nguyenlieu where trangThai = $comp";
                $tblNVL = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblNVL;
            }else{
                return false;
            }
        }

        public function SelectCountNVL()
        {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "SELECT COUNT(*) as total FROM nguyenlieu";
                $tblNVL = $conn->query($str);
                $result = $tblNVL->fetch_assoc(); // Lấy kết quả đếm
                $p->dongketnoi($conn);
                return $result['total']; // Trả về số lượng
            } else {
                return false;
            }
        }

        public function SelectCountALLNVL()
        {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "SELECT COUNT(*) as total FROM nguyenlieu ";
                $tblNVL = $conn->query($str);
                $result = $tblNVL->fetch_assoc(); // Lấy kết quả đếm
                $p->dongketnoi($conn);
                return $result['total']; // Trả về số lượng
            } else {
                return false;
            }
        }
        
        public function SelectCountNVLCon()
        {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "SELECT COUNT(*) as total FROM nguyenlieu WHERE trangThai = 1";
                $tblNVL = $conn->query($str);
                $result = $tblNVL->fetch_assoc(); // Lấy kết quả đếm
                $p->dongketnoi($conn);
                return $result['total']; // Trả về số lượng
            } else {
                return false;
            }
        }

        public function SelectCountNVLHet()
        {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "SELECT COUNT(*) as total FROM nguyenlieu WHERE trangThai = 2";
                $tblNVL = $conn->query($str);
                $result = $tblNVL->fetch_assoc(); // Lấy kết quả đếm
                $p->dongketnoi($conn);
                return $result['total']; // Trả về số lượng
            } else {
                return false;
            }
        }
    }
?>