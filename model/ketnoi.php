<?php
    class clsKetNoi 
    {
        public function moketnoi(){
            $con = mysqli_connect('localhost', 'chipheo', '123', 'db_chipheo');
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
