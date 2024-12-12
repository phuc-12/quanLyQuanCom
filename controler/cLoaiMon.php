<?php

    include($_SERVER['DOCUMENT_ROOT'] . "/quanLyQuanCom/model/mLoaiMon.php");
    class CLoaiMon {
        public function GetLM()
		{
			$p = new MLoaiMon();
            $tblLM = $p->SelectAllLM();
            if($tblLM){
                if($tblLM->num_rows>0){
                    return $tblLM;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
		}
    }

?>