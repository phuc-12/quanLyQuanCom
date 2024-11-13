<?php

    include_once("ketnoi.php");
    class MLoaiMon {
        public function SelectAllLM() {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from loaimonan order by tenLoaiMA asc";
                $tblLM = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblLM;
            }else{
                return false;
            }
        }
    }

?>