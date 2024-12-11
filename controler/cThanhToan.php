<?php
include($_SERVER['DOCUMENT_ROOT'] . "/quanLyQuanCom/model/mThanhToan.php");

    class cThanhToan
    {
        public function getKhachHang($maKH)
        {
            $p = new mThanhToan();
            $tbl = $p->selectKhachHang($maKH);
            
            if ($tbl) {
                // Kiểm tra nếu kết quả có dòng dữ liệu
                if ($tbl->num_rows > 0) {
                    return $tbl; // Trả về kết quả nếu có dữ liệu
                } else {
                    return -1; // Trả về -1 nếu không có dữ liệu
                }
            } else {
                return false; // Trả về false nếu truy vấn thất bại
            }
        }
        public function getMaKHbyOrderId($order_id){
            $p = new mThanhToan();
            $maKH = $p->selectMaKHByOrderId($order_id);
            if ($maKH !== null) {
                return $maKH;
            }else{
                return -1; // Trả về -1 nếu không có dữ liệu
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
        public function getCTHDbyMaHD($order_id){
            $p = new mThanhToan();
            $listDetailOrders = $p->selectCTHDbyMaHD($order_id);
            if (!empty($listDetailOrders)) {
                return $listDetailOrders;  // Trả về danh sách chi tiết hóa đơn
            } else {
                return -1;  // Nếu không có chi tiết hóa đơn, trả về -1
            }
        }
        //lấy loaiKH bởi mã khách hàng
        public function getLoaiKH($maKH){
            $p = new mThanhToan();
            $loaiKH = $p->selectLoaiKH($maKH);
            if(!empty($loaiKH)){
                return $loaiKH;
            }else{
                return -1;
            }
        }
        //lấy danh sách KM bỏi loại KH
       public function getlistKMbyLoaiKH($loaiKH){
        $p = new mThanhToan();
        $danhSachLoaiKm = $p->selectDanhSachLoaiKH($loaiKH);
        if(!empty($danhSachLoaiKm)){
            return $danhSachLoaiKm;
        }else{
            return -1;
        }
       }
    }

?>