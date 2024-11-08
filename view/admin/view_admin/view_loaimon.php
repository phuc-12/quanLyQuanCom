<?php

    include("../../../controler/cLoaiMon.php");
    $p = new CLoaiMon();
    $tblLM = $p->GetLM();
    if(!$tblLM)
    {
        echo 'Không kết nối được';
    }
    elseif($tblLM==-1)
    {
        echo 'Chưa có dữ liệu';
    }
    else 
    {
        echo '<select name="loaimon" id="loaimon">
                <option>Chọn loại món ăn</option>';
        while($r=$tblLM->fetch_assoc())
        {
            echo '<option value="'.$r['maLoaiMon'].'">'.$r['tenLoaiMon'].'</option>';
        }
        echo '</select>';
        
    }

?>