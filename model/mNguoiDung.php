<?php
    include_once('ketnoi.php');
    class mNguoiDung{
        public function select01NguoiDung($user,$pw){
            $p = new clsKetNoi();
            $con = $p -> moKetNoi();
            $sql = "select * from taikhoannguoidung where username = '$user' and pass = '$pw'";
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
        public function insertND($user, $pw, $hoTen, $email, $loainguoidung, $trangthai, $dc, $sdt)
        {
            $p=new clsKetNoi();
            $con = $p->moKetNoi();
            $truyvan="INSERT INTO taikhoannguoidung(username,pass,hoTen,email,loaiNguoiDung,trangThai,diaChi,SDT) VALUES('$user', '$pw', '$hoTen', '$email', '$loainguoidung', '$trangthai', '$dc', '$sdt')";
            $kq=mysqli_query($con,$truyvan);
            $p->dongKetNoi($con);
            return $kq;
        }

        public function xemdonhang($id)
    {
        $p = new clsKetNoi();
        $con = $p->moKetNoi();

        // Query to get all promotions
        $sql = "SELECT * FROM hoadon WHERE maKH = $id";
        $kq = mysqli_query($con, $sql);

        $p->dongKetNoi($con);

        return $kq;  // Returns the query result
    }

    public function selectAllKM()
    {
        $p = new clsKetNoi();
        $con = $p->moKetNoi();

        // Query to get all promotions
        $sql = "SELECT * FROM ctkm WHERE 1";
        $kq = mysqli_query($con, $sql);

        $p->dongKetNoi($con);

        return $kq;  // Returns the query result
    }
    }

?>