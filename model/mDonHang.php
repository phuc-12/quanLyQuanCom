<?php

    include_once("chucnangnhanvien.php");
    class MHoaDon extends tmdt {
        public function SelectAllHD() {
            $p = new tmdt();
            $conn = $p->connect();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from hoadon";
                $tblHD = $conn->query($str);
                return $tblHD;
            }else{
                return false;
            }
        }
        // //
        public function SelectDetailHD($maHD) {
            $p = new tmdt();
            $conn = $p->connect();
            $conn->set_charset('utf8');
            if ($conn) {
                $str = "SELECT ct.*, m.tenMA, ct.soLuong, m.donGia 
                        FROM chitiethoadon ct
                        JOIN monan m ON ct.maMA = m.maMA
                        WHERE ct.maHD = '$maHD'";
                $result = $conn->query($str);
                return $result;
            } else {
                return false;
            }
        }

    }
?>