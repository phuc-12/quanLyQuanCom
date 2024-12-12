<?php

if (isset($_POST['total_price']) && isset($_POST['makM'])) {
    $giaGoc = (int)$_POST['total_price']; // tongtien
    $makM = $_POST['makM']; // makM


    if($makM === "Giảm 10%"){
        $phanTramGiamGia = 10;
        $giamGiaMax = 30000;
        if ($giaGoc >= 50000) {
            $giamGia = $giaGoc * ($phanTramGiamGia / 100);
            if ($giamGia > $giamGiaMax) {
                $giamGia = $giamGiaMax;
            }
            $giaSauGiam = $giaGoc - $giamGia;
        }else{  
            $giamGia = 0;
            $giaSauGiam = $giaGoc;
            $makM = "Khuyến mãi chưa đủ điều kiện áp dụng !";            
        }
    }

    if($makM === "Giảm 30K"){
        if ($giaGoc >= 70000) {
        $giamGiaMax = 30000;
        $giaSauGiam = $giaGoc - $giamGiaMax;
        }else{
            $giamGia = 0;
            $giaSauGiam = $giaGoc;
            $makM = "Khuyến mãi chưa đủ điều kiện áp dụng !";
        }
    }

    if($makM === "Giảm 12%"){
        $phanTramGiamGia = 12;
        $giamGia = $giaGoc * ($phanTramGiamGia / 100);
        $giaSauGiam = $giaGoc - $giamGia;
    }


    if($makM === "Giảm 8%"){
        $phanTramGiamGia = 8;
        $giamGiaMax = 20000;
        if ($giaGoc >= 30000) {
            $giamGia = $giaGoc * ($phanTramGiamGia / 100);
            if ($giamGia > $giamGiaMax) {
                $giamGia = $giamGiaMax;
            }
            $giaSauGiam = $giaGoc - $giamGia;
        }else{
            $giamGia = 0;
            $giaSauGiam = $giaGoc;
            $makM = "Khuyến mãi chưa đủ điều kiện áp dụng !";
        }
    }
    

    if($makM === "Giảm 20K"){
        $giamGiaMax = 20000;
        $giaSauGiam = $giaGoc - $giamGiaMax;
    }

    if($makM === "Giảm 10K"){
        $giamGiaMax = 10000;
        $giaSauGiam = $giaGoc - $giamGiaMax;
    }

    if($makM === "Giảm 8K"){
        $giamGiaMax = 8000;
        $giaSauGiam = $giaGoc - $giamGiaMax;
    }
    if($makM === "Giảm 15K"){
        $giamGiaMax = 15000;
        $giaSauGiam = $giaGoc - $giamGiaMax;
    }
    

    if($makM === "Giảm 50K"){
        if ($giaGoc >= 150000) {
            $giamGiaMax = 50000;
            $giaSauGiam = $giaGoc - $giamGiaMax;
        }else{
            $giamGia = 0;
            $giaSauGiam = $giaGoc;
            $makM = "Khuyến mãi chưa đủ điều kiện áp dụng !";
        }
    }
    

    if($makM === "Giảm 15%"){
        $phanTramGiamGia = 15;
        $giamGia = $giaGoc * ($phanTramGiamGia / 100);
        $giaSauGiam = $giaGoc - $giamGia;
    }
    

    $response = array(
        'tongTienSauGiam' => number_format($giaSauGiam, 0, '.', ','),
        'discount' => $makM
    );

    // Đặt tiêu đề Content-Type là application/json
    header('Content-Type: application/json');

    // Trả về dữ liệu dưới dạng JSON
    echo json_encode($response);
}
?>
