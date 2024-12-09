<?php
    include_once('model/mThanhToan.php');
    class cThanhToan
    {
        public function getKhachHang($maKH)
        {
            $p = new mThanhToan();
            $tbl = $p->selectKhachHang($maKH);
            if($tbl){
                if($tbl->num_rows>0){
                    return $tbl;
                }else{
                    return -1; //không có dữ liệu trong bảngS
                }
            }else{
                return false;
            }
        }

        // public function getAllNguoiDung()
        // {
        //     $p = new mNguoiDung();
        //     $kq=$p->selectAllNguoiDung();
        //     if(mysqli_num_rows($kq)>0)
        //     {
        //         return $kq;
        //     }
        //     else
        //     {
        //         return false;
        //     }
        // }
    }

?>