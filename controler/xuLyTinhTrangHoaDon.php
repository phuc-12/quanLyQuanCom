<?php
include_once('../model/ketnoi.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['codeOrder'])) {
        $codeOrder = $_POST['codeOrder'];
        $trangThai = 1;  
        $p = new clsKetNoi();  
        $con = $p->moKetNoi();  

        $update_sql = "UPDATE hoadon SET trangThai = ? WHERE maHD = ?";
        $truyvan = $con->prepare($update_sql);
        $truyvan->bind_param("si", $trangThai, $codeOrder); 

        if ($truyvan->execute()) {
            echo json_encode([
                'status' => 'success',
                // 'message' => 'Thanh toán thành công cho mã hóa đơn ' . $codeOrder
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                // 'message' => 'Lỗi khi thực thi câu lệnh SQL: ' . $truyvan->error
            ]);
        }

        $truyvan->close();
        $con->close();

    } else {
        echo json_encode([
            'status' => 'error',
            // 'message' => 'Không tìm thấy mã đơn hàng'
        ]);
    }
} else {
    echo json_encode([
        'status' => 'error',
        // 'message' => 'Yêu cầu không hợp lệ'
    ]);
}
?>
