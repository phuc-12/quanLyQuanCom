<?php
    include_once("../model/mdangky.php");
    class cdangky {
        public function getdangky($name, $password, $hoten, $email, $diachi, $sdt){            
            $p = new mdangky();
            $con = $p -> dangky($name, $password, $hoten, $email, $diachi, $sdt);
            if($con == 1){
                return $con;
            }else{
                return false;
            }
        }
    }
    

?>

