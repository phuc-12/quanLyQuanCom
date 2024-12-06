<?php
    include_once('ketnoi.php');
    class mThanhToan{
        public function selectKhachHang($maKH){
            $p = new clsKetNoi();
            $con = $p -> moKetNoi();
            $sql = "select k.hoTen, t.diaChi, t.SĐT from khachhang k join taikhoannguoidung t on k.idNguoiDung = t.idNguoiDung where maKH = '$maKH'";
            $kq = mysqli_query($con,$sql);
            $p -> dongKetNoi($con);
            return $kq;
        }
        // public function selectAllNguoiDung(){
        //     $p = new clsKetNoi();
        //     $con = $p -> moKetNoi();
        //     $sql = "SELECT * FROM nguoidung n join phanquyen p on n.id_quyen=p.id_quyen";
        //     $kq = mysqli_query($con,$sql);
        //     $p -> dongKetNoi($con);
        //     return $kq;
        // }
    }

?>