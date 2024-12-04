<?php
    include_once("ketnoi.php");
    
    class mdangky{
        // public function mDK01ND($name,$pw,$nameten,$email,$dc,$sdt){
        //     $p = new clsKetNoi;
        //     $con = $p -> moketnoi();
        //     $trangthai= 1;
        //     $loainguoidung = 5;
        //     $pw = MD5($pw);
        //     // $sql = "INSERT INTO`taikhoannguoidung`( `username`, `password`, `hoTen`, `diaChi`, `email`, `trangThai`, `loainguoidung`, `diaChi`,  `SDT`) 
        //     //         VALUES ('$name','$pw','$nameten','$email','$trangthai','$loainguoidung','$dc','$sdt')";

        //     $sql = "INSERT INTO taikhoannguoidung (username, password, hoTen, email, trangThai, loaiNguoiDung, diaChi, SDT) 
        //             VALUES ('$name', '$pw', '$nameten', '$email', '1', '5', '$dc', '$sdt')";

        //     $kq = mysqli_query($con,$sql);
        //     $p -> dongKetNoi($con);
        //     return $kq; 
        // }
        
        public function dangky($name, $password, $hoten, $email, $diachi, $sdt) {
            $p = new clsketnoi();
            $con = $p->moketnoi();
            if ($con) {
                $str = "INSERT INTO taikhoannguoidung (username, password, hoTen, email, trangThai, loaiNguoiDung, diaChi, SDT)
                        VALUES (N'$name', N'$password', N'$hoten', N'$email', '1', '5', N'$diachi', N'$sdt')";
                $result = $con->query($str);
                $p->dongketnoi($con);
                return $result ? true : false;
            } else {
                return false;
            }
        }
        
    }

?>