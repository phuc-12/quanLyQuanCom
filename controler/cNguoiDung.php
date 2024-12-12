<?php
    include($_SERVER['DOCUMENT_ROOT'] . "/quanLyQuanCom/model/mNguoiDung.php");
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
                $layidND=$_SESSION['id'];
                $loainguoidung = $_SESSION["dn"];
                include_once("../model/chucnangadmin.php");
                $k = new tmdt();
                $layid = $k->laycot("select n.maNV from nhanvien n join taikhoannguoidung t on n.idNguoiDung = t.idNguoiDung where t.idNguoiDung = $layidND limit 1");
                if($layid=='')
                {
                    $layid=$k->laycot("select k.maKH from khachhang k join taikhoannguoidung t on k.idNguoiDung = t.idNguoiDung where t.idNguoiDung = $layidND limit 1");
                }
                if($loainguoidung == 1){
                    echo '<script>alert("Đăng nhập thành công. Xin chào Quản lý !")</script>';
                    
                    echo " <script> window.location.href='admin/admin.php' </script> ";
                }
                else if($loainguoidung == 2){
                    echo '<script>alert("Đăng nhập thành công. Xin chào Nhân Viên Bán Hàng !")</script>';
                    echo " <script> window.location.href='NHANVIEN/NV_quanli.php?id=".$layid."' </script> ";
                }
                else if($loainguoidung == 3){
                    echo '<script>alert("Đăng nhập thành công. Xin chào Nhân Viên Hậu Cần !")</script>';
                    echo " <script> window.location.href='haucan/haucan_danhsachdonhang.php?id=".$layid."' </script> ";
                }
                else if($loainguoidung == 4){
                    echo '<script>alert("Đăng nhập thành công. Xin chào Nhân viên bếp !")</script>';
                    echo " <script> window.location.href='bep/bep_trangchu.php?id=".$layid."' </script> ";
                }
                else{
                  
                    echo '<script>alert("Đăng nhập thành công. Xin chào khách hàng !")</script>';
                  
                    echo " <script> window.location.href='KHACHHANG/customer-dashboard.php?id=".$layid."' </script> ";
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
        public function getInsertND($id,$tenND, $mk, $hoTen, $email, $loaiND, $trangthai, $diaChi, $sdt)
        {
            $p=new mNguoiDung();
            $tbl=$p->insertND($id,$tenND, $mk, $hoTen, $email, $loaiND,  $trangthai, $diaChi, $sdt);
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

        public function xemhoadon($id)
        {
            $p = new mNguoiDung();
            $kq = $p->xemdonhang($id);
            if (mysqli_num_rows($kq) > 0) {
                return $kq;
            } else {
                return false;
            }
        }

        public function getAllKM()
        {
            $p = new mNguoiDung();
            $kq = $p->selectAllKM();
            if (mysqli_num_rows($kq) > 0) {
                return $kq;
            } else {
                return false;
            }
        }
        
    }

?>
<!-- <script>window.location.href=""</script> -->

