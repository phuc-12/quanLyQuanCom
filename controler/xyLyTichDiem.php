<?php
include_once('../model/ketnoi.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy giá trị
    $maKh = isset($_POST['maKh']) ? $_POST['maKh'] : '';  // Mã khách hàng
    $diemTichLuy = isset($_POST['diemTichLuy']) ? $_POST['diemTichLuy'] : 0;  // Điểm tích lũy
    $tongTienSauGiam = isset($_POST['tongTienSauGiam']) ? $_POST['tongTienSauGiam'] : 0;  // Tổng tiền sau khi giảm giá

    // Chuyển kiểu dữ liệu
    $diemTichLuy = (int) $diemTichLuy;
    $tongTienSauGiam = (int) str_replace(',', '', $tongTienSauGiam);

    // Tính điểm tích lũy
    $ten_percent_of_total = $tongTienSauGiam * 0.1; // 10% của tổng hóa đơn
    $points_to_add = (int) ($ten_percent_of_total / 1000); // Chuyển điểm ( 1000 VND = 1 điểm )

    // Tính điểm tích lũy mới
    $new_diemTichLuy = $diemTichLuy + $points_to_add;

    // Xác định loại khách hàng 
    if ($new_diemTichLuy >= 700) {
        $type = 3; //kim cương
    } elseif ($new_diemTichLuy >= 400) {
        $type = 2; //vàng
    } elseif ($new_diemTichLuy >= 200) {
        $type = 1; //bạc
    } else {
        $type = 4; //thường
    }


    $p = new clsKetNoi();  
    $con = $p->moKetNoi(); 

  // Chuẩn bị câu lệnh SQL
    $update_sql = "UPDATE khachhang SET diemTichLuy = ?, maLoaiKH = ? WHERE maKH = ?";

    if ($truyvan = $con->prepare($update_sql)) {
        // Liên kết tham số vào câu lệnh SQL (diemTichLuy, maLoaiKH, maKH)
        $truyvan->bind_param("iii", $new_diemTichLuy, $type, $maKh); 

        //thục thi
        if ($truyvan->execute()) {
            // trả về kết quả JSON
            $response = array(
                'success' => true,
                'new_diemTichLuy' => $new_diemTichLuy,
                'type' => $type
            );
        } else {
            // Nếu có lỗi khi cập nhật
            $response = array(
                'success' => false,
                // 'message' => 'Lỗi khi cập nhật dữ liệu vào cơ sở dữ liệu.'
            );
        }

        $truyvan->close();
    } else {
        // báo lỗi
        $response = array(
            'success' => false,
            // 'message' => 'Lỗi trong câu lệnh SQL.'
        );
    }

    $p->dongKetNoi($con);

    // Trả về kết quả dưới dạng JSON
    echo json_encode($response);
}
?>
