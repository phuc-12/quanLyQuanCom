<?php
    class clsKetNoi 
    {
        public function moketnoi(){
            $con = mysqli_connect('localhost', 'root', '', 'db_chipheo');
            if (!$con) {
                die("Kết nối thất bại: " . mysqli_connect_error());
            }
            return $con;
        }

        public function dongketnoi($con){
            mysqli_close($con);
        } 
    }
?>
