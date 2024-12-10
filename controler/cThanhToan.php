<?php
    include($_SERVER['DOCUMENT_ROOT'] . "/quanLyQuanCom/model/mThanhToan.php");

    class cThanhToan
    {
        public function getKhachHang($maKH)
        {
            $p = new mThanhToan();
            $tbl = $p->selectKhachHang($maKH);
            
            if ($tbl) {
                if ($tbl->num_rows > 0) {
                    return $tbl; // Trả về kết quả nếu có
                } else {
                    return -1; // không có dữ liệu
                }
            } else {
                return false; //truy vấn thất bại
            }
        }

        public function getMaKhByOrderId($order_id){
            $p = new mThanhToan();
            $maKH = $p->selectMaKHByOrderId($order_id);
            if ($maKH !== null) {
                return $maKH;
            }else{
                return -1; //không có dữ liệu
            }
        }

        public function getHoaDonByOrderId($order_id){
            $p = new mThanhToan();
            $order = $p->selectHoaDonByOrderId($order_id);
            if($order->num_rows >0){
                return $order;
            }else{
                return -1;
            }
        }

        public function getDanhSachChiTietHoaDonBoiMaHD($order_id){
            $p = new mThanhToan();
            $listDetailOrders = $p->selectDanhSachChiTietHoaDonBoiMaHD($order_id);
            if (!empty($listDetailOrders)) {
                return $listDetailOrders;  //danh sách chi tiết hóa đơn
            } else {
                return -1;
        }

        //lấy loaiKH (maKH)
        public function getLoaiKH($maKH){
            $p = new mThanhToan();
            $loaiKH = $p->selectLoaiKH($maKH);
            if(!empty($loaiKH)){
                return $loaiKH;
            }else{
                return -1;
            }
        }

        //lấy khuyến mãi (loaiKH)
       public function getDanhSachKmBoiLoaiKH($loaiKH){
        $p = new mThanhToan();
        $danhSachLoaiKm = $p->selectDanhSachLoaiKH($loaiKH);
        if(!empty($danhSachLoaiKm)){
            return $danhSachLoaiKm;
        }else{
            return -1;
        }
       }
    }
}
?>