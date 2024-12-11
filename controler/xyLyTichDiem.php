<?php
include_once('../model/ketnoi.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy giá trị
    $maKh = isset($_POST['maKh']) ? $_POST['maKh'] : '';  // Mã khách hàng
    $accumulated_points = isset($_POST['accumulated_points']) ? $_POST['accumulated_points'] : 0;  // Điểm tích lũy
    $total_after_calculating_discounts = isset($_POST['total_after_calculating_discounts']) ? $_POST['total_after_calculating_discounts'] : 0;  // Tổng tiền sau khi giảm giá

    // Chuyển kiểu dữ liệu
    $accumulated_points = (int) $accumulated_points;
    $total_after_calculating_discounts = (int) str_replace(',', '', $total_after_calculating_discounts);

    // Tính điểm tích lũy
    $ten_percent_of_total = $total_after_calculating_discounts * 0.1; // 10% của tổng hóa đơn
    $points_to_add = (int) ($ten_percent_of_total / 1000); // Chuyển điểm ( 1000 VND = 1 điểm )

    // Tính điểm tích lũy mới
    $new_accumulated_points = $accumulated_points + $points_to_add;

    // Xác định loại khách hàng 
    if ($new_accumulated_points >= 700) {
        $type = 3; //kim cương
    } elseif ($new_accumulated_points >= 400) {
        $type = 2; //vàng
    } elseif ($new_accumulated_points >= 200) {
        $type = 1; //bạc
    } else {
        $type = 4; //thường
    }


    $p = new clsKetNoi();  
    $con = $p->moKetNoi(); 

  // Chuẩn bị câu lệnh SQL
    $update_sql = "UPDATE khachhang SET diemTichLuy = ?, maLoaiKH = ? WHERE maKH = ?";

    if ($stmt = $con->prepare($update_sql)) {
        // Liên kết tham số vào câu lệnh SQL (diemTichLuy, maLoaiKH, maKH)
        $stmt->bind_param("iii", $new_accumulated_points, $type, $maKh); 

        //thục thi
        if ($stmt->execute()) {
            // trả về kết quả JSON
            $response = array(
                'success' => true,
                'new_accumulated_points' => $new_accumulated_points,
                'type' => $type
            );
        } else {
            // Nếu có lỗi khi cập nhật
            $response = array(
                'success' => false,
                'message' => 'Lỗi khi cập nhật dữ liệu vào cơ sở dữ liệu.'
            );
        }

        $stmt->close();
    } else {
        // báo lỗi
        $response = array(
            'success' => false,
            'message' => 'Lỗi trong câu lệnh SQL.'
        );
    }

    $p->dongKetNoi($con);

    // Trả về kết quả dưới dạng JSON
    echo json_encode($response);
}
?>
