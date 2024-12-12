<?php
    include_once($_SERVER['DOCUMENT_ROOT'] . "/quanLyQuanCom/controler/cMonAnTrangChu.php");
    $p = new CMonAnTrangChu();
    $tblMA = $p->getAllMonChay();
    if(!$tblMA)
    {
        echo 'Không kết nối được';
    }
    elseif($tblMA==-1)
    {
        echo 'Chưa có dữ liệu món ăn';
    }
    else
    {	
        while($r=$tblMA->fetch_assoc())
        {	 
            $idsp=$r['maMA'];
            $hinh=$r['hinhAnh'];
            $gia=$r['donGia'];
            $ten=$r['tenMA'];
            switch($r['maLoaiMA'])
            {
                case 1: {$thucDon="monman";} break;
                case 2: {$thucDon="monchay";} break;
                case 3: {$thucDon="douong";} break;
                case 4: {$thucDon="trangmieng";} break;
            }
            echo '<div class="menu-item" style="float: left;">';
            echo '<a href="food-detail.php?id='.$idsp.'">
                        <div class="sp-img">
                            <img src="img/'.$thucDon.'/'.$hinh.'" alt="">
                        </div>
                        <div class="sp-info">
                            <h3>'.$ten.'</h3>
                            <p>'.$gia.'đ</p>
                        </div>
                    </a>';
            echo '</div>';
        }
    
    }


?>
