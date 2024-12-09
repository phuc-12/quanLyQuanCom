<?php
    include_once('../model/mNguoiDung.php');
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
                   
                    $_SESSION["dn"]=$r["loaiNguoiDung"];
                    $_SESSION['user_name'] = $r['hoTen'];
                    $_SESSION['id'] = $r['idNguoiDung'];

                }
                $loainguoidung = $_SESSION["dn"];
                if($loainguoidung == 1){
                    echo '<script>alert("Đăng nhập thành công. Xin chào Quản lý !")</script>';
                    
                    echo " <script> window.location.href='admin/admin.php' </script> ";
                }
                else if($loainguoidung == 2){
                    echo '<script>alert("Đăng nhập thành công. Xin chào Nhân viên !")</script>';
                    echo " <script> window.location.href='NHANVIEN/NV_quanli.php?id=".$_SESSION['id']."' </script> ";
                }
                else if($loainguoidung == 3){
                    echo '<script>alert("Đăng nhập thành công. Xin chào Hậu Cần !")</script>';
                    echo " <script> window.location.href='haucan/haucan_danhsachdonhang.php?id=".$_SESSION['id']."' </script> ";
                }
                else if($loainguoidung == 4){
                    echo '<script>alert("Đăng nhập thành công. Xin chào Nhânviên bếp !")</script>';
                    echo " <script> window.location.href='bep/bep_trangchu.php?id=".$_SESSION['id']."' </script> ";
                }
                else{
                  
                    echo '<script>alert("Đăng nhập thành công. Xin chào khách hàng !")</script>';
                  
                    echo " <script> window.location.href='KHACHHANG/customer-dashboard.php?id=".$_SESSION['id']."' </script> ";
                }
                
            }
            else
            {
                echo '<script>alert("Tài khoản hoặc mật khẩu không chính xác !")</script>';
                header("Location: index.php?dangnhap");
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
        public function getInsertND($id,$tenND, $mk, $hoTen, $email, $trangthai, $loaiND, $diaChi, $sdt)
        {
            $p=new mNguoiDung();
            $tbl=$p->insertND($id,$tenND, $mk, $hoTen, $email, $trangthai, $loaiND, $diaChi, $sdt);
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

