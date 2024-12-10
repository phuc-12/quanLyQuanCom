<?php
include_once('../model/ketnoi.php');
// Bắt đầu session (nếu cần thiết)
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['codeOrder'])) {
        $codeOrder = $_POST['codeOrder'];
        $trangThai = 1;  
        $p = new clsKetNoi();  
        $con = $p->moKetNoi();  

        $update_sql = "UPDATE hoadon SET trangThai = ? WHERE maHD = ?";
        $stmt = $con->prepare($update_sql);
        $stmt->bind_param("si", $trangThai, $codeOrder); 

        if ($stmt->execute()) {
            echo json_encode([
                'status' => 'success',
                'message' => 'Thanh toán thành công cho mã hóa đơn ' . $codeOrder
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Lỗi khi thực thi câu lệnh SQL: ' . $stmt->error
            ]);
        }

        $stmt->close();
        $con->close();

    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Không tìm thấy mã đơn hàng'
        ]);
    }
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Yêu cầu không hợp lệ'
    ]);
}
?>
