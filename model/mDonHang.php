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

    }
?>