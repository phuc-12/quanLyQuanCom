<?php

    include($_SERVER['DOCUMENT_ROOT'] . "/quanLyQuanCom/model/mMonAn.php");
    class CMonAn{
        public function getAllMA(){
            $p = new MMonAn();
            $tblMA = $p->SelectAllMA();
            if($tblMA){
                if($tblMA->num_rows>0){
                    return $tblMA;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
        }

        public function GetTHByIDSP($txt)
		{
			$p = new MMonAn();
			$result = $p->SelectAllTHByIDSP($txt);
			if($result)
			{
				if($result->num_rows>0)
				{
					return $result;
				}
				else{
					return -1;//khong co du lieu trong bang
				}
			}
			else
			{
				return false;
			}
		}

	
    }
?>