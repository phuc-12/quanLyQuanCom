<?php

    // class upload {
    //     public function uploadfile ($name,$tmp_name,$folder,$maMon,$maLoaiMon)
    //     {
    //         if($name!='')
    //         {
    //             $name=$maLoaiMon.$maMon.'.jpg';

    //             $des=$folder."/".$name;//->img/thucDon/1MMan002.jpg
    //             if(move_uploaded_file($tmp_name,$des))
    //             {
    //                 return 1;
    //             }
    //             else 
    //             {
    //                 return $des."<br>".$tmp_name."<br>"."0";
    //                 // return 0;
    //             }
    //         }
    //         else 
    //         {
    //             return -1;
    //         }
    //     }
    // }

    // class upload {
    //     public function uploadfile($name, $tmp_name, $folder, $maMon, $maLoaiMon) {
    //         if ($name != '') {
    //             $name = $maLoaiMon . $maMon . '.jpg';
    //             $des = $_SERVER['DOCUMENT_ROOT'] . "/" . $folder . "/" . $name;
    //             $absolute_folder = $_SERVER['DOCUMENT_ROOT'] . "/" . $folder;
    //             // Kiểm tra file tạm thời có tồn tại không
    //             if (file_exists($tmp_name)) {
    //                 // Kiểm tra di chuyển file
    //                 if (move_uploaded_file($tmp_name, $des)) {
    //                     return "Upload thành công!";
    //                 } else {
    //                     return "Không thể di chuyển file! Đường dẫn đích: " . $des . "<br>Đường dẫn file tạm: " . $tmp_name . "<br>" .$absolute_folder;
    //                 }
    //             } else {
    //                 return "File tạm không tồn tại: " . $tmp_name; 
    //             }
    //         } else {
    //             return "Không có tên file!";
    //         }
    //     }
    // }

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

