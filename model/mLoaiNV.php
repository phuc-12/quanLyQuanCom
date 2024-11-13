<?php

    include_once("ketnoi.php");
    class MLoaiNV {
        public function SelectAllLM() {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from loainhanvien order by hoTen asc";
                $tblLNV = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblLNV;
            }else{
                return false;
            }
        }
    }

?>