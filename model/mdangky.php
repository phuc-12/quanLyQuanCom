<?php
    include_once("ketnoi.php");
    
    class mdangky{
         public function dangky($idNguoiDung, $name, $pass, $hoten, $email, $diachi, $sdt) {
            $p = new clsketnoi();
            $con = $p->moketnoi();
            if ($con) {
                $str = "INSERT INTO `taikhoannguoidung` (`idNguoiDung`, `username`, `pass`, `hoTen`, `email`, `loaiNguoiDung`, `trangThai`, `diaChi`, `SDT`) 
                VALUES ('$idNguoiDung', '$name', '$pass', '$hoten', '$email', '5', '1', '$diachi', '$sdt')";
                $result = $con->query($str);
                $p->dongketnoi($con);
                return $result ? true : false;
            } else {
                return false;
            }
        }
        
    }

?>