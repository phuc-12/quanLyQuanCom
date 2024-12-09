<?php
    include_once("ketnoi.php");
    
    class mdangky{
         public function dangky($name, $pass, $hoten, $email, $diachi, $sdt) {
            $p = new clsketnoi();
            $con = $p->moketnoi();
            if ($con) {
                $str = "INSERT INTO taikhoannguoidung (username, pass, hoTen, email, loaiNguoiDung, trangThai, diaChi, SDT)
                        VALUES (N'$name', N'$pass', N'$hoten', N'$email', '5', '1', N'$diachi', N'$sdt')";
                $result = $con->query($str);
                $p->dongketnoi($con);
                return $result ? true : false;
            } else {
                return false;
            }
        }
        
    }

?>