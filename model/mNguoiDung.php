<?php
    include_once('ketnoi.php');
    class mNguoiDung{
        public function select01NguoiDung($user,$pw){
            $p = new clsKetNoi();
            $con = $p -> moKetNoi();
            $sql = "select * from taikhoannguoidung where username = '$user' and password = '$pw'";
            $kq = mysqli_query($con,$sql);
            $p -> dongKetNoi($con);
            return $kq;
        }
        public function selectAllNguoiDung(){
            $p = new clsKetNoi();
            $con = $p -> moKetNoi();
            $sql = "SELECT * FROM taikhoannguoidung n join vaitro p on n.loainguoidung=p.loainguoidung";
            $kq = mysqli_query($con,$sql);
            $p -> dongKetNoi($con);
            return $kq;
        }
        public function insertND($user, $pw, $hoTen, $email, $trangthai, $loainguoidung, $dc, $sdt)
        {
            $p=new clsKetNoi();
            $con = $p->moKetNoi();
            $truyvan="INSERT INTO taikhoannguoidung(username,password,hoTen,email,trangThai,loaiNguoiDung,diaChi,SDT) VALUES('$user', '$pw', '$hoTen', '$email', '$trangthai', '$loainguoidung', '$dc', '$sdt')";
            $kq=mysqli_query($con,$truyvan);
            $p->dongKetNoi($con);
            return $kq;
        }
    }

?>