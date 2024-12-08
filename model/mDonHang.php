<?php

    include_once("chucnangnhanvien.php");
    class MHoaDon extends tmdt {
        public function SelectAllHD() {
            $p = new tmdt();
            $conn = $p->connect();
            $conn->set_charset('utf8');
            if($conn){
                // $str = "select * from hoadon";
                $str = "SELECT hd.maHD, hd.maKH,hd.ngayThang, kh.hoTen, hd.trangThaiGH
                    FROM hoadon hd
                    JOIN khachhang kh ON hd.maKH = kh.maKH";
                $tblHD = $conn->query($str);
                return $tblHD;
            }else{
                return false;
            }
        }
        // //
        

    }
    
?>