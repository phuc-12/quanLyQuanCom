<?php

    include($_SERVER['DOCUMENT_ROOT'] . "/quanLyQuanCom/model/mDonHang.php");
    class CHoaDon{
        public function getAllHD(){
            $p = new MHoaDon();
            $tblHD = $p->SelectAllHD();
            if($tblHD){
                if($tblHD->num_rows>0){
                    return $tblHD;
                }else{
                    return -1; //không có dữ liệu trong bảngS
                }
            }else{
                return false;
            }
        }
        // //
       public function getDetailHD($maHD) {
            $p = new MHoaDon();
            $tblCTHD = $p->SelectDetailHD($maHD);
            if ($tblCTHD instanceof mysqli_result) {
                return $tblCTHD; // Trả về đối tượng mysqli_result
            } elseif ($tblCTHD === false) {
                return false; // Lỗi kết nối
            } else {
                return -1; // Không có dữ liệu
            }
        }
        
    }
?>