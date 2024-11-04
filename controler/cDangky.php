<?php
    include_once('model/mdangky.php');
    include_once('model/mNguoiDung.php');
    class cdangky{
        public function cDK01ND($name,$pw,$nameten,$dc,$email,$sdt){
            $pp = new mnguoidung;
            $ktra = $pp -> selectAllNguoiDung();
            $arr = array();
            foreach($ktra as $i){
                $arr[] = $i['TenNguoiDung'];
            }
            if(in_array($name,$arr)){
                echo '<script>alert("Tên đăng nhập đã tồn tại !")</script>';
            }else{
                $p = new mdangky;
                $con = $p -> mDK01ND($name,$pw,$nameten,$dc,$sdt,$email);
                if($con){
                        echo '<script>alert("Đăng ký thành công ! Xin chào '.$nameten.'")</script>';
                        echo '<script>alert("Bạn đã có tài khoản. Đăng nhập !")</script>';
                        header('refresh:0,url="?dangnhap');       
                }else{
                        echo '<script>alert("Đăng ký không thành công !")</script>';
                }
            }
            
    }}

?>

