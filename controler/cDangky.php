<?php
    include_once("../model/mdangky.php");
    class cdangky {
        public function getdangky($idNguoiDung, $name, $pass, $hoten, $email, $diachi, $sdt){       
            $p = new mdangky();
            $con = $p -> dangky($idNguoiDung, $name, $pass, $hoten, $email, $diachi, $sdt);
            if($con == 1){
                return $con;
            }else{
                return false;
            }
        }
    }
    

?>