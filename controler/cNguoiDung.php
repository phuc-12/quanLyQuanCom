<?php
    include_once('model/mNguoiDung.php');
    class cNguoiDung
    {
        public function get01NguoiDung($user,$pw)
        {
            $pw = md5($pw);
            $p = new mNguoiDung();
            $tbl = $p -> select01NguoiDung($user,$pw);
            if(mysqli_num_rows($tbl) > 0)
            {
                while($r=mysqli_fetch_assoc($tbl))
                {
                   
                    $_SESSION["dn"]=$r["id_quyen"];
                    $_SESSION['user_name'] = $r['HoTen'];
                    $_SESSION['id'] = $r['IDNguoiDung'];
                }
                $phanquyen = $_SESSION['dn'];
                if($phanquyen == 1){
                    echo '<script>alert("Đăng nhập thành công. Xin chào Quản lý !")</script>';
                    
                    header('refresh:0.5,url=admin.php');
                }
                else if($phanquyen == 2){
                    echo '<script>alert("Đăng nhập thành công. Xin chào Nhân viên !")</script>';
                    header('refresh:0.5,url=admin.php');
                }
                else{
                    echo '<script>alert("Đăng nhập thành công. Xin chào khách hàng  !")</script>';
                    header('refresh:0.5,url=index.php');
                }
                
            }
            else
            {
                echo '<script>alert("Tài khoản hoặc mật khẩu không chính xác !")</script>';
                header('refresh:0.5,url=index.php?dangnhap');
            }
            
        }
        public function getAllNguoiDung()
        {
            $p = new mNguoiDung();
            $kq=$p->selectAllNguoiDung();
            if(mysqli_num_rows($kq)>0)
            {
                return $kq;
            }
            else
            {
                return false;
            }
        }
        public function getInsertND($tenND, $mk, $hoTen, $diaChi, $sdt, $role)
        {
            $p=new mNguoiDung();
            $tbl=$p->insertND($tenND, $mk, $hoTen, $diaChi, $sdt, $role);
            if($tbl>0)
            {
                echo '<script>alert("Thêm thành công")</script>';
                header('refresh:0.5,url=admin?type=NguoiDung');
            }
            else
            {
                echo '<script>alert("Thêm Thất bại")</script>';
            }
        }
        
    }

?>
<!-- <script>window.location.href=""</script> -->

