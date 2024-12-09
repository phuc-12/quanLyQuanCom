<?php

    include_once("chucnangnhanvien.php");
    include_once("ketnoi.php");
    class MHoaDon extends tmdt {
        // public function SelectAllHD() {
        //     $p = new tmdt();
        //     $conn = $p->connect();
        //     $conn->set_charset('utf8');
        //     if($conn){
        //         // $str = "select * from hoadon";
        //         $str = "SELECT hd.maHD, hd.maKH,hd.ngayThang, kh.hoTen, hd.trangThaiGH
        //             FROM hoadon hd
        //             JOIN khachhang kh ON hd.maKH = kh.maKH";
        //         $tblHD = $conn->query($str);
        //         return $tblHD;
        //     }else{
        //         return false;
        //     }
        // }
        // //
        public function SelectAllDonHang() {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "SELECT hd.maHD, hd.maKH, kh.hoTen, hd.trangThai FROM hoadon hd JOIN khachhang kh ON hd.maKH = kh.maKH ";
                $tblHoaDon = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblHoaDon;
            }else{
                return false;
            }
        }
        public function SelectAllTrangThaiDH($comp){
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "select * from hoadon where trangThai = $comp";
                $tblHoaDon = $conn->query($str);
                $p->dongketnoi($conn);
                return $tblHoaDon;
            }else{
                return false;
            }
        }

        public function SelectCountDonHang()
        {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "SELECT COUNT(*) as total FROM hoadon";
                $tblHoaDon = $conn->query($str);
                $result = $tblHoaDon->fetch_assoc(); // Lấy kết quả đếm
                $p->dongketnoi($conn);
                return $result['total']; // Trả về số lượng
            } else {
                return false;
            }
        }

        
        public function SelectCountDHDaThanhToan()
        {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "SELECT COUNT(*) as total FROM hoadon WHERE trangThai = 1";
                $tblHoaDon = $conn->query($str);
                $result = $tblHoaDon->fetch_assoc(); // Lấy kết quả đếm
                $p->dongketnoi($conn);
                return $result['total']; // Trả về số lượng
            } else {
                return false;
            }
        }

        public function SelectCountDHChuaThanhToan()
        {
            $p = new clsKetNoi();
            $conn = $p->moketnoi();
            $conn->set_charset('utf8');
            if($conn){
                $str = "SELECT COUNT(*) as total FROM hoadon WHERE trangThai = 0";
                $tblHoaDon = $conn->query($str);
                $result = $tblHoaDon->fetch_assoc(); // Lấy kết quả đếm
                $p->dongketnoi($conn);
                return $result['total']; // Trả về số lượng
            } else {
                return false;
            }
        }
    }
    

?>