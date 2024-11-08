<?php

    class upload {
        public function uploadfile($name, $tmp_name, $folder, $maMon, $maLoaiMon) {
            if ($name != '') {
                $des = $_SERVER['DOCUMENT_ROOT'] . "/" . $folder . "/" . $name;
    
                // Kiểm tra nếu file tạm tồn tại
                if (file_exists($tmp_name)) {
                    // Di chuyển file tạm tới thư mục đích
                    if (move_uploaded_file($tmp_name, $des)) {
                        return "Upload thành công!";
                    } else {
                        return "Không thể di chuyển file! Đường dẫn đích: " . $des;
                    }
                } else {
                    return "File tạm không tồn tại: " . $tmp_name;
                }
            } else {
                return "Không có tên file!";
            }
        }
    }
    
    
?>

