<?php

    include_once("ketnoi.php");
    class MMonAnTrangChu {
        public function SelectAllMonMan() {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from monan where maLoaiMA = 1 limit 5";
                $tblMA = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblMA;
            }else{
                return false;
            }
        }
        public function SelectAllMonChay() {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from monan where maLoaiMA = 2 limit 5";
                $tblMA = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblMA;
            }else{
                return false;
            }
        }
        public function SelectAllDoUong() {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from monan where maLoaiMA = 3 limit 5";
                $tblMA = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblMA;
            }else{
                return false;
            }
        }
        public function SelectAllTrangMieng() {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from monan where maLoaiMA = 4 limit 5";
                $tblMA = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblMA;
            }else{
                return false;
            }
        }
        
    }
?>