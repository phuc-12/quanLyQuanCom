<?php
    include_once("../model/mdangky.php");
    // class cdangky{
    //     public function cDK01ND($user,$pw,$hoten,$email,$dc,$sdt){
    //         $pp = new mnguoidung;
    //         $ktra = $pp -> selectAllNguoiDung();
    //         $arr = array();
    //         foreach($ktra as $i){
    //             $arr[] = $i['username'];
    //         }
    //         if(in_array($user,$arr)){
    //             echo '<script>alert("Tên đăng nhập đã tồn tại !")</script>';
    //         }else{
    //             $p = new mdangky;
    //             $con = $p -> mDK01ND($user,$pw,$hoten,$email,$dc,$sdt);
    //             if($con){
    //                     echo '<script>alert("Đăng ký thành công !")</script>';
    //                     echo '<script>alert("Bạn đã có tài khoản. Đăng nhập !")</script>';
    //                     echo " <script> window.location.href='dangnhap.php' </script> ";       
    //             }else{
    //                     echo '<script>alert("Đăng ký không thành công !")</script>';
    //             }
    //         }
    // }}

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

