<?php
    include_once('ketnoi.php');
    class mNguoiDung{
        public function select01NguoiDung($user,$pw){
            $p = new clsKetNoi();
            $con = $p -> moKetNoi();
            $sql = "SELECT * FROM nguoidung where TenNguoiDung='$user' and MatKhau = '$pw'";
            $kq = mysqli_query($con,$sql);
            $p -> dongKetNoi($con);
            return $kq;
        }
        public function selectAllNguoiDung(){
            $p = new clsKetNoi();
            $con = $p -> moKetNoi();
            $sql = "SELECT * FROM nguoidung n join phanquyen p on n.id_quyen=p.id_quyen";
            $kq = mysqli_query($con,$sql);
            $p -> dongKetNoi($con);
            return $kq;
        }
        public function insertND($tenND, $mk, $hoTen, $diaChi, $sdt, $email, $role)
        {
            $p=new clsKetNoi();
            $con = $p->moKetNoi();
            $truyvan="INSERT INTO nguoidung(TenNguoiDung,MatKhau,HoTen,DiaChi,SoDienThoai,id_quyen) VALUES('$tenND', '$mk', '$hoTen', '$diaChi', '$sdt','$email', '$role')";
            $kq=mysqli_query($con,$truyvan);
            $p->dongKetNoi($con);
            return $kq;
        }
    }

?>