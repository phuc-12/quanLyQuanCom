<?php
    include_once('ketnoi.php');
    
    class mdangky{
        public function mDK01ND($name,$pw,$nameten,$dc,$sdt){
            $p = new clsKetNoi;
            $con = $p -> moketnoi();
            $id_quyen_customer = 2;
            $pw = MD5($pw);
            $sql = "INSERT INTO `nguoidung`( `TenNguoiDung`, `MatKhau`, `HoTen`, `DiaChi`, `SoDienThoai`, `Email`, `id_quyen`) VALUES ('$name','$pw','$nameten','$dc','$sdt','$id_quyen_customer')";
            $kq = mysqli_query($con,$sql);
            $p -> dongKetNoi($con);
            return $kq;
            
        }
        
    }

?>